<?php

Route::get('/', 'PostController@listPost')->name('homepost');
Route::get('/getData','PostController@getData')->name('posts.getData');
Route::get('add-new', 'PostController@addNew')->name('post.add');
Route::post('add-new', 'PostController@saveAddNew');
Route::get('edit/{id}', 'PostController@editForm')->name('post.edit');
Route::post('edit/{id}', 'PostController@saveEdit');
Route::get('edits/{id}', 'PostController@editStatus')->name('post.edits');
Route::post('edits/{id}', 'PostController@saveEdits');
Route::get('deletePost/{id}', 'PostController@deletePost')->name('post.remove');

?>
