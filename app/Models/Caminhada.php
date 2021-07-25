<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caminhada extends Model
{
    protected $fillable =[
        'titulo',
        'imagem',
        'descricao'
    ];
}
