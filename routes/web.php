<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test');
Route::get('/test-dashboard', [App\Http\Controllers\TestController::class, 'show'])->name('test-dashboard');
Route::get('/coba', [App\Http\Controllers\TestController::class, 'coba'])->name('test');
Route::post('/test/store', [App\Http\Controllers\TestController::class, 'store'])->name('test.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/denas', function () {
    return view('denas');
})->name('/denas');

Route::get('/abdill', function () {
    return view('abdill');
})->name('/abdill');