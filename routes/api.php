<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kosts', [App\Http\Controllers\KostController::class, 'index'])->name('kosts');
Route::post('/kosts', [App\Http\Controllers\KostController::class, 'store'])->name('store.kosts');
Route::put('/kosts/{id}', [App\Http\Controllers\KostController::class, 'update'])->name('update.kosts');
Route::delete('/kosts/{id}', [App\Http\Controllers\KostController::class, 'update'])->name('update.kosts');
Route::get('/detail-kosts/{id}', [App\Http\Controllers\KostController::class, 'detail'])->name('detail.kosts');
Route::post('/rating/{id}', [App\Http\Controllers\KostController::class, 'storeRating'])->name('rating.kosts');
