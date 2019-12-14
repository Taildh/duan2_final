<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;
class ProductController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $products = Product::paginate(5);
        }else{
            $kw = $request->keyword;
            $products = Product::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $products->withPath("?keyword=$kw");
        }
        return view('list-product', [
                        'sanpham' => $products
                    ]);
    }
    public function addNew(){
        $model = new Product();
        $products = Product::all();
        $category_product= Category::where('category_type','=','0')->get();
        return view('product.add-form',compact('model', 'products', 'category_product'));
    }

    public function saveAddNew(ProductRequest $request){
        $model = new Product();
        if($request->hasFile('image')){

            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        //dd($model);

        $model->save();
        Alert::success('Thành công', 'Đơn hàng được đã được gửi');
        return redirect(route('home'));
    }

    public function editForm($id){
        $model = Product::find($id);
        if(!$model){
            return redirect()->route('home');
        }
        $products = Product::all();
        $cates = Category::all();
        return view('product.edit-form',compact('model', 'products', 'cates'));
    }

    public function saveEdit(ProductRequest $request){
        $model = Product::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products',
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('home'));
    }
    public function editStatus($id){
        $model = Product::find($id);
        return view('product.edit-status',compact('model'));
    }

    public function saveEdits(Request $request){
        $model = Product::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products',
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        if($request->status == null){
            $model->status = 0;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('home'));
    }

    // Xóa
    public function deletePost($id){
        $post= Product::find($id);
        $post->delete();
        return redirect(route('home'));
    }

    public function listPr()
    {
        return view('listpr')->with('success_message','Test');
    }

    public function getData()
    {   
        $product = Product::select([
            'id',
            'name',
            'price',
            'sell_price',
            'image',
            'views',
        ]);
        return DataTables::of($product)->addColumn('action',function($data){
            $button = '<a class="btn btn-primary" href="'. route('product.edit', $data->id) .'">Edit</a>';
            $button .= '<a href="'. route('product.remove', $data->id) .'" class="btn btn-danger red delete">Xóa</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
