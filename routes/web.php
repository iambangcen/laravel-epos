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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('layouts', function () {
   return view('layouts.master');
});

Route::group(['middleware' => 'auth'], function () {
Route::resource('barang','barangController');
Route::get('/apiBarang','barangController@apiBarang')->name('api.barang');
Route::get('/lihatBarang/{id}','lihatController@indexBarang');

Route::resource('customers','customersController');
Route::get('/apiCustomers','customersController@apiCustomers')->name('api.customers');
Route::get('/lihatCustomers/{id}','lihatController@indexCustomers');

Route::resource('supplier','supplierController');
Route::get('/apiSupplier','supplierController@apiSupplier')->name('api.supplier');
Route::get('/lihatSupplier/{id}','lihatController@indexSupplier');

Route::resource('pegawai','pegawaiController');
Route::get('/apiPegawai','pegawaiController@apiPegawai')->name('api.pegawai');
Route::get('/lihatPegawai/{id}','lihatController@indexPegawai');

Route::resource('profile','profileController');
Route::get('/apiProfile','profileController@apiProfile')->name('api.profile');
Route::get('/lihatProfile/{id}','lihatController@indexProfile');

});