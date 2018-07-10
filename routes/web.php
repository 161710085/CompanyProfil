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
    return view('wel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('produk','ProdukController');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],
function(){

	Route::resource('bahan','BahanController');
	Route::resource('kategori','KategoriController');
	Route::resource('jenis','JenisController');


});
