<?php

Route::get('sanpham', 'CommentController@indexpr')->name('homecommentpro');
Route::get('baiviet', 'CommentController@indexbv')->name('homecommentbv');
Route::get('deletePost/{id}', 'CommentController@deletePost')->name('homecommentbv.remove');
?> 