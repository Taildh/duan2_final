<?php

Route::get('/', 'SlideshowController@image')->name('homeslideimg');

Route::get('add-new', 'SlideshowController@addNewimg')->name('slideshowimg.add');
Route::post('add-new', 'SlideshowController@saveAddNewimg');
Route::get('/{id}', 'SlideshowController@editFormimg')->name('slideshowimg.edit');
Route::post('/{id}', 'SlideshowController@saveEditimg');
Route::get('deletePost/{id}', 'SlideshowController@deletePostimg')->name('slideshowimg.remove');

?>