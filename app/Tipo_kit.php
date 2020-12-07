<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_kit extends Model
{
    protected $table = "Tipokit";

    protected $fillable = [
        'nombre_kit',
        'elementos_kit',
        'cantidad',
        'descripcion',
        'inventario_id',
    ];

}
