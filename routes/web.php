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

Route::get('/', function() {
     return view('home');
})->name('home')->middleware('auth');





Route::resource('Banner', 'BannerController');
Route::resource('Helper', 'HelperController');
Route::resource('Quienes-somos', 'QuienesSomosController');
Route::resource('Frase', 'FraseController');
Route::resource('Programas', 'ProgramasController');
Route::resource('Patrocinadores', 'PatrocinadorController');
Route::resource('Aliados', 'AliadosController');
Route::resource('Footer', 'FooterController');

Route::get('Banner', 'BannerController@index')->name('Banner.index')->middleware('auth');
Route::get('Helper','HelperController@index')->name('Helper.index')->middleware('auth');
Route::get('Quienes-somos','QuienesSomosController@index')->name('Quienes-somos.index')->middleware('auth');
Route::get('Frase','FraseController@index')->name('Frase.index')->middleware('auth');
Route::get('Programas','ProgramasController@index')->name('Programas.index')->middleware('auth');
Route::get('Patrocinadores', 'PatrocinadorController@index')->name('Patrocinador.index')->middleware('auth');
Route::get('Aliados', 'AliadosController@index')->name('Aliados.index')->middleware('auth');
Route::get('Footer', 'FooterController@index')->name('Footer.index')->middleware('auth');
Route::get('Cittyn', 'CittynController@index');