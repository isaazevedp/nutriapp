<?php

use App\Http\Controllers\appController;
use App\Http\Controllers\ApptesteController;
use App\Http\Controllers\TestappController;
use App\Http\Controllers\teste3;
use Illuminate\Support\Facades\Route;

Route::get('/nutriapp', [TestappController::class, 'nutriapp'])->name('nutriapp');
Route::get('/inicio', [ApptesteController::class, 'inicio'])->name('inicio');
Route::get('/controle', [teste3::class, 'controle'])->name('controle');
Route::get('/painel', [appController::class, 'painel'])->name('painel');