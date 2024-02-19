<?php

use App\Http\Controllers\gatitosController;
use App\Models\gatitosModel;
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


Route::get('/', [gatitosController::class,'index'])->name('gatitos.index');
Route::get('/crear', [gatitosController::class,'create'])->name('gatitos.create');
Route::post('/store', [gatitosController::class,'store'])->name('gatitos.store');

Route::get('/edita/{id}', [gatitosController::class,'edit'])->name('gatitos.edit');
Route::put('/update/{id}', [gatitosController::class,'update'])->name('gatitos.update');

Route::get('/eliminar/{id}', [gatitosController::class,'show'])->name('gatitos.show');
Route::delete('/destroy/{id}', [gatitosController::class,'destroy'])->name('gatitos.destroy');
