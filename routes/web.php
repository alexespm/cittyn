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
	return view('index');
});

require __DIR__.'/adminlteExamples.php';
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Route::resource('banner', 'MainbannerController');

Route::get('/admin/main_banner', function() {
     return view('admin.main_banner');
})->name('home')->middleware('auth');

Route::get('/admin/helper', function() {
    return view('admin.helper');
})->name('home')->middleware('auth');

Route::get('/admin/quienes_somos', function() {
    return view('admin.quienes_somos');
})->name('home')->middleware('auth');

Route::get('/admin/frase', function() {
    return view('admin.frase');
})->name('home')->middleware('auth');

Route::get('/admin/programas', function() {
    return view('admin.programas');
})->name('home')->middleware('auth');

Route::get('/admin/patrocinadores', function() {
    return view('admin.patrocinadores');
})->name('home')->middleware('auth');

Route::get('/admin/aliados', function() {
    return view('admin.aliados');
})->name('home')->middleware('auth');

Route::get('/','BannerController@index');

Route::resource('/admin/main_banner', 'BannerController');