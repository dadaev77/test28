<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::apiResource('car-brands', CarBrandController::class);
Route::apiResource('car-models', CarModelController::class);
Route::apiResource('cars', CarController::class);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('cars', CarController::class)->only(['index', 'store', 'update', 'destroy']);
});
