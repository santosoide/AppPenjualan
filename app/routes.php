<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.trans-penjualan');
});

//  Routing MasterBarang
Route::resource('master-barang', 'MasterBarangController');
// Ajax menampilkan data barang
Route::post('master-barang/read', array('as' => 'master-barang.read', 'uses' => 'MasterBarangController@read'));
// hapus data
Route::post('master-barang/{id}', array('as' => 'master-barang.destroy','uses' => 'MasterBarangController@destroy'));
// ajax jenis barang
Route::get('ajaxjnsbrg/', array('as' => 'ajaxjnsbrg.ajax', 'uses' => 'AjaxJnsBrgController@index'));
// ajax autocomplete barang
Route::get('autocomplete-barang/', array('as' => 'autobarang.ajax', 'uses' => 'AjaxJnsBrgController@autocomplete'));

//  Routing JenisBarang
Route::resource('master-jenis-barang', 'JenisBarangController');
// Ajax menampilkan data jenis
Route::post('jenis-barang/read', array('as' => 'master-barang.read', 'uses' => 'JenisBarangController@read'));


//  Routing Transaksi Penjualan
Route::resource('transaksi-penjualan', 'PenjualanController');
// Ajax menampilkan data transaksi penjualan
Route::post('transaksi-penjualan/read', array('as' => 'transaksi-penjualan.read', 'uses' => 'PenjualanController@read'));


//  Routing Detail Penjualan
Route::resource('detail-penjualan', 'DetailPenjualanController@index');
// Ajax menampilkan data detail penjualan
Route::post('transaksi-penjualan/read', array('as' => 'transaksi-penjualan.read', 'uses' => 'PenjualanController@read'));