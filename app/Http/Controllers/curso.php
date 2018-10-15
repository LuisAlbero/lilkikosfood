<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\clientes;

class curso extends Controller
{
   
    public function altacliente()
    {
		// ORM ELOQUENT
		//select * from carreras
		//$carreras=carreras::all();
		//select * from carreras where activo = 'si' order by nombre asc
		
		  $clavequesigue = clientes::withTrashed()->orderBy('id_cliente','desc')
								->take(1)
								->get();
           $id_cl = $clavequesigue[0]->id_cliente+1;
	 					
							
		//return $carreras;
	   return view ("sistema.altacliente")
	  
	   ->with('id_cl',$id_cl);
	}	
    public function guardarcliente(Request $request)
    {
    	$id_cliente = $request->id_cliente;
		$nombre = $request->nombre;
		$apellido1= $request->apellido1;
		$apellido2 = $request->apellido2;
		$telefono= $request->telefono;
		$email = $request->email;
		$rfc = $request->rfc;
		$calle = $request->calle;
		$numero = $request->numero;
		$colonia = $request->colinia;
		$c_p = $request->c_p;
		$estado = $request->estado;

		///NUNCA SE RECIBEN LOS ARCH

    
		 
		 
		 //insert into maestros(idm,nombre,edad,sexo) values('$idm',
		 //'$nombre')
		    $clien = new clientes;
			$clien->id_cliente = $request->id_cliente;
			$clien->nombre = $request->nombre;
			$clien->apellido1 = $request->apellido1;
			$clien->apellido2 =$request->apellido2;
			$clien->telefono= $request->telefono;
			$clien->email=$request->email;
			$clien->rfc=$request->rfc;
			$clien->calle=$request->calle;
			$clien->numero =$request->numero;
			$clien->colonia=$request->colonia;
			$clien->c_p=$request->c_p;
			$clien->estado=$request->estado;

			$clien->save();
		$proceso = "ALTA DE MAESTRO";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}		
	
	public function reportemaestros()
	{
		
		//$todos = Todo::all();
//return view('todos.index')->with(['todos' => $todos]);

	$maestros = maestros::withTrashed()
	                                  ->orderBy('idm','desc')->get();
	return view ('sistema.reportemaestros')
	->with('maestros',$maestros);
	
	}
	public function eliminam($idm)
	{
		    maestros::find($idm)->delete();
		    $proceso = "ELIMINAR MAESTROS";
			$mensaje = "El maestro ha sido borrado Correctamente";
			return view ('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function modificam($idm)
	{
		$maestro = maestros::where('idm','=',$idm)->get();
		
		$idc = $maestro[0]->idc;
		
		$carrera = carreras::where('idc','=',$idc)->get();
		$demascarreras = carreras::where('idc','!=',$idc)
		                           ->get();
		
		
		return view('sistema.guardamaestro')
	                             ->with('maestro',$maestro[0])
								 ->with('idc',$idc)
								 ->with('carrera',$carrera[0]->nombre)
								 ->with('demascarreras',$demascarreras);
	}
	public function editamaestro(Request $request)
	{
	$nombre = $request->nombre;
		$idm = $request->idm;
		$edad= $request->edad;
		$sexo = $request->sexo;
		$beca= $request->beca;
		$cp = $request->cp;
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
		 'nombre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
		 'edad'=>'required|integer|min:18|max:60',
		 'cp'=>'required',['regex:/^[0-9]{5}$/'],
		 'beca'=>'required',['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'archivo'=>'image|mimes:jpg,jpeg,png,gif'
	     ]);
		 
		  $file = $request->file('archivo');
	 if($file!="")
	 {
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
		 
		    $maest = maestros::find($idm);
			$maest->idm = $request->idm;
			$maest->nombre = $request->nombre;
			$maest->edad =$request->edad;
			$maest->sexo= $request->sexo;
			$maest->cp=$request->cp;
			$maest->beca=$request->beca;
			$maest->idc=$request->idc;
			if($file!='')
			{
			$maest->archivo = $img2;
			}
			$maest->save();
		$proceso = "Modificacion DE MAESTRO";	
	    $mensaje="Registro modificado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}
	public function restauram($idm)
	{
		maestros::withTrashed()->where('idm',$idm)->restore();
		$proceso = "RESTAURACION DE MAESTRO";	
	    $mensaje="Registro restaurado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);

		
	}
}






















