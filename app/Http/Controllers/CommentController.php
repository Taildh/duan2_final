<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function indexpr(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $comments = Comment::paginate(5);
        }else{
            $kw = $request->keyword;
            $comments = Comment::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $comments->withPath("?keyword=$kw");
        }
        return view('list-commentpro', [
                        'binhluan' => $comments
                    ]);
    }
    public function indexbv(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $comments = Comment::paginate(5);
        }else{
            $kw = $request->keyword;
            $comments = Comment::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $comments->withPath("?keyword=$kw");
        }
        return view('list-comment', [
                        'binhluan' => $comments
                    ]);
    }

    public function deletePost($id){
        $post= Comment::find($id);
        $post->delete();
        return redirect(route('list-comment'));
    }
}