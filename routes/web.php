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



require __DIR__.'/adminlteExamples.php';
Auth::routes();

Route::get('/home', function() {
     return view('home');
})->name('home')->middleware('auth');

//Route::resource('banner', 'MainbannerController');



Route::resource('Banner', 'BannerController');
Route::resource('Helper', 'HelperController');

Route::get('Banner','BannerController@index');
Route::get('Helper','HelperController@index');

