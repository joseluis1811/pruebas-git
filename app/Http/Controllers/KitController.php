<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_kit ;
use App\Inventario;

class KitController extends Controller
{
    public function mostrar_formulario(){
        $inventario = Inventario::all();

        return view('dashboard.kit.crear', compact("inventario"));
    }

    public function guardar_kit(Request $request){
        
        $kit = new Tipo_kit;
        $kit->nombre_kit = $request->nombre_kit;
        $kit->elementos_kit = $request->elementos_kit;
        $kit->cantidad = $request->cantidad;
        $kit->descripcion = $request->descripcion;
        $kit->inventario_id = $request->inventario_id;
        $kit->save();
        return back()->with('flash', "Se ha guardado el kit con exito"); 
    }

    public function tabla_kit(){
        $kit = Tipo_kit::paginate(1);
       
        return view('dashboard.kit.tabla', compact("kit"));
    }

    public function editar_kit(Request $request){

        $kit = Tipo_kit::where('id',$request->id)->firstOrFail();
        $inventario = Inventario::all();

        return view('dashboard.kit.editar',compact("kit", "inventario"));

    }

    public function actualizar_kit(Request $request){
        
        $kit = Tipo_kit::where('id',$request->id)->firstOrFail();

        $kit->nombre_kit = $request->nombre_kit;
        $kit->elementos_kit = $request->elementos_kit;
        $kit->cantidad = $request->cantidad;
        $kit->descripcion = $request->descripcion;
        $kit->inventario_id = $request->inventario_id;
        $kit->save();
        return back()->with('flash', "Se ha actualizado el kit con exito"); 
    }
// firstOrFail valida errores
    public function elimininar_kit(Request $request){
        $kit = Tipo_kit::where('id',$request->id)->firstOrFail();
        $kit->delete();
        return back();
    }
}
