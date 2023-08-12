<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class,'index'])->name('base');
Route::get('/login',[CustomerController::class,'login'])->name('login');
Route::post('/login',[CustomerController::class,'checkLogin'])->name('checkLogin');
Route::get('/logout',[CustomerController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/daftar',[CustomerController::class,'daftar'])->name('daftar');
Route::post('/daftar',[CustomerController::class,'checkDaftar'])->name('checkDaftar');
Route::get('/beranda',[CustomerController::class,'beranda'])->name('beranda')->middleware('auth');
Route::get('/akun',[CustomerController::class,'akun'])->name('akun')->middleware('auth');
Route::get('/beranda/buatttd',[CustomerController::class,'buatttd'])->name('buatttd')->middleware('auth');
Route::post('/beranda/buatttd',[CustomerController::class,'saveTtd'])->name('saveTtd')->middleware('auth');
Route::get('/beranda/lihatttd/{id}',[CustomerController::class,'lihatttd'])->name('lihatttd')->middleware('auth');
Route::get('/beranda/premium',[CustomerController::class,'premium'])->name('premium')->middleware('auth');
Route::get('/beranda/terblock',[CustomerController::class,'terblock'])->name('terblock')->middleware('auth');

Route::get('/login_admin',[AdminController::class,'login'])->name('login_admin');
Route::post('/login_admin',[AdminController::class,'checkLogin'])->name('checkLogin_admin');
Route::get('/beranda/admin',[AdminController::class,'beranda'])->name('beranda_admin');

Route::get('/validasi/{id}',[PublicController::class,'validasi'])->name('validasi');