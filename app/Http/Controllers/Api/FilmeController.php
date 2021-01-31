<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    private $filme;

    public function __construct(Filme $filme)
    {
        
        $this->filme = $filme;
    }

    //lógica da listagem completa
    public function index(){
        $movie = ['movie' => $this->filme->all()];

        return response()->json($movie);
    }

    //lógica da listagem individual por ID
    public function show(Filme $id){
        $movie = ['movie' => $id];

        return response()->json($movie);
    }
}
