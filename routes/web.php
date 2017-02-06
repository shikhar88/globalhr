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

Route::get('/','HomeController@home');

Route::get('/login','AdminController@admin');
Route::post('/login','AdminController@authenticate');
Route::get('/logout', function(){Auth::logout();return redirect('/login')->with('success','Logged out Succesfully');});
Route::group(['middleware'=>['auth']], function(){
    Route::get('/admin','AdminController@dashboard');
    Route::get('/admin/maps','AdminController@dashboard');
    Route::get('/admin/aboutus','AdminController@content');
    Route::get('/admin/banner','AdminController@banner');
    Route::post('/admin/banner','AdminController@bannersave');
});