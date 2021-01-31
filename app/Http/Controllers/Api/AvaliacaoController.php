<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    public function __construct(Avaliacao $avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    //lógica da listagem completa
    public function index(){
        $ava = ['ava' => $this->avaliacao->all()];
        
        return response()->json($ava);
    }

    //lógica da listagem individual por ID
    public function show(Avaliacao $id){
        $ava = ['ava' => $id];
        
        return response()->json($ava);
    }

    //lógica que cria uma nova avaliação
    public function store(Request $request){ 
        $avaliacaoStore = ($request->all());

        $this->avaliacao->create($avaliacaoStore);
    }
}
