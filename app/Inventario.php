<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = "inventario";

    protected $fillable = [
        'existencia_inicial',
        'entrada',
        'salida',
        'stock',
        'nombre'
    ];
}
