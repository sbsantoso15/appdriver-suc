<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Kendaraan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SopirController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [LoginController::class,'showForm'])->name('auth.form');
Route::post('/', [LoginController::class, 'login'])->name('auth.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth'])->group( function() {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dboard.index');
    Route::get('/kendaraan-onsite', [Dashboard::class, 'kendaraan_onsite'])->name('kendaraan.onsite');
    Route::get('/kendaraan-offsite', [Dashboard::class, 'kendaraan_offsite'])->name('kendaraan.offsite');

    Route::get('/kendaraan-view', [Kendaraan::class, 'show'])->name('kendaraan.show');  //--menampilkan data di datatables
    Route::get('/data-kendaraan', [Kendaraan::class, 'index'])->name('kendaraan.index');
    Route::get('/kendaraan-addunit-form', [Kendaraan::class, 'addunit'])->name('kendaraan.addunit');
    Route::post('/kendaraan-addunit-save', [Kendaraan::class, 'store'])->name('kendaraan.store');
    Route::get('/kendaraan/e-form/{uid}', [Kendaraan::class, 'edit'])->name('kendaraan.eform');
    Route::put('/kendaraan/e-form/{uid}', [Kendaraan::class, 'update'])->name('kendaraan.update');
    Route::get('/kendaraan/{id}/deactive', [Kendaraan::class, 'deactive'])->name('kendaraan.deactive');

    Route::get('/list-driver', [SopirController::class, 'index'])->name('driver.index');
});


