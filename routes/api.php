<?php

use App\Http\Controllers\Api\AvaliacaoController;
use App\Http\Controllers\Api\FilmeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROTAS DA LISTAGEM COMPLETA E INDIVIDUAL DOS FILMES

Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes');
Route::get('/filmes/{id}', [FilmeController::class, 'show'])->name('ex_filmes');


//ROTAS DA LISTAGEM COMPLETA E INDIVIDUAL DAS AVALIAÇÕES

Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao');
Route::get('/avaliacao/{id}', [AvaliacaoController::class, 'show'])->name('show_ava');

//rota que cria uma nova avaliação
Route::post('/', [AvaliacaoController::class, 'store'])->name('store_ava');


