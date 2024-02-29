<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteClaseController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ClienteController;
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
    return view('welcome');
});

Route::resource('/Asistencia',ClienteClaseController::class);
Route::resource('/Clase',ClaseController::class);
Route::resource('/Cliente',ClienteController::class);

