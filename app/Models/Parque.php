<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parque extends Model
{
    protected $fillable =[
        'titulo',
        'imagem',
        'descricao'
    ];
}
