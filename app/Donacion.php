<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    protected $table = "_donaciones";
    protected $fillable = ['nombres','apellidos','cc','email','telefono','valor','mensaje'];
}
