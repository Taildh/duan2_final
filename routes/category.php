<?php
use Illuminate\Http\Request;

use App\Models\Category;

Route::get('/', 'CategoryController@index')->name('homehome');
Route::get('/getData','CategoryController@getData')->name('cate.getData');
Route::get('add-new', 'CategoryController@addNew')->name('category.add');
Route::post('add-new', 'CategoryController@saveAddNew');
Route::get('edit/{id}', 'CategoryController@editForm')->name('category.edit');
Route::post('edit/{id}', 'CategoryController@saveEdit');
Route::get('remove/{id}',function(Request $request)
	{
		$cate = Category::find($request->id);
		$cate->delete();
		DB::table('product')->where('category_id', '=', $request->id)->delete();
		return redirect(route('homehome'));
	})->name('category.remove');
?>
