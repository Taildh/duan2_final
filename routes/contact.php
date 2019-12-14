<?php

Route::get('/', 'ContactController@index')->name('homecontact');
Route::get('deletePost/{id}', 'ContactController@deletePost')->name('contact.remove');

?>