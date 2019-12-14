<?php

Route::get('/', 'CartController@listCart')->name('homecart');
Route::get('detail/{id}', 'CartController@listDetail')->name('homecartdetail');
Route::get('edit/{id}', 'CartController@editCart')->name('cart.edit');
Route::post('edit/{id}', 'CartController@saveEdit');
Route::get('/test','CartController@listOrder');
Route::get('/getData','CartController@getData')->name('orders.getData');

?>
