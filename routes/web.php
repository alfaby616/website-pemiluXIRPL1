<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemiluController;

Route::get('/', [PemiluController::class, 'loginView']);
Route::post('/login', [PemiluController::class, 'loginAuth']);
Route::get('/logout', [PemiluController::class, 'logout']);

Route::get('/home', [PemiluController::class, 'home']);
Route::get('/paslon/1', [PemiluController::class, 'paslon1']);
Route::get('/paslon/2', [PemiluController::class, 'paslon2']);
Route::post('/vote/{pilihan}', [PemiluController::class, 'vote']);
Route::get('/pengumuman', [PemiluController::class, 'pengumuman']);
use App\Http\Controllers\AdminController;

// Rute Halaman Admin (CRUD)
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/tambah', [AdminController::class, 'store']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/hapus/{id}', [AdminController::class, 'destroy']);