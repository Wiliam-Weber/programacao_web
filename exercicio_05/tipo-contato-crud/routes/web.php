<?php

use App\Http\Controllers\TipoContatoController;

// Página inicial (lista de tipos de contato)
Route::get('/', [TipoContatoController::class, 'index'])->name('tipo_contato.index');

// Formulário para criar novo tipo de contato
Route::get('/tipo-contato/create', [TipoContatoController::class, 'create'])->name('tipo_contato.create');

// Salvar novo tipo de contato
Route::post('/tipo-contato', [TipoContatoController::class, 'store'])->name('tipo_contato.store');

// Exibir um tipo de contato
Route::get('/tipo-contato/{id}', [TipoContatoController::class, 'show'])->name('tipo_contato.show');

// Formulário para editar um tipo de contato
Route::get('/tipo-contato/{id}/edit', [TipoContatoController::class, 'edit'])->name('tipo_contato.edit');

// Atualizar tipo de contato
Route::put('/tipo-contato/{id}', [TipoContatoController::class, 'update'])->name('tipo_contato.update');

// Excluir tipo de contato
Route::delete('/tipo-contato/{id}', [TipoContatoController::class, 'destroy'])->name('tipo_contato.destroy');

