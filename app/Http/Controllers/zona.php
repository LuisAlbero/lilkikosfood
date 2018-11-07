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
public function eliminazona($id_zona){
        zonas::find($id_zona)->delete();
        $proceso = "Eliminar Zona";
        $mensaje = "LA zona ha sido borrado correctamente";
        return view('sistema.mensaje')
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
    }


        public function modificazona($id_zona){
        //echo "Tipo Abogado a modificar $id_cliente";
        $infom = zonas::where('id_zona','=',$id_zona)->get();
        return view('sistema.modificazona')
        ->with('infom',$infom[0]);
    }
    public function guardaedicionzona(Request $request){
        //echo $request->nombre;
        $zona = $request->zona;
        $id_zona = $request->id_zona;



        $this->validate($request,[
            
        ]);
        $TA = zonas::find($id_zona);
        $TA->id_zona = $request->id_zona;
        $TA->zona = $request->zona;
        $TA->descripcion = $request->descripcion;
        $TA->apellido2 = $request->apellido2;
        $TA->activo = $request->activo;
       
        $TA->save();
        $proceso = "MODIFICACION DE ZONA";
            //$mensaje = "Tipo de Abogado modificado correctamente";
            //return view ("sistema.mensaje")
            //->with('proceso',$proceso)
            //->with('mensaje',$mensaje);
    }
    
    
}

