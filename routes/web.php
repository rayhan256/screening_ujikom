<?php

use App\Http\Controllers\BerobatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PoliController;
use App\Models\Berobat;
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
Route::get('/', [PasienController::class, 'index']);
Route::get('/update/{id}', [PasienController::class, 'edit']);
Route::get('/create', [PasienController::class, 'add'])->name('add.pasien.view');
Route::post('/create', [PasienController::class, 'post'])->name('add.pasien');
Route::post('/update', [PasienController::class, 'updatePasien']);
Route::get('/delete/{id}', [PasienController::class, 'destroy']);

Route::get('/poli', [PoliController::class, 'index']);
// Route::get('/poli/{id}', [PoliController::class, 'edit'])->name('edit.poli.view');
Route::get('/poli/create', [PoliController::class, 'add'])->name('add.poli.view');
Route::post('/poli/create', [PoliController::class, 'post'])->name('add.poli');
Route::get('/poli/delete/{id}', [PoliController::class, 'destroy']);


Route::get('/dokter', [DokterController::class, 'index']);
Route::get('/dokter/create', [DokterController::class, 'add'])->name('add.dokter.view');
Route::post('/dokter/create', [DokterController::class, 'post'])->name('add.dokter');

Route::get('/berobat', [BerobatController::class, 'index']);
Route::get('/berobat/create', [BerobatController::class, 'add'])->name('add.berobat.view');
Route::get('/berobat/update/{id}', [BerobatController::class, 'edit']);
Route::post('/berobat/update', [BerobatController::class, 'updateBerobat']);
Route::post('/berobat/create', [BerobatController::class, 'post'])->name('add.berobat');
Route::get('/berobat/delete/{id}', [BerobatController::class, 'destroy']);