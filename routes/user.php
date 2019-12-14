<?php
use Illuminate\Http\Request;

use App\Models\User;

Route::get('/tk', 'UserController@index');
Route::get('add-new', 'UserController@addNew')->name('user.add');
Route::post('add-new', 'UserController@saveAddNew');
Route::get('edit/{id}', 'UserController@editForm')->name('users.edit');
Route::post('edit/{id}', 'UserController@saveEdit');
Route::get('remove/{id}',function(Request $request)
	{
		$cate = User::find($request->id);
		$cate->delete();
		DB::table('comment')->where('user_id', '=', $request->id)->delete();
		return redirect(route('adminsuper'));
	})->name('user.remove');

Route::get('/','UserController@getView')->name('adminsuper');
Route::get('/getData','UserController@getData')->name('user.Data');

?>