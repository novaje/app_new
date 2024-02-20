<?php

use App\Http\Controllers\homeController;
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