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

Route::resource('KategoriProduk', 'KategoriProdukController');
Route::resource('Produk', 'ProdukController');
Route::get('/produk', 'Produkcontroller@index');
Route::post('/produk/store', 'Produkcontroller@store');
Route::get('/pegawai/edit/{id}', 'Produkcontroller@edit');
Route::post('pegawai/update', 'Produkcontroller@update');
Route::get('/pegawai/destroy/{id}', 'Produkcontroller@destroy');
