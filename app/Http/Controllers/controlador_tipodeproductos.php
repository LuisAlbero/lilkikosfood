<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipodeproductos;

class controlador_tipodeproductos extends Controller
{
     public function altatipodeproductos(){
    	$clavequesigue = tipodeproductos::orderBy('id_tipodeproducto','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->id_tipodeproducto+1;

    	return view ('sistema.alta_tipodeproductos')
		     		->with('idTipAbs',$idTipAbs);
    }
    public function guardatipodeproducto(Request $request)
	{   
	$id_tipodeproducto = $request->id_tipodeproducto;
	$nombre = $request->nombre;


	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     ]);
		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
	        $TipAb = new tipodeproductos;
			$TipAb->id_tipodeproducto = $request->id_tipodeproducto;
			$TipAb->nombre = $request->nombre;
			

			$TipAb->save();
			$proceso = "Registro de empleados";
			//$mensaje = "Cliente registrado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
	}
	public function reportetipodeproductos(){
		$TipAb = tipodeproductos::orderBy('id_tipodeproducto','asc')->get();
		return view('sistema.reporte_tipodeproductos')
		->with('TipAb',$TipAb);
	}
	public function modificatipodeproducto($id_tipodeproducto){
		//echo "Tipo Abogado a modificar $id_cliente";
		$infom = tipodeproductos::where('id_tipodeproducto','=',$id_tipodeproducto)->get();
		 return view('sistema.modificatipodeproducto')
		 ->with('infom',$infom[0]);
	}
		public function guardaediciontipodeproducto(Request $request){
		//echo $request->nombre;
		$nombre = $request->nombre;
		$id_tipodeproducto = $request->id_tipodeproducto;

		$this->validate($request,[
	 
	     ]);
			$TA = tipodeproductos::find($id_tipodeproducto);
			$TA->id_tipodeproducto = $request->id_tipodeproducto;
			$TA->nombre = $request->nombre;
			
			$TA->save();
			$proceso = "MODIFICACION DE TIPO DE ABOGADO";
			//$mensaje = "Tipo de Abogado modificado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
}
}
