<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\TarefaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/tarefas', [TarefaController::class, 'index']); //rota principal
route::post('/tarefas', [TarefaController::class, 'store']); //enviar para o banco de dados
route::get('/tarefas/{id}', [TarefaController::class, 'show']); //Pesquisar pelo id
Route::put('/tarefas/{id}', [TarefaController::class, 'update']); //Editar Tarefa
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy']); //Deletar tarefa