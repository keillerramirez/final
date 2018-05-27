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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/Clientes', 'ClientesController');
Route::resource('/Inventarios', 'InventariosController');
Route::resource('/Facturaciones', 'FacturacionesController');
Route::resource('/Vehiculos', 'VehiculosController');
Route::resource('/Tipol', 'TipolController');
Route::resource('/Tipov', 'TipovController');
Route::resource('/Tipop', 'TipopController');
Route::resource('/Lavados', 'LavadosController');
Route::resource('/Detalles', 'DetallesController');

