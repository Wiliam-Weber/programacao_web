<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\ViagemController;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('home');
});

Route::get('/imc', [ImcController::class, 'showForm'])->name('imc.form');
Route::post('/imc', [ImcController::class, 'calculateImc'])->name('imc.calculate');

Route::get('/sono', [SonoController::class, 'index']);
Route::post('/sono', [SonoController::class, 'avaliar']);

Route::get('/viagem', [ViagemController::class, 'index']);
Route::post('/viagem', [ViagemController::class, 'calcular']);
