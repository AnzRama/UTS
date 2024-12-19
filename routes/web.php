<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\pinjamController;
use App\Http\Controllers\kembaliController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
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



Route::get('/', [MahasiswaController::class, 'index'])
    ->name('mahasiswas.index');

Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])
    ->name('mahasiswas.create');

Route::post('/mahasiswas', [MahasiswaController::class, 'store'])
    ->name('mahasiswas.store');

Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])
    ->name('mahasiswas.show');

Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
    ->name('mahasiswas.edit');

Route::patch('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])
    ->name('mahasiswas.update');

Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])
    ->name('mahasiswas.destroy');

    //


Route::get('/bukus', [bukuController::class, 'index'])
    ->name('bukus.index');

Route::get('/bukus/create', [bukuController::class, 'create'])
    ->name('bukus.create');

Route::post('/bukus', [bukuController::class, 'store'])
    ->name('bukus.store');

Route::get('/bukus/{buku}', [bukuController::class, 'show'])
    ->name('bukus.show');

Route::get('/bukus/{buku}/edit', [bukuController::class, 'edit'])
    ->name('bukus.edit');

    Route::patch('/bukus/{buku}', [bukuController::class, 'update'])
    ->name('bukus.update');

Route::delete('/bukus/{buku}', [bukuController::class, 'destroy'])
    ->name('bukus.destroy');

    //

Route::get('/pinjams', [pinjamController::class, 'index'])
    ->name('pinjams.index');

Route::get('/pinjams/create', [pinjamController::class, 'create'])
    ->name('pinjams.create');

Route::post('/pinjams', [pinjamController::class, 'store'])
    ->name('pinjams.store');

Route::get('/pinjams/{pinjam}', [pinjamController::class, 'show'])
    ->name('pinjams.show');

Route::get('/pinjams/{pinjam}/edit', [pinjamController::class, 'edit'])
    ->name('pinjams.edit');

    Route::patch('/pinjams/{pinjam}', [pinjamController::class, 'update'])
    ->name('pinjams.update');

Route::delete('/pinjams/{pinjam}', [pinjamController::class, 'destroy'])
    ->name('pinjams.destroy');

    //

Route::get('/kembalis', [kembaliController::class, 'index'])
    ->name('kembalis.index');

Route::get('/kembalis/create', [kembaliController::class, 'create'])
    ->name('kembalis.create');

Route::post('/kembalis', [kembaliController::class, 'store'])
    ->name('kembalis.store');

Route::get('/kembalis/{kembali}', [kembaliController::class, 'show'])
    ->name('kembalis.show');

Route::get('/kembalis/{kembali}/edit', [kembaliController::class, 'edit'])
    ->name('kembalis.edit');

Route::patch('/kembalis/{kembali}', [kembaliController::class, 'update'])
    ->name('kembalis.update');

Route::delete('/kembalis/{kembali}', [kembaliController::class, 'destroy'])
    ->name('kembalis.destroy');

