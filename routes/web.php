<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login',function(){
    return view('auth.login');
});
Route::get('/register',function(){
    return view('auth.register');
});


Route::get('/', function () {
    return view('pages.index');
});
Route::get('/index',function(){
    return view('admin.index');
});
Route::get('/daftar_pengaduan',function(){
    return view('pages.daftar_pengaduan');
});
Route::get('/data_pengaduan',function(){
    return view('pages.data_pengaduan');
});


