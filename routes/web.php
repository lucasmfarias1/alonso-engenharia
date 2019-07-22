<?php
use App\Http\Controllers\ClientesController;

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
Route::get('/cliente/{cliente}', 'ClientesController@show');
Route::delete('/cliente/{cliente}', 'ClientesController@destroy');
Route::patch('/cliente/{cliente}', 'ClientesController@update');
Route::post('/cliente', 'ClientesController@store');

// Propostas
Route::get('/proposta', 'PropostasController@index');
Route::get('/proposta/edit/{proposta}', 'PropostasController@edit');
Route::get('/proposta/create', 'PropostasController@create');
Route::delete('/proposta/{proposta}', 'PropostasController@destroy');
Route::patch('/proposta/{proposta}', 'PropostasController@update');
Route::post('/proposta', 'PropostasController@store');
Route::get('/proposta/export/', 'PropostasController@export');

// Auth
Auth::routes();
