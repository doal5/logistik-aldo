<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangprosesController;
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



Route::get('/', [BarangprosesController::class, 'index'])->name('barang_masuk');
Route::get('barangMasukTambah', [BarangprosesController::class, 'create'])->name('barang_masuk_tambah');
Route::post('storeBarangMasuk', [BarangprosesController::class, 'storeMasuk'])->name('store_masuk');
Route::get('barangKeluar', [BarangprosesController::class, 'indexKeluar'])->name('barang_keluar');
Route::get('barang', [BarangController::class, 'index'])->name('barang');
