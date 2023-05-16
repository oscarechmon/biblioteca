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

Route::get('/', 'AutorController@index')->name('inicio');
Route::post('/agregar', 'AutorController@store')->name('store');
Route::get('/editar/{id}', 'AutorController@edit')->name('editar');
Route::put('/update/{id}', 'AutorController@update')->name('update');
Route::delete('/eliminar/{id}', 'AutorController@destroy')->name('eliminar');

Route::resource('libros', 'LibroController');


