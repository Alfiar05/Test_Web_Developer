<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\TransasksiController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'],function(){
    Route::get('/mobil', [MobilController::class, 'list_mobil']);
    Route::get('/peminjaman-mobil', [TransasksiController::class, 'kirim_aktivasi']);
    Route::get('/pengembalian-mobil', [TransasksiController::class, 'kirim_aktivasi']);

    Route::get('/tambah-data-mobil', [MobilController::class, 'add_mobil']);

    Route::post('/simpan-data-mobil', [MobilController::class, 'save_mobil']);
});
