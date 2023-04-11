<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;


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
Route::get('/about', [AboutController::class, 'index']);
//route search
Route::get('/search', [FrontController::class, 'search']);
//route produk
Route::get('/produk', [ProdukController::class, 'index']);
//route about

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//panggil tampilan home admin
//buat semua route di dalam group admin
//buat route group admin hanya admin yang bisa mengakses

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    //buat route home admin
    Route::get('/home', [HomeController::class, 'index']);
    //buat route dashboard admin
    Route::get('/admin/dashboard', [DashboarController::class, 'index']);
    //buat route kategori buku dengan class
    Route::get('/admin/kategori_buku', [KategoriBukuController::class, 'index']);
    //buat route tambah kategori buku
    Route::get('/admin/kategori_buku/tambah', [KategoriBukuController::class, 'create']);
    //buat route tambah kategori buku
    Route::post('/admin/kategori_buku/store', [KategoriBukuController::class, 'store']);
    //buat route edit kategori buku
    Route::get('/admin/kategori_buku/edit/{idkategori_buku}', [KategoriBukuController::class, 'edit']);
    //buat route update kategori buku
    Route::post('/admin/kategori_buku/update', [KategoriBukuController::class, 'update']);
    //buat route hapus kategori buku
    Route::get('/admin/kategori_buku/delete/{idkategori_buku}', [KategoriBukuController::class, 'delete']);
    //buat route buku
    Route::get('/admin/buku', [BukuController::class, 'index']);
    //buat route tambah buku
    Route::get('/admin/buku/create_buku', [BukuController::class, 'create']);
    //buat route tambah buku
    Route::post('/admin/buku/store', [BukuController::class, 'store']);
    //buat route edit buku
    Route::get('/admin/buku/edit_buku/{id}', [BukuController::class, 'edit']);
    //buat route update buku
    Route::post('/admin/buku/update', [BukuController::class, 'update']);
    //buat route hapus buku
    Route::get('/admin/buku/delete/{id}', [BukuController::class, 'delete']);

    //route untuk user admin
    Route::get('/admin/user', [UserController::class, 'index']);
    //buat route order
    Route::get('/admin/order', [PesananController::class, 'index']);

});



