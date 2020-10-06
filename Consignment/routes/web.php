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

Route::get('/', function () {
    return view('components.body');
});

//ini routing untuk pindah halaman. '/pindahHalaman disesuaikan dengan link pada komponen'
//<a> pada view
Route::get('pindahHalaman','ControllerHalaman@pindahHalaman');
Route::get('/register', ['uses'=>'ControllerHalaman@register']);
Route::get('/login', ['uses'=>'ControllerHalaman@login']);

Route::post('/post_register', ['uses'=>'ControllerHalaman@post_register']);
Route::post('/post_login', ['uses'=>'ControllerHalaman@post_login']);
