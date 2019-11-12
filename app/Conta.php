<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = [
        'numero', 'cliente', 'banco', 'saldo'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function banco()
    {
        return $this->belongsTo('App\Banco');
    }
}
