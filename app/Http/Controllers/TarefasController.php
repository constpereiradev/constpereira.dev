<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefaRequest;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    private $tarefa;

    public function __construct(Tarefa $tarefa)
    {
        $this->tarefa = $tarefa;
    }

    public function index()
    {
        $tarefas = $this->tarefa::with('colaborador')->get();
        return response()->json([
            'tarefas' => $tarefas,
        ]);
    }

    public function store(Request $request){
        $this->tarefa->create($request->all());
    }
}