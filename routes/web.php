<?php

use App\Http\Controllers\anggaranController;
use App\Http\Controllers\dpaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\RekJenisController;
use App\Http\Controllers\RekKelompokController;
use App\Http\Controllers\RekObjectController;
use App\Http\Controllers\RekStrukturController;
use App\Http\Controllers\RincianRekObjectController;
use App\Http\Controllers\SaldoAwalBungaController;
use App\Http\Controllers\SaldoAwalTahunController;
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
Route::get('/data-rekening-kelompok', [RekKelompokController::class, 'datarekening'])->name('rekkelompok.datarekening');
Route::get('/add-rekening-kelompok', [RekKelompokController::class, 'addRekening'])->name('rekkelompok.addRekening');
Route::post('/simpan-rekening', [RekKelompokController::class, 'createrekening'])->name('rekkelompok.createrekening');
Route::get('/rekening/{rekening}/edit', [RekKelompokController::class, 'edit'])->name('rekkelompok.edit');
Route::post('/rekening/{rekening}/update', [RekKelompokController::class, 'update'])->name('rekkelompok.update');
Route::delete('/rekening/{rekening}', [RekKelompokController::class, 'destroy'])->name('rekkelompok.destroy');
 
// rekening jenis
Route::get('/data-rekening-jenis', [RekJenisController::class, 'rekening'])->name('rekjenis.rekening');
Route::get('/add-rekening-jenis', [RekJenisController::class, 'addRekeningJenis'])->name('rekjenis.addRekeningJenis');
Route::post('/simpan-rekening-jenis', [RekJenisController::class, 'saveRekening'])->name('rekjenis.saveRekening');
Route::get('/rekening{rekening}/edit', [RekJenisController::class, 'edit'])->name('rekjenis.edit');
Route::get('/rekening/{rekening}/update', [RekJenisController::class, 'update'])->name('rekjenis.update');
Route::delete('/rekening/{rekening}', [RekJenisController::class, 'destroy'])->name('rekjenis.destroy');

// rekening object
Route::get('/data-rekening-object', [RekObjectController::class, 'rekeningObject'])->name('rekobject.rekeningObject');
Route::get('/add-rekening-object', [RekObjectController::class, 'create'])->name('rekobject.create');
Route::post('/simpan-rekening-object', [RekObjectController::class, 'saveRekening'])->name('rekobject.saveRekening');
Route::get('/rekobject', [RekObjectController::class, 'getRekening'])->name('rekobject.getRekening');

// rekening object rincian
Route::get('/data-rincian-rekening-object', [rincianRekObjectController::class, 'dataRincian'])->name('rincianRekening.dataRincian');
Route::get('/add-rincian-rekening', [rincianRekObjectController::class, 'addRincian'])->name('rincianRekening.addRincian');
Route::post('/save-rincian-rekening', [rincianRekObjectController::class, 'create'])->name('rincianRekening.create');

// Penataushaan (saldo Awal-> saldo awal tahun)
Route::get('/data-saldo-awal-tahun', [SaldoAwalTahunController::class, 'saldoAwal'])->name('saldoawal.saldoTahunan');
Route::get('/add-saldo-awal', [SaldoAwalTahunController::class, 'viewSaldo'])->name('saldoawal.viewSaldo');
Route::post('/simpan-saldo-awal-tahun', [SaldoAwalTahunController::class, 'addSaldo'])->name('saldoawal.addSaldo');
// Penataushaan (saldo Awal-> saldo awal bunga bank)
Route::get('/data-saldo-bunga-bank', [SaldoAwalBungaController::class, 'saldoAwalBunga']);