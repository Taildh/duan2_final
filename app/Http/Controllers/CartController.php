<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use Session;
use Carbon\Carbon;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\SaveCartRequest;
use Yajra\DataTables\DataTables;

class CartController extends Controller
{

    public function cart()
    {
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        return view('cart',compact('category_product','category_post'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "idpro" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->sell_price,
                    "photo" => $product->image
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "idpro" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->sell_price,
            "photo" => $product->image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->forget('coupon');

            session()->put('cart', $cart);

            session()->flash('success', 'Cập nhật số lượng thành công');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->forget('coupon');
            session()->flash('success', 'Xóa sản phẩm thành công');
        }
    }

    public function listCart(Request $request)
    {
      if(!$request->has('keyword') || empty($request->keyword) ){
            $orders = Order::paginate(5);
            $order0 = Order::where('status','=',0)->paginate(5);
            $order1 = Order::where('status','=',1)->paginate(5);
            $order2 = Order::where('status','=',2)->paginate(5);
        }else{
            $order0=null;
            $order1=null;
            $order2=null;
            $kw = $request->keyword;
            $orders = Order::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $orders->withPath("?keyword=$kw");
        }
        return view('list-order', [
                        'model' => $orders
                    ],compact('order0','order1','order2'));
    }

    public function listDetail($id)
    {
        $model = Item::all()->where('order_id','=',$id);
        if(!$model){
            return redirect()->route('list_order');
        }
        return view('cart.cart_detail', compact('model'));
    }

    public function editCart($id){
        $model = Order::find($id);
        if(!$model){
            return redirect()->route('homecart');
        }
        $shipper= User::all()->where('role','==','Shipper');
        return view('cart.edit-form', compact('model','shipper'));
    }

    public function saveEdit(Request $request){
        $model = Order::find($request->id);
        $dt = Carbon::now();
        if($request->status = "Chưa xử lý" || $request->status = "Đang giao hàng" ){
            $model->sent_date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homecart'));
    }



    public function saveCart(SaveCartRequest $request)
    {
      $cart = Session::get('cart');

      $model= new Order();
      $dt = Carbon::now();
      if($request->order_date == null){
            $model->order_date = $dt->toDateString();
        }
      $model->fill($request->all());
      $model->save();

      foreach ($cart as $key => $value) {
          $bill= new Item();
          $bill->order_id=$model->id;
          $bill->price=$value['price'];
          $bill->quantity=$value['quantity'];
          $bill->product_id=$value['idpro'];
          $bill->image='../../'.$value['photo'];
          $bill->save();
      }

      Session::forget('cart');
      Session::forget('coupon');
      Alert::success('Thành công', 'Đơn hàng được đã được gửi');
      return redirect(route('cart.add'));
    }

    public function listOrder()
    {
        return view('list-order');
    }

    public function getData()
    {
        $orders = Order::select([
            'id',
            'name',
            'phone_number',
            'order_address',
            'order_date',
            'sent_date',
            'total_price',
            'status',
        ]);
        return DataTables::of($orders)->addColumn('action',function($data){
            $button = '<a href="'. route('cart.edit', $data->id) .'" class="btn btn-primary">Edit</a>';
            $button .= '<a href="'. route('homecartdetail', $data->id) .'" class="btn btn-success">Chi tiết</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
