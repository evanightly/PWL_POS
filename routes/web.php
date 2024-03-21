<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kategori', KategoriController::class);
Route::resource('level', LevelController::class);
Route::resource('user', UserController::class);

// Route::get('/level', [LevelController::class, 'index'])->name('level');
// Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
// Route::post('/level/store', [LevelController::class, 'store'])->name('level.store');
// Route::get('/level/{id}/edit', [LevelController::class, 'edit'])->name('level.edit');
// Route::put('/level/{id}', [LevelController::class, 'edit'])->name('level.update');
// Route::delete('/level/{id}', [LevelController::class, 'destroy'])->name('level.destroy');
// Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
// Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
// Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
// Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
// Route::get('/user', [UserController::class, 'index'])->name('user');
// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
// Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
