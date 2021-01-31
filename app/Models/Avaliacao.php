<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $table = "avaliacao";

    //permite a criação de novas avaliações por esses parâmetros.
    protected $fillable = [
        'name_author',
        'movie',
        'description',
        'note', // (...)
    ];
}
