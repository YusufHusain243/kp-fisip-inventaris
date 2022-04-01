<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaAsetController;
use App\Http\Controllers\KelolaRuanganController;
use App\Http\Controllers\KelolaPeminjamController;
use App\Http\Controllers\KelolaInventarisController;

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


// Login
Route::get('/inventaris-login', [LoginController::class, 'lihatFormLogin']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'lihatDashboard']);

// Kelola Inventaris
// Ruangan
Route::get('/menu-inventaris', [KelolaInventarisController::class, 'lihatDaftarRuangan']);
Route::post('/ruangan/store', [KelolaInventarisController::class, 'tambahRuangan']);
Route::delete('/ruangan/destroy/{id}', [KelolaInventarisController::class, 'hapusRuangan']);
Route::patch('/ruangan/update/{id}', [KelolaInventarisController::class, 'editRuangan']);
// Aset
Route::post('daftar-aset/{id}', [KelolaInventarisController::class, 'lihatDaftarAset']);



// Kelola Aset
// Route::get('/menu-aset', [KelolaAsetController::class, 'lihatDaftarAset']);
// Route::post('/aset/store', [KelolaAsetController::class, 'tambah']);
// Route::delete('/aset/destroy/{id}', [KelolaAsetController::class, 'hapus']);
// Route::patch('/aset/update/{id}', [KelolaAsetController::class, 'edit']);

// Kelola Peminjam
Route::get('/menu-peminjam', [KelolaPeminjamController::class, 'lihatDaftarPeminjam']);
