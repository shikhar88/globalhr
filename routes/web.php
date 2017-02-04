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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/admin','AdminController@admin');
Route::post('/admin','AdminController@authenticate');
Route::get('/logout', function(){Auth::logout();return redirect('/admin')->with('success','Logged out Succesfully');});
Route::group(['middleware'=>['auth']], function(){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/maps','AdminController@dashboard');
});