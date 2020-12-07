<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('pagina-main/inicio');
    }
    public function about()
    {
        return view('pagina-main/sobre-nosotros');
    }
    public function services()
    {
        return view('pagina-main/servicios');
    }
}
