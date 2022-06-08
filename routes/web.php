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


// Route::get('/login2', function () {
// 	return view('login');
// })->name('/login2');
Route::get('/live', function () {
	return view('live');
});

Route::get('/create-notulensi', [App\Http\Controllers\NotulensiController::class, 'create'])->name('create.notulensi');
Route::post('/store/notulensi/{value}', [App\Http\Controllers\NotulensiController::class, 'storeNot'])->name('store.notulensi');
Route::get('/live/{id}', [App\Http\Controllers\NotulensiController::class, 'live'])->name('live.notulensi');
Route::put('/store/live/{id}', [App\Http\Controllers\NotulensiController::class, 'storeLive'])->name('store.live.notulensi');
Route::get('/download-notulensi/{id}', [App\Http\Controllers\NotulensiController::class, 'download'])->name('download.notulensi');
Route::get('/edit-notulensi/{id}', [App\Http\Controllers\NotulensiController::class, 'edit'])->name('edit.notulensi');
Route::get('/delete-notulensi/{id}', [App\Http\Controllers\NotulensiController::class, 'delete'])->name('delete.notulensi');
Route::put('/update-notulensi/{value}/{id}', [App\Http\Controllers\NotulensiController::class, 'update'])->name('update.notulensi');
// Route::put('/store/live/{id}', [App\Httpp\Controllers\NotulensiController::class, 'storeLive'])->name('store.live.notulensi');


Route::get('/jenis-rapat', [App\Http\Controllers\JenisRapatController::class, 'index'])->name('jenis.rapat');
Route::post('/store/jenis-rapat', [App\Http\Controllers\JenisRapatController::class, 'store'])->name('store.jenis.rapat');
Route::put('/update/jenis-rapat/{id}', [App\Http\Controllers\JenisRapatController::class, 'update'])->name('update.jenis.rapat');
Route::get('/delete/jenis-rapat/{id}', [App\Http\Controllers\JenisRapatController::class, 'delete'])->name('delete.jenis.rapat');

Route::get('/lokasi-rapat', [App\Http\Controllers\LokasiRapatController::class, 'index'])->name('lokasi.rapat');
Route::post('/store/jenis-lokasi', [App\Http\Controllers\LokasiRapatController::class, 'store'])->name('store.lokasi.rapat');
Route::put('/update/jenis-lokasi/{id}', [App\Http\Controllers\LokasiRapatController::class, 'update'])->name('update.lokasi.rapat');
Route::get('/delete/jenis-lokasi/{id}', [App\Http\Controllers\LokasiRapatController::class, 'delete'])->name('delete.lokasi.rapat');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');
Route::get('/admin/change-role-user/{id}/{level}', [App\Http\Controllers\UsersController::class, 'chgRoleUser'])->name('chgRole');
Route::get('/delete-users/{id}', [App\Http\Controllers\UsersController::class, 'delete'])->name('delete.users');