<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\clientes;

class controlador_clientes extends Controller
{
	public function principal()
	 {
		 return view('sistema.principal');
		
	 }

     public function altacliente(){
    	$clavequesigue = clientes::orderBy('id_cliente','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->id_cliente+1;

    	return view ('sistema.alta_clientes')
		     		->with('idTipAbs',$idTipAbs);
    }


    public function guardacliente(Request $request)
	{   
	$id_cliente = $request->id_cliente;
	$nombre = $request->nombre;
	$apellido1 = $request->apellido1;
	$apellido2 = $request->apellido2;
	$telefono = $request->telefono;
	$email = $request->email;
	$rfc = $request->rfc;
	$calle = $request->calle;
	$numero = $request->numero;
	$colonia = $request->colonia;
	$c_p = $request->c_p;
	$estado = $request->estado;

	/*$this->validate($request,[

			'nombre'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'apellido1' => 'required|alpha|max:255',
			'apellido2' => 'required|alpha|max:255',
			'puesto' => 'required|alpha|max:255',
			'telefono'=>'required|regex:/^[0-9]{10}$/',
			'email' => 'required|email|max:255',
			'rfc'=>'required|regex:/^[0-9,A-Z]{13}$/',
			'calle' => 'required|max:255',
			'numero' => 'required|numeric|max:2000',
			'colonia'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'cp'=>'required|regex:/^[0-9]{5}$/',

			'estado'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',

		]);
*/


	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     ]);
		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
	        $TipAb = new clientes;
			$TipAb->id_cliente = $request->id_cliente;
			$TipAb->nombre = $request->nombre;
			$TipAb->apellido1 = $request->apellido1;
			$TipAb->apellido2 = $request->apellido2;
			$TipAb->telefono = $request->telefono;
			$TipAb->email = $request->email;
			$TipAb->rfc = $request->rfc;
			$TipAb->calle = $request->calle;
			$TipAb->numero = $request->numero;
			$TipAb->colonia = $request->colonia;
			$TipAb->c_p = $request->c_p;
			$TipAb->estado = $request->estado;

			$TipAb->save();
			$proceso = "Registro de Clientes";

			//$mensaje = "Cliente registrado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
	}
	public function reportecliente(){
		$TipAb = clientes::orderBy('id_cliente','asc')->get();
		return view('sistema.reporte_clientes')
		->with('TipAb',$TipAb);
	}

	public function eliminacliente($id_cliente){
			clientes::find($id_cliente)->delete();
			$proceso = "Eliminar Cliente";
			$mensaje = "El cliente ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}
	public function modificacliente($id_cliente){
		//echo "Tipo Abogado a modificar $id_cliente";
		$infom = clientes::where('id_cliente','=',$id_cliente)->get();
		 return view('sistema.modificacliente')
		 ->with('infom',$infom[0]);
	}
		public function guardaedicioncliente(Request $request){
		//echo $request->nombre;
		$nombre = $request->nombre;
		$id_cliente = $request->id_cliente;

		$this->validate($request,[
	 
	     ]);
			$TA = clientes::find($id_cliente);
			$TA->id_cliente = $request->id_cliente;
			$TA->nombre = $request->nombre;
			$TA->apellido1 = $request->apellido1;
			$TA->apellido2 = $request->apellido2;
			$TA->telefono = $request->telefono;
			$TA->email = $request->email;
			$TA->rfc = $request->rfc;
			$TA->calle = $request->calle;
			$TA->numero = $request->numero;
			$TA->colonia = $request->colonia;
			$TA->c_p = $request->c_p;
			$TA->estado = $request->estado;


			$TA->save();
			$proceso = "Registro de Clientes";
			//$mensaje = "Tipo de Abogado modificado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
}
}
