<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\zonas;


class zona extends Controller
{
 
    public function altazona()
    {

  $zonas = zonas::where('activo','Si')
        ->orderBy('zona','desc')
        ->get();

        $clavequesigue = zonas::orderBy('id_zona','desc')
        ->take(1)
        ->get();
        $idms = $clavequesigue[0]->id_zona+1;

      
        //orm eloquent  estudair sus consultas
        //return $carreras;
        return view ('sistema.altazona')->with('zonas',$zonas)->with('idms',$idms);
        
    }
    public function guardazona(Request $request)
    {
        $zona = $request->zona;
        $descripcion = $request->descripcion;
        $activo = $request->activo;
        
        $this->validate($request,[
            'id_zona'       => 'required|numeric',
            'zona'    => 'required',['regex:/^[A-Z][A-Z,a-z, ñ, á,é,í,ó,ú]+$/'],
            'descripcion'    => 'required',['regex:/^[A-Z][A-Z,a-z, ñ, á,é,í,ó,ú]+$/']
           
        ]);
        //no se recibe el archivo

       
        $maest = new zonas;
        $maest ->id_zona = $request ->id_zona;
                $maest ->zona = $request ->zona;

  
        $maest ->descripcion = $request ->descripcion;
        $maest ->activo = $request ->activo;

        $maest->save();
        $proceso = "ALTA DE Zona";
        $mensaje = "Zona guardado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
        
    }
     public function reportezona()
    {
        $zonas = zonas::orderBy('id_zona','asc')->get();
        return view('sistema.reportezona')
        ->with('zonas', $zonas);
    }

    
    
}

