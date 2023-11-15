<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\LoginController;
use App\Http\Controllers\API\v1\LogoutController;



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

Route::name('api.')->prefix('v1')->group(function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::middleware('jwt')->group(function () {
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    });
});