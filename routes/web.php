<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('siswa/create', function () {
    return view('siswa.create');
});
Route::get('/', function () {
    return view('siswa.index');
});
Route::post('/siswa/store',[SiswaController::class,'store']);
