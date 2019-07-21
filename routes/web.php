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

// Route::get('/', function () {
//     return view('welcome');
// });

// Root
Route::get('/', 'ClientesController@index');

// Clientes
Route::get('/cliente', 'ClientesController@index');
Route::get('/cliente/edit/{cliente}', 'ClientesController@edit');
Route::get('/cliente/create', 'ClientesController@create');
Route::post('/cliente', 'ClientesController@store');

// Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
