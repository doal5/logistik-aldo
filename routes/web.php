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


Route::get('/', [BarangController::class, 'index'])->name('barang');
Route::get('barangTambah', [BarangController::class, 'create'])->name('barang_create');
Route::post('barangStore', [BarangController::class, 'store'])->name('store_barang');

// route barang masuk
Route::get('barangMasuk', [BarangprosesController::class, 'index'])->name('barang_masuk');
Route::get('barangMasukTambah', [BarangprosesController::class, 'create'])->name('barang_masuk_tambah');
Route::post('storeBarangMasuk', [BarangprosesController::class, 'storeMasuk'])->name('store_masuk');

// route barang keluar
Route::get('barangKeluar', [BarangprosesController::class, 'indexKeluar'])->name('barang_keluar');
Route::get('barangKeluarTambah', [BarangprosesController::class, 'createKeluar'])->name('barang_keluar_tambah');
Route::post('storeBarangKeluar', [BarangprosesController::class, 'storeKeluar'])->name('store_keluar');
