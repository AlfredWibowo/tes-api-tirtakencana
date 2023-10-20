<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTTHController;
use App\Http\Controllers\CustomerTTHDetailController;
use App\Http\Controllers\MobileConfigController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('customer')->group(function () {
    Route::get('/', [CustomerController::class, 'index']);
    // Route::get('/{id}', [CustomerController::class, 'show']);
    Route::put('/{customer:CustID}', [CustomerController::class, 'update']);
});

Route::prefix('customer-tth')->group(function () {
    Route::get('/', [CustomerTTHController::class, 'index']);
    // Route::get('/{id}', [CustomerTTHController::class, 'show']);
});

Route::prefix('customer-tth-detail')->group(function () {
    Route::get('/', [CustomerTTHDetailController::class, 'index']);
    // Route::get('/{id}', [CustomerTTHDetailController::class, 'show']);
});

Route::prefix('mobile-config')->group(function () {
    Route::get('/', [MobileConfigController::class, 'index']);
    // Route::get('/{id}', [MobileConfigController::class, 'show']);
});
