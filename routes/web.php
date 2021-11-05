<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaquetesController;

use App\Http\Controllers\PromocionesController;

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

Route::get('/', HomeController::class)->name('Home');

Route::resource('/admin', AdminController::class);

Route::resource('/paquetes', App\Http\Controllers\PaqueteController::class);
Route::resource('/canales', App\Http\Controllers\CanaleController::class);
Route::resource('/tipospaquetes', App\Http\Controllers\TipospaqueteController::class);
Route::resource('/paquetes-canales', App\Http\Controllers\PaquetesCanaleController::class);
Route::resource('/promociones', App\Http\Controllers\PromocioneController::class);



Auth::routes();
