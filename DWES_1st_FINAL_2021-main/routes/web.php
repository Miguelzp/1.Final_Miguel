<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::view('/', 'enunciado');
Route::get('/crearAlumnos', [App\Http\Controllers\alumnosController::class, 'formularioCrear'])->name('crearAlumnos');
Route::post('/create', [App\Http\Controllers\alumnosController::class, 'create'])->name('crear');

Route::get('/asignar', [App\Http\Controllers\alumnosController::class, 'asignar'])->name('asignar');
Route::post('/asignarEmpresa', [App\Http\Controllers\alumnosController::class, 'asignarEmpresa'])->name('asignarEmpresa');



Route::get('/mostrarEmpresas', [App\Http\Controllers\alumnosController::class, 'mostrarTodasEmpresas'])->name('mostrarEmpresas');

