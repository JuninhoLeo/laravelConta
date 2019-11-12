<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $fillable =[
        'id','descricao', 'contas'
    ];

    public function contas()
    {
        return $this->hasMany('App\Conta');
    }
}
