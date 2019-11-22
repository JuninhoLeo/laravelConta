<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $fillable = [
        'id', 'codcliente', 'tipo', 'valor', 'cliente'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

}
