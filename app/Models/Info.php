<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable =[
        'nome',
        'descricao',
        'missao_imagem',
        'missao',
        'valores_imagem',
        'valores',
        'telefone',
        'telemovel1',
        'telemovel2',
        'email1',
        'email2',
        'local'
    ];
}
