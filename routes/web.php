<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AkademikController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', [DosenController::class, 'index'])
    ->name('dosen');
Route::get('/biodata', [AkademikController::class, 'biodata'])
    ->name('biodata');
Route::get('/prodi', [AkademikController::class, 'prodi'])
    ->name('prodi');
Route::get('/fakultas', [AkademikController::class, 'fakultas'])
    ->name('fakultas');