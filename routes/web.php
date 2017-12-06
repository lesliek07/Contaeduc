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
    return view('welcome');
});

Auth::routes();
Route::get('/contabilidad', function () {
    return view('contabilidad');
});
Route::get('/remuneraciones', function () {
    return view('remuneraciones');
});
Route::get('/facturacion', function () {
    return view('facturacion');
});
Route::get('/home', 'HomeController@index')->name('home');
