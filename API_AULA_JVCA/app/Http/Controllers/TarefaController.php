<?php

//http://127.0.0.1:8000/api/tarefas

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\TarefaController; //adicionado
use App\Models\Tarefa; //adicionado

class TarefaController extends Controller
{

    public function index() //rota principal
    {
        return Tarefa::all();
    }

    public function store(Request $request) //enviar para o banco de dados
    {
        $request->validate([
            'Título' => 'required',
            'Descrição' => 'required',
            'Status' => 'required',
        ]);

        return Tarefa::create($request->all());

    }

    public function show($id) //Pesquisar pelo id
    {
        return Tarefa::findOrfail($id);
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'Título' => 'required',
        'Descrição' => 'required',
        'Status' => 'required',
    ]);

    $tarefa = Tarefa::findOrFail($id);
    $tarefa->update($request->all());

    return response()->json(['☆' => 'Tarefa atualizada com sucesso'], 200);
    }

    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
    
        $tarefa->delete();
    
        return response()->json(['☆' => 'Tarefa excluída com sucesso'], 200);
    }

}
