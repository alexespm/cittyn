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

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');

//Route::resource('banner', 'MainbannerController');



Route::resource('/main_banner', 'BannerController');
Route::resource('/helper', 'HelperController');

Route::get('/main_banner/{id}', 'BannerController@show')->name('home')->middleware('auth');
Route::get('/main_banner/{id}/edit', 'BannerController@edit')->name('home')->middleware('auth');

Route::get('/','HelperController@index');
Route::get('/helper/{id}', 'HelperController@show')->name('home')->middleware('auth');
Route::get('/helper/{id}/edit', 'HelperController@edit')->name('home')->middleware('auth');