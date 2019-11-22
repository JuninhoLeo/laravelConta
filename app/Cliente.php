<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id', 'nome', 'data_cadastro', 'contas', 'movimentacao'
    ];

    public function contas()
    {
        return $this->hasMany('App\Conta');
    }

    public function movimentacao()
    {
        return $this->hasMany('App\Movimentacao');
    }

}
