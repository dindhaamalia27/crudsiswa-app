<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasController;
use App\Http\Controllers\SiswaController;

 //route siswa
Route::get('/', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/show/{id}',[SiswaController::class,'show']);
Route::get('/siswa/edit/{id}',[SiswaController::class,'edit'])->name('siswa.edit');
Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);


//route clas
Route::get('/clas', [ClasController::class, 'index'])->name('clas.index');
Route::get('/clas/create', [ClasController::class, 'create'])->name('clas.create');
Route::post('/clas', [ClasController::class, 'store'])->name('clas.store');
Route::get('/clas/edit/{id}', [ClasController::class, 'edit'])->name('clas.edit');
Route::put('/clas/{id}', [ClasController::class, 'update'])->name('clas.update');
Route::delete('/clas/{id}', [ClasController::class, 'destroy'])->name('clas.destroy');
Route::get('/clas/show/{id}', [ClasController::class, 'show'])->name('clas.show');
