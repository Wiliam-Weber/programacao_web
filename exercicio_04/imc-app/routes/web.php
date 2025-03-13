<?php

Use App\Http\Controllers\ImcController;

Route::get('/', [ImcController::class, 'showForm'])->name('show.form');
Route::post('/calculate', [ImcController::class, 'calculateImc'])->name('calculate.imc');


