<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "productos";

    protected $fillable = [
        'nombre',
        'stock',
        'precioActual',
        'precioAnterior',
        'porcentajeDescuento',
        'descripcionCorta',
        'descripcionLarga',
        'estado'
    ];
   
}
