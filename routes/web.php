<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

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
    return redirect()->route('dashboard');
});

Route::get('login', [AuthController::class, 'index'])->name('login-index');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function() {
        Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
});