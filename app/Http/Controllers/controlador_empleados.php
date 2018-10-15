<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;

class controlador_empleados extends Controller
{
     public function altaempleado(){
    	$clavequesigue = empleados::orderBy('id_empleado','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->id_empleado+1;

    	return view ('sistema.alta_empleados')
		     		->with('idTipAbs',$idTipAbs);
    }
    public function guardaempleado(Request $request)
	{   
	$id_empleado = $request->id_empleado;
	$nombre = $request->nombre;
	$apellido1 = $request->apellido1;
	$apellido2 = $request->apellido2;
	$puesto = $request->puesto;
	$telefono = $request->telefono;
	$email = $request->email;
	$rfc = $request->rfc;
	$calle = $request->calle;
	$numero = $request->numero;
	$colonia = $request->colonia;
	$estado = $request->estado;
	$cp = $request->cp;

	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     ]);
		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
	        $TipAb = new empleados;
			$TipAb->id_empleado = $request->id_empleado;
			$TipAb->nombre = $request->nombre;
			$TipAb->apellido1 = $request->apellido1;
			$TipAb->apellido2 = $request->apellido2;
			$TipAb->puesto = $request->puesto;
			$TipAb->telefono = $request->telefono;
			$TipAb->email = $request->email;
			$TipAb->rfc = $request->rfc;
			$TipAb->calle = $request->calle;
			$TipAb->numero = $request->numero;
			$TipAb->colonia = $request->colonia;
			$TipAb->cp = $request->cp;

			$TipAb->save();
			$proceso = "Registro de empleados";
			//$mensaje = "Cliente registrado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
	}
	public function reporteempleado(){
		$TipAb = empleados::orderBy('id_empleado','asc')->get();
		return view('sistema.reporte_empleados')
		->with('TipAb',$TipAb);
	}
	public function modificaempleado($id_empleado){
		//echo "Tipo Abogado a modificar $id_cliente";
		$infom = empleados::where('id_empleado','=',$id_empleado)->get();
		 return view('sistema.modificaempleado')
		 ->with('infom',$infom[0]);
	}
		public function guardaedicionempleado(Request $request){
		//echo $request->nombre;
		$nombre = $request->nombre;
		$id_empleado = $request->id_empleado;

		$this->validate($request,[
	 
	     ]);
			$TA = empleados::find($id_empleado);
			$TA->id_empleado = $request->id_empleado;
			$TA->nombre = $request->nombre;
			$TA->apellido1 = $request->apellido1;
			$TA->apellido2 = $request->apellido2;
			$TA->puesto = $request->puesto;
			$TA->telefono = $request->telefono;
			$TA->email = $request->email;
			$TA->rfc = $request->rfc;
			$TA->calle = $request->calle;
			$TA->numero = $request->numero;
			$TA->colonia = $request->colonia;
			$TA->cp = $request->cp;
			$TA->save();
			$proceso = "MODIFICACION DE TIPO DE ABOGADO";
			//$mensaje = "Tipo de Abogado modificado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
}
}
