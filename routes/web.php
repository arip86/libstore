<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;

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
Route::get('/', [FrontController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//panggil tampilan home admin
//buat semua route di dalam group admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //buat route home admin
    Route::get('/home', [HomeController::class, 'index']);
    //buat route kategori buku dengan class
    Route::get('/kategori_buku', [KategoriBukuController::class, 'index']);
    //buat route tambah kategori buku
    Route::get('/kategori_buku/tambah', [KategoriBukuController::class, 'create']);
    //buat route tambah kategori buku
    Route::post('/kategori_buku/store', [KategoriBukuController::class, 'store']);
    //buat route edit kategori buku
    Route::get('/kategori_buku/edit/{idkategori_buku}', [KategoriBukuController::class, 'edit']);
    //buat route update kategori buku
    Route::post('/kategori_buku/update', [KategoriBukuController::class, 'update']);
    //buat route hapus kategori buku
    Route::get('/kategori_buku/delete/{idkategori_buku}', [KategoriBukuController::class, 'delete']);
    //buat route buku
    Route::get('/buku', [BukuController::class, 'index']);
    //buat route tambah buku
    Route::get('/buku/create_buku', [BukuController::class, 'create']);
    //buat route tambah buku
    Route::post('/buku/store', [BukuController::class, 'store']);
    //buat route edit buku
    Route::get('/buku/edit_buku/{id}', [BukuController::class, 'edit']);
    //buat route update buku
    Route::post('/buku/update', [BukuController::class, 'update']);
    //buat route hapus buku
    Route::get('/buku/delete/{idbuku}', [BukuController::class, 'delete']);

    //route untuk user admin
    Route::get('/user', [UserController::class, 'index']);

});



