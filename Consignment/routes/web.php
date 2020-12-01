<?php

use Illuminate\Support\Facades\Route;

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
// asd
Route::get('/', 'ControllerHalaman@home');

//ini routing untuk pindah halaman. '/pindahHalaman disesuaikan dengan link pada komponen'
//<a> pada view
Route::get('/register', 'ControllerHalaman@register');
Route::get('/login', 'ControllerHalaman@login');
Route::get('/pengajuan', 'ControllerHalaman@pengajuan');
Route::get('/admin', 'ControllerHalaman@admin');
Route::get('/daftaradmin', 'ControllerHalaman@daftaradmin');
Route::get('/daftarTransaksi', 'ControllerHalaman@daftarTransaksi');
Route::get('/daftarbank', 'ControllerHalaman@daftarbank');
Route::get('/daftarjenis', 'ControllerHalaman@daftarjenis');
Route::get('/katalog', 'ControllerHalaman@katalog');
Route::get('/detailsbarang/{id}', 'ControllerHalaman@detailsbarang');
Route::get('/detailpengajuan', 'ControllerHalaman@detailpengajuan');
Route::get('/detailTransaksi/{id}', 'ControllerHalaman@detailTransaksi');
Route::get('/daftarmerk', 'ControllerHalaman@daftarmerk');
Route::get('/daftarretur', 'ControllerHalaman@daftarretur');
Route::get('/retur', 'ControllerHalaman@retur');
Route::get('/profile', 'ControllerHalaman@profile');
Route::get('/barangreject', 'ControllerHalaman@barangreject');
Route::get('/detailbarangreject', 'ControllerHalaman@detailbarangreject');
Route::get('/statusbarang', 'ControllerHalaman@statusbarang');
Route::get('/barangSaya','ControllerHalaman@barangSaya');
Route::get('/back','ControllerHalaman@back');
Route::get('/cekPengiriman', 'ControllerHalaman@checkPengiriman');


Route::post('/doRegister', 'ControllerHalaman@doRegister');
Route::post('/doDeleteRetur', 'ControllerHalaman@doDeleteRetur');
Route::post('/doLogin', 'ControllerHalaman@doLogin');
Route::post('/doSubmit', 'ControllerHalaman@doSubmit');
Route::post('/doApply', 'ControllerHalaman@doApply');
Route::get('/doLogout', 'ControllerHalaman@doLogout');
Route::post('/addAdmin', 'ControllerHalaman@addAdmin');
Route::post('/deleteAdmin', 'ControllerHalaman@deleteAdmin');
Route::post('/addBank', 'ControllerHalaman@addBank');
Route::post('/deleteBank', 'ControllerHalaman@deleteBank');
Route::post('/addJenis', 'ControllerHalaman@addJenis');
Route::post('/addMerk', 'ControllerHalaman@addMerk');
Route::post('/post_checkout/{id}', 'ControllerHalaman@checkout');
Route::post('/bayar', 'ControllerHalaman@bayar');

Route::get('/toDetail/{id}', 'ControllerHalaman@toDetail');
Route::get('/detailbarangreject/{id}', 'ControllerHalaman@detailbarangreject');
Route::get('/detailbarangku/{id}', 'ControllerHalaman@detailbarangku');
Route::get('/doApprove', 'ControllerHalaman@doApprove');
Route::get('/doDelete/{id}', 'ControllerHalaman@doDelete');
Route::get('/changeProfile', 'ControllerHalaman@changeProfile');
Route::post('/doRetur', 'ControllerHalaman@doRetur');

Route::post('/membayar','ControllerHalaman@membayar');
Route::post('/doSell','ControllerHalaman@doSell');


// Route::get('/doApprove/{id}', 'ControllerHalaman@doApprove');
