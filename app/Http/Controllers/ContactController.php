<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
class ContactController extends Controller
{
    public function index(Request $request){
        if(!$request->has('keyword') || empty($request->keyword) ){
            $contacts = Contact::paginate(5);
        }else{
            $kw = $request->keyword;
            $contacts = Contact::where('name', 'like', "%$kw%")
                            ->paginate(5);
            $contacts->withPath("?keyword=$kw");
        }
        return view('list-contact', [
                        'lienhe' => $contacts
                    ]);
    }
    // Xóa
    public function deletePost($id){
        $post= Contact::find($id);
        $post->delete();
        return redirect(route('homecontact'));
    }
}
