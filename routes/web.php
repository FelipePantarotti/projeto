<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\IdadeController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\Poo2Controller;


Route::get('/', function () {
    return view('portfolio');
});

Route::get('/helpdesk', [HelpdeskController::class, 'index'])->name('helpdesk');

Route::post('/helpdesk', [HelpdeskController::class, 'salvar'])->name('helpdesk.salvar');

Route::post('/idade', [IdadeController::class, 'salvar'])->name('idade.salvar');

Route::post('/notas', [NotasController::class, 'salvar'])->name('notas.salvar');

Route::post('/login', [LoginController::class, 'salvar'])->name('login.salvar');

Route::post('/jogos', [JogosController::class, 'salvar'])->name('jogos.salvar');

Route::post('/poo2', [JogosController::class, 'salvar'])->name('poo2.salvar');