<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index']); // Rota Principal
Route::post('/tasks', [TaskController::class, 'store']); // Criar tarefas no Banco de Dados
Route::get('/tasks/{tasks}', [TaskController::class, 'show']); // Pesquisar
Route::put('/tasks/{tasks}', [TaskController::class, 'update']); // Atualiza as informações do Banco de Dados através da ID
Route::delete('/tasks/{tasks}', [TaskController::class, 'destroy']); // Apaga informações do Banco de Dados através da ID