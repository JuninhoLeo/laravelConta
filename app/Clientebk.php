<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientebk extends Model
{
    protected $fillable = [
        'id', 'nome', 'data_retirada', 'saldo'
    ];
}
