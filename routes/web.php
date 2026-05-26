<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PetugasController;
use App\Http\controllers\JadwalController;
use App\Http\Controllers\TransaksiController;

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
    return view('welcome');
});

// PENGUNJUNG
Route::get('/pengunjung', [PengunjungController::class, 'index'])->name('pengunjung.index');
Route::get('/pengunjung/create', [PengunjungController::class, 'create'])->name('pengunjung.create');
Route::post('/pengunjung', [PengunjungController::class, 'store'])->name('pengunjung.store');
Route::get('/pengunjung/{id}/edit', [PengunjungController::class, 'edit'])->name('pengunjung.edit');
Route::put('/pengunjung/{id}', [PengunjungController::class, 'update'])->name('pengunjung.update');
Route::delete('/pengunjung/{id}', [PengunjungController::class, 'destroy'])->name('pengunjung.destroy');

// PETUGAS
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store');
Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update');
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

// JADWAL
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');
Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy');
Route::put('/jadwal/{id}/aktif', [JadwalController::class, 'aktif'])->name('jadwal.aktif');
Route::put('/jadwal/{id}/nonaktif', [JadwalController::class, 'nonaktif'])->name('jadwal.nonaktif');

// TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
