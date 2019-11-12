<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id', 'nome', 'data_cadastro', 'contas'
    ];

    public function contas()
    {
        return $this->hasMany('App\Conta');
    }
}
