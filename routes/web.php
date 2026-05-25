<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PetugasController;

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