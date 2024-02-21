<?php

use App\Http\Controllers\anggaranController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
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
    return view('kerangka.v_dashboard');
});

Route::get('/home', [homeController::class, 'index']);

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
Route::delete('/level/{delete}', [levelController::class, 'destroy'])->name('user.destroy');