<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\User;
use App\Models\Slideshow;
use App\Models\Order;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Slideshowchildren;
use DB;
use App\Http\Requests\ContactRequest;
class TrangchuController extends Controller
{
    public function index(Request $request){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $slide = Slideshow::all()->where('status','=','1');
        $slideshow= Slideshowchildren::all()->take(1);
        foreach ($slide as $key => $sli) {

            $parent= $sli->id;
            $st= $sli->status;
            if($st == 1){
            $slideshow = Slideshowchildren::all()->where('parent_id','==',$parent);
            }else{
                $slideshow= Slideshowchildren::all()->rand(1);
            }
        }
        $model = DB::table('product')->orderBy('views', 'desc')->take(9)->get();
        $post = DB::table('post')->where('status',2)->orderBy('views', 'desc')->take(3)->get();
        return view('home', compact('category_product','category_post','model','post','slideshow','slide'));
    }

    public function sanpham($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Category::find($id);
        $model = Product::where('category_id','=',$id)->where('status','=',1)->paginate(9);
        return view('sanpham', compact('category_product','category_post','model','cate'));
    }

    //Liên hệ

    public function lienhe(){
        $model = new Contact();
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();

        return view('lienhe', compact('category_product','category_post','model'));
    }
    public function saveAddnew(ContactRequest $request){
        $model = new Contact();

        $dt = Carbon::now();
        if($request->date == null){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('lienhe'));
    }

    //Chi tiết sp

    public function saveAdd(Request $request, $id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Product::find($id);    
        $cm= new Comment();
        $model = Product::all()->where('id','!=',$id);
        $cm->fill($request->all());
        $cm->save();
        return back();
    }

    public function tintuc(Request $request, $id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Category::find($id);
        $model = Post::where('category_post_id','=',$id)->where('status','=',2)->paginate(6);
        return view('tintuc', compact('category_product','category_post','model','cate'));
    }

    public function chitiet($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Product::find($id);
        $model = Product::all()->where('id','!=',$id);
        return view('chitietsanpham', compact('category_product','category_post','cate','model'));
    }

    public function chitietbv($id){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $cate=Post::find($id);
        $model = Post::all()->where('id','!=',$id)->take(4);
        $comments=Comment::all()->where('post_id','=',$id);
        return view('chitietbaiviet', compact('category_product','category_post','cate','model','comments'));
    }

    public function saveAddpost(Request $request, $id){
        $cate=Post::find($id);
        $cm= new Comment();
        $cm->fill($request->all());
        $cm->save();
        return back();
    }

    public function gioithieu(Request $request){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();

        return view('gioithieu', compact('category_product','category_post'));
    }

    //Lịch sử mua hàng

    public function history(Request $request){

        $orders = User::find($request->id)->orders;
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
    
        return view('lichsumuahang', compact('category_product','category_post','orders'));

    // public function history($id){
    //     $category_product= Category::where('category_type','=','0')->get();
    //     $category_post= Category::where('category_type','=','1')->get();
    //     $order= Order::all()->where('user_id','!=',$id);
    //     return view('lichsumuahang', compact('category_product','category_post','order'));
    }
    public function saveRate(Requests $request){
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        $model = User::find($request->id);
        $model->fill($request->all());
        $model->save();
        return view('lichsumuahang', compact('category_product','category_post','order'));
    }


    public function editinfo($id){
        $model = User::find($id);
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        if(!$model){
            return redirect()->route('trangchu');
        }
        return view('edituser',compact('model', 'category_product','category_post'));
    }

    public function saveinfo(Request $request){
        $model = User::find($request->id);
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        if($request->hasFile('image')){
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        $model->fill($request->all());
        $model->save();
        return back();
    }
}
