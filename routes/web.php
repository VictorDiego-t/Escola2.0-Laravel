<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Chamadas
Route::get('/chamadas', [\App\Http\Controllers\ChamadaController::class, 'index'])->name('chamadas.index');
Route::post('/chamadas/salvar', [\App\Http\Controllers\ChamadaController::class, 'salvar'])->name('chamadas.salvar');

// Alunos
Route::get('/alunos/create', [\App\Http\Controllers\AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [\App\Http\Controllers\AlunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos', [\App\Http\Controllers\AlunoController::class, 'index'])->name('alunos.index');
Route::delete('/alunos/{aluno}', [\App\Http\Controllers\AlunoController::class, 'destroy'])->name('alunos.destroy');
Route::get('/alunos/edit/{id}', [\App\Http\Controllers\AlunoController::class, 'edit'])->name('alunos.edit');
Route::put('/alunos/{id}', [\App\Http\Controllers\AlunoController::class, 'update'])->name('alunos.update');

// Turmas
Route::get('/turma', [\App\Http\Controllers\TurmaController::class, 'index'])->name('turma.index');
Route::get('/turma/create', [\App\Http\Controllers\TurmaController::class, 'create'])->name('turma.create');
Route::post('/turma', [\App\Http\Controllers\TurmaController::class, 'store'])->name('turma.store');
Route::delete('/turma/{turma}', [\App\Http\Controllers\TurmaController::class, 'destroy'])->name('turma.destroy');
Route::get('/turma/edit/{id}', [\App\Http\Controllers\TurmaController::class, 'edit'])->name('turma.edit');
Route::put('/turma/update/{turma}', [\App\Http\Controllers\TurmaController::class, 'update'])->name('turma.update');
Route::get('/turmas/{id}/chamadas', [\App\Http\Controllers\TurmaController::class, 'chamadas'])->name('turmas.chamadas');

// Matrículas
Route::get('/matriculas', [\App\Http\Controllers\MatriculaController::class, 'index'])->name('matriculas.index');
Route::get('/matriculas/create', [\App\Http\Controllers\MatriculaController::class, 'create'])->name('matriculas.create');
Route::post('/matriculas', [\App\Http\Controllers\MatriculaController::class, 'store'])->name('matriculas.store');
