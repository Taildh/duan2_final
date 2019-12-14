<?php
use Illuminate\Http\Request;

use App\Models\Slideshow;


Route::get('/', 'SlideshowController@index')->name('homeslide');

Route::get('/images/{id}', 'SlideshowController@imagechil')->name('imageSlide');

Route::get('add-new', 'SlideshowController@addNew')->name('slideshow.add');
Route::post('add-new', 'SlideshowController@saveAddNew');

Route::get('edit/{id}', 'SlideshowController@editForm')->name('slideshow.edit');
Route::post('edit/{id}', 'SlideshowController@saveEdit');


Route::get('remove/{id}',function(Request $request)
	{
		$cate = Slideshow::find($request->id);
		$cate->delete();
		DB::table('slideshow_children')->where('parent_id', '=', $request->id)->delete();
		return redirect(route('homeslide'));
	})->name('slideshow.remove');

?>