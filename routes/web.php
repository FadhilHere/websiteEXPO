<?php

use App\Http\Controllers\KontenController;
use App\Http\Controllers\KatalogController;
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

Route::prefix('admin')->group(function () {
    Route::resource('/konten', KontenController::class);
    Route::resource('/katalog', KatalogController::class);
    Route::get('/list', [KontenController::class, 'list'])->name('konten.list');
    Route::get('/listKatalog', [KatalogController::class, 'list'])->name('katalog.list');
});
