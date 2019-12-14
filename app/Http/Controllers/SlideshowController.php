<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slideshow;
use App\Models\Slideshowchildren;
use DB;
class SlideshowController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $slideshows = Slideshow::paginate(5);
        }else{
            $kw = $request->keyword;
            $slideshows = Slideshow::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $slideshows->withPath("?keyword=$kw");
        }
        return view('list-slideshow', [
                        'slide' => $slideshows
                    ]);
    }
    public function addNew(){
        $model = new Slideshow();
        $slideshows = Slideshow::all();
        return view('slideshow.add-form',compact('model', 'slideshows'));
    }

    public function saveAddNew(Request $request){
        $model = new Slideshow();
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
        return redirect(route('homeslide'));
    }

    public function editForm($id){
        $model = Slideshow::find($id);
        if(!$model){
            return redirect()->route('homeslide');
        }
        $slideshows = Slideshow::all();
        return view('slideshow.edit-form',compact('model', 'slideshows'));
    }
    public function saveEdit(Request $request){
        $model = Slideshow::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('products', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = '../../../images/'.$path;
        }
        if($request->status == null){
            $model->status = 0;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('homeslide'));
    }

    // Xóa
    public function deletePost($id){
        $post= Slideshow::find($id);
        $post->delete();
        return redirect(route('homeslide'));
    }

    //Image slide

    public function image(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $slideshows = Slideshowchildren::paginate(5);
        }else{
            $kw = $request->keyword;
            $slideshows = Slideshowchildren::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $slideshows->withPath("?keyword=$kw");
        }
        return view('list-slideshowchildren', [
                        'slide' => $slideshows
                    ]);
    }
    public function imagechil($id){
        $model = Slideshow::find($id);
        $slideshows=DB::table('slideshow_children')->where('parent_id','=',$id)->get();
        
        return view('list-slideshowchil',compact('model', 'slideshows'));
    }
    public function addNewimg(){
        $model = new Slideshowchildren();
        $slide_chil= Slideshow::all();
        $slideshows = Slideshowchildren::all();
        return view('slideshow.slideshowchildren.add-form',compact('model', 'slideshows','slide_chil'));
    }

    public function saveAddNewimg(Request $request){
        $model = new Slideshowchildren();
        if($request->hasFile('image')){
           
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('image')->storeAs('products', $filename);
            $model->image = '../../../images/'.$path;
        }
        $model->fill($request->all());
        //dd($model);
        $model->save();
        return redirect(route('homeslideimg'));
    }

    public function editFormimg($id){
        $model = Slideshowchildren::find($id);
        if(!$model){
            return redirect()->route('homeslideimg');
        }
        $slide_chil= Slideshow::all();
        $slideshows = Slideshowchildren::all();
        return view('slideshow.slideshowchildren.edit-form',compact('model', 'slideshows','slide_chil'));
    }
    public function saveEditimg(Request $request){
        $model = Slideshowchildren::find($request->id);
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
        return redirect(route('homeslideimg'));
    }

    // Xóa
    public function deletePostimg($id){
        $post= Slideshowchildren::find($id);
        $post->delete();
        return redirect(route('homeslideimg'));
    }
}