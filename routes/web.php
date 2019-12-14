<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth'], function(){

Route::get('admins','AdminChartController@mostViewProduct')->name('homeadmin');

});

Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('403', function(){
	return view('auth403');
})->name('auth.403');


?>
