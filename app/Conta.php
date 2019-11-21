<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = [
        'id', 'codcliente', 'codbanco', 'saldo', 'created_at', 'updated_at' , 'cliente', 'banco',
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
