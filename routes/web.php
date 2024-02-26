<?php

use App\Http\Controllers\anggaranController;
use App\Http\Controllers\dpaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\RekKelompokController;
use App\Http\Controllers\RekStrukturController;
use App\Http\Controllers\unitController;
use App\Models\RekeningStruktur;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('home', [homeController::class, 'index'])->name('home.v_home');

Route::get('/sign', [loginController::class, 'index'])->name('sign');
Route::get('/register', [regisController::class, 'index'])->name('regis');
Route::post('/regis', [regisController::class, 'store'])->name('register.store');

// anggaran
Route::get('/data-anggaran', [anggaranController::class, 'anggaran'])->name('anggaran.v_anggaran');

// level user
Route::get('/level-user', [levelController::class, 'level'])->name('user.v_level_user');
Route::get('/add-level', [levelController::class, 'create'])->name('user.v_create_level');
Route::post('/level', [levelController::class, 'createlevel'])->name('user.createlevel');
Route::get('/level/{level}/edit', [levelController::class, 'edit'])->name('user.edit');
Route::post('/level/{level}/update', [levelController::class, 'update'])->name('user.update');
Route::delete('/level/{level}', [levelController::class, 'destroy'])->name('user.destroy');

// unit
Route::get('/unit-puskesmas', [unitController::class, 'unit'])->name('unit_puskesmas.v_unit');
Route::get('/add-unitpuskesmas', [unitController::class, 'create'])->name('unit_puskesmas.v_createunit');
Route::post('/unit', [unitController::class, 'createunit'])->name('unit_puskesmas.createunit');
Route::get('/unit/{unit}/edit', [unitController::class, 'edit'])->name('unit_puskesmas.edit');
Route::post('/unit/{unit}/update', [unitController::class, 'update'])->name('unit_puskesmas.update');
Route::delete('/unit/{unit}', [unitController::class, 'destroy'])->name('unit_puskesmas.destroy');

// dpaController
Route::get('/data-dpa', [dpaController::class, 'dpa'])->name('dpa.v_data_dpa');
Route::get('/add-dpa', [dpaController::class, 'create'])->name('dpa.v_create_dpa');
Route::post('/simpan', [dpaController::class, 'createdpa'])->name('dpa.createdpa');
Route::get('/dpa/{dpa}/edit', [dpaController::class, 'edit'])->name('dpa.edit');
Route::post('/dpa/{dpa}/update', [dpaController::class, 'update'])->name('dpa.update');
Route::delete('/dpa/{dpa}', [dpaController::class, 'destroy'])->name('dpa.destroy');

// obat
Route::get('data-obat', [obatController::class, 'obat'])->name('obat.v_obat');
Route::get('cari-ketegori', [obatController::class, 'cari']);

// rekening struktur
Route::get('/data-rekening-struktur', [RekStrukturController::class, 'rekeningStruktur'])->name('rekstruktur.v_rekstruktur');
Route::get('/add-rekening-struktur', [RekStrukturController::class, 'create'])->name('rekstruktur.v_addRekStruktur');
Route::post('/simpan-rekening', [RekStrukturController::class, 'createrekening'])->name('rekstruktur.createrekening');
Route::get('/rekening/{rekening}/edit', [RekStrukturController::class,'edit'])->name('rekstruktur.edit');
Route::post('/rekening/{rekening}/update', [RekStrukturController::class, 'update'])->name('rekstruktur.update');
Route::delete('/rekening/{rekening}', [RekStrukturController::class, 'destroy'])->name('rekstruktur.destroy');

// rekening kelompok
Route::get('data-rekening-kelompok', [RekKelompokController::class, 'rekKelompok'])->name('rekkelompok.v_rekeningKelompok');

