<?php

use App\Http\Controllers\KontenController;
use App\Http\Controllers\KatalogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->withoutMiddleware('auth');
Route::get('/katalog', [HomeController::class, 'katalog'])->name('katalog')->withoutMiddleware('auth');
Route::get('/katalog/{id}', [HomeController::class, 'displayKatalog'])->name('showkatalog')->withoutMiddleware('auth');
Route::get('/{judul}', [HomeController::class, 'page'])->name('show')->withoutMiddleware('auth');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::prefix('admin')->group(function () {
    Route::resource('/konten', KontenController::class);
    Route::resource('/katalog', KatalogController::class);
    Route::get('/list', [KontenController::class, 'list'])->name('konten.list');
    Route::get('/listKatalog', [KatalogController::class, 'listKatalog'])->name('katalog.list');
});
