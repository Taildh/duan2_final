<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;
use DB;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $posts = Post::paginate(5);
        }else{
            $kw = $request->keyword;
            $posts = Post::where('title', 'like', "%$kw%")
                            ->paginate(5);
            $posts->withPath("?keyword=$kw");
        }
        return view('list-posts', [
                        'baiviet' => $posts
                    ]);
    }
    public function addNew(){
        $model = new Post();
        $posts = Post::all();
        $category_product= Category::where('category_type','=','0')->get();
        $category_post= Category::where('category_type','=','1')->get();
        return view('post.add-form', compact('model', 'posts', 'category_post','category_product'));
    }
    public function saveAddNew(PostRequest $request){
        $model = new Post();
        $dt = Carbon::now();
        if($request->hasFile('image')){

            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../images/'.$path;
        }
        if($request->date == null){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homepost'));
    }
    public function editForm($id){
        $model = Post::find($id);
        if(!$model){
            return redirect()->route('homepost');
        }
        $posts = Post::all();
        $cates= Category::where('category_type','=','1')->get();
        return view('post.edit-form', compact('model', 'posts', 'cates'));
    }
    public function editStatus($id){
        $model = Post::find($id);
        return view('post.edit-status', compact('model'));
    }
    public function saveEdits(Request $request){
        $model = Post::find($request->id);
        $dt = Carbon::now();
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products',
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        if($request->status == null){
            $model->status = 0;
        }elseif($request->status == 1){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homepost'));
    }
    public function saveEdit(PostRequest $request){
        $model = Post::find($request->id);
        $dt = Carbon::now();
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products',
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../images/'.$path;
        }
        if($request->status == null){
            $model->status = 0;
        }elseif($request->status == 1){
            $model->date = $dt->toDateString();
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homepost'));
    }

    // Xóa
    public function deletePost($id){
        $post= Post::find($id);
        $post->delete();
        return redirect(route('homepost'));
    }

    public function listPost()
    {
        return view('list-posts');
    }

    public function getData()
    {
        $posts = Post::select([
            'id',
            'title',
            'author',
            'image',
            'views',
            'date',
        ]);
        return DataTables::of($posts)->addColumn('action',function($data){
            $button = '<a class="btn btn-primary" href="'. route('post.edit', $data->id) .'">Edit</a>';
            $button .= '<a href="'. route('post.remove', $data->id) .'" class="btn btn-danger red delete">Xóa</a>';

            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
