<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\StokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', RegisterController::class)->name('register');
Route::post('/register1', RegisterController::class)->name('register1');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', LogoutController::class)->name('logout');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('levels', [LevelController::class, 'index']);
    Route::post('levels', [LevelController::class, 'store']);
    Route::get('levels/{level}', [LevelController::class, 'show']);
    Route::put('levels/{level}', [LevelController::class, 'update']);
    Route::delete('levels/{level}', [LevelController::class, 'destroy']);

    Route::get('kategori', [KategoriController::class, 'index']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
    Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
    Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);

    Route::get('barang', [BarangController::class, 'index']);
    Route::post('barang', [BarangController::class, 'store']);
    Route::get('barang/{barang}', [BarangController::class, 'show']);
    Route::put('barang/{barang}', [BarangController::class, 'update']);
    Route::delete('barang/{barang}', [BarangController::class, 'destroy']);

    Route::get('stok', [StokController::class, 'index']);
    Route::post('stok', [StokController::class, 'store']);
    Route::get('stok/{stok}', [StokController::class, 'show']);
    Route::put('stok/{stok}', [StokController::class, 'update']);
    Route::delete('stok/{stok}', [StokController::class, 'destroy']);
});
