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
	return redirect()->route('dashboard.notulensi');
})->name('/');


Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test');
Route::get('/test-dashboard', [App\Http\Controllers\TestController::class, 'show'])->name('test-dashboard');
Route::get('/coba', [App\Http\Controllers\TestController::class, 'coba'])->name('test');
Route::post('/test/store', [App\Http\Controllers\TestController::class, 'store'])->name('test.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/dashboard', [App\Http\Controllers\NotulensiController::class, 'dashboard'])->name('dashboard.notulensi');


Route::get('/login2', function () {
	return view('login');
})->name('/login2');
Route::get('/live', function () {
	return view('live');
});

Route::get('/create-notulensi', [App\Http\Controllers\NotulensiController::class, 'create'])->name('create.notulensi');
Route::post('/store/notulensi/{value}', [App\Http\Controllers\NotulensiController::class, 'store'])->name('store.notulensi');
Route::get('/live/{id}', [App\Http\Controllers\NotulensiController::class, 'live'])->name('live.notulensi');
Route::put('/store/live/{id}', [App\Http\Controllers\NotulensiController::class, 'storeLive'])->name('store.live.notulensi');
Route::get('/download-notulensi/{id}', [App\Http\Controllers\NotulensiController::class, 'download'])->name('download.notulensi');
