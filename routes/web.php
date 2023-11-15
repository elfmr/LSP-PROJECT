<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriKelolaController;
use App\Http\Controllers\ArsipKelolaController;




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

require __DIR__ . '/auth.php';

Route::redirect('/', 'login');

Route::middleware('auth')->group(function () {
    Route::get('about', AboutController::class)->name('about');
    Route::resource('kategori', KategoriKelolaController::class);
    Route::resource('arsip', ArsipKelolaController::class);
    Route::get('arsip/show/{id}', [ArsipKelolaController::class, 'show'])->name('arsip.show');
    Route::get('arsip/download/{id}', [ArsipKelolaController::class, 'download'])->name('arsip.download');
    Route::get('arsip/create', [ArsipKelolaController::class, 'create'])->name('arsip.create');
    Route::get('kategori/create', [KategoriKelolaController::class, 'create'])->name('kategori.create');
    Route::get('kategori/edit/{id}', [KategoriKelolaController::class, 'edit'])->name('kategori.edit');

    Route::get('arsip/edit/{id}', [ArsipKelolaController::class, 'edit'])->name('arsip.edit');
    Route::put('arsip/update/{id}', [ArsipKelolaController::class, 'update'])->name('arsip.update');
    Route::patch('arsip/update/{id}', [ArsipKelolaController::class, 'update'])->name('arsip.update');

});
