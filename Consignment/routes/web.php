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
Route::get('/daftarbank', 'ControllerHalaman@daftarbank');
Route::get('/statpengajuan', 'ControllerHalaman@statpengajuan');
Route::get('/daftarjenis', 'ControllerHalaman@daftarjenis');
Route::get('/katalog', 'ControllerHalaman@katalog');


Route::post('/doRegister', 'ControllerHalaman@doRegister');
Route::post('/doLogin', 'ControllerHalaman@doLogin');
Route::post('/doApply', 'ControllerHalaman@doApply');

Route::get('/doDelete/{id}', 'ControllerHalaman@doDelete');
Route::get('/doApprove/{id}', 'ControllerHalaman@doApprove');
