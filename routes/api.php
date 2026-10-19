<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PemiluApiController;

// Rute Publik (Tanpa Token)
Route::post('/login', [PemiluApiController::class, 'login']);
Route::get('/pengumuman', [PemiluApiController::class, 'pengumuman']);

// Rute Terlindungi (Wajib pakai Token)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });
    
    Route::post('/vote', [PemiluApiController::class, 'vote']);
    Route::post('/logout', [PemiluApiController::class, 'logout']);
});