<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donacion;

class DonacionController extends Controller
{
    public function index()
    {
        return view('pagina-main/donaciones');
    }
    public function guardar_donacion (Request $request) {
        
        $donaciones = new Donacion;
        $donaciones ->nombres = $request ->nombres;
        $donaciones ->apellidos = $request ->apellidos;
        $donaciones ->cc = $request ->cc;
        $donaciones ->email = $request ->email;
        $donaciones ->telefono = $request ->telefono;
        $donaciones ->valor = $request ->valor;
        $donaciones ->mensaje = $request ->mensaje;
        $donaciones -> save();
        return back();
    }
}
