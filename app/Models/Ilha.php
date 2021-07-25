<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ilha extends Model
{
    protected $fillable =[
        'titulo',
        'imagem',
        'descricao'
    ];
}
