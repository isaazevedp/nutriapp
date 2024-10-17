<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\pagController;
use App\Http\Controllers\TestappController;
use App\Http\Controllers\teste3;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;



Route::get('/', [TestappController::class, 'inicio'])->name('inicio');
Route::get('/controle', [teste3::class, 'controle'])->name('controle');
Route::get('/painel', [appController::class, 'painel'])->name('painel');
Route::get('/desperdicio', [pagController::class, 'index'])->name('desperdicio');
Route::post('/desperdicio', [pagController::class, 'store'])->name('desperdiciostore');
Route::get('/fetch-data', [YourController::class, 'fetchData'])->name('fetch.data');
Route::get('/dash', [dashController::class, 'dash'])->name('dash');