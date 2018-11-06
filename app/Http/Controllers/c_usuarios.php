<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use App\usuarios;

class c_usuarios extends Controller
{
	public function mensaje(){
		echo "hola mundo";
	}

	







	public function altausuarios(){
		$clavequesigue = usuarios::orderBy('id_usuario','desc')
		->take(1)
		->get();
		$id_usr = $clavequesigue[0]->id_usuario+1;


		$empleados = empleados::where('activo','si')
		->orderBy('nombre','asc')
		->get();

		return view ('sistema.altausuarios')->with('empleados',$empleados)->with('id_usr',$id_usr);

	//$carreras = carreras::all();
	//return view ('sistema.altamaestro')->with('carreras',$carreras)->with('idms',$idms);
	//return $carreras;
	}
	public function guardausuarios(Request $request){
		$id_usuario = $request->id_usuario;
		$login = $request->login;
		$password = $request->password;
		$tipo_de_usuario = $request->tipo_de_usuario;
		$id_empleado = $request->id_empleado;
		//no se recibe el archivo
	 $this->validate($request,[
	     'id_usuario'=>'required|numeric',
	               'login'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],

          'password'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
         
                   'tipo_de_usuario'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],

           


	     ]);
		


		$maest = new usuarios;
		$maest->id_usuario = $request->id_usuario;
		$maest->login = $request->login;	
		$maest->password = $request->password;
		$maest->tipo_de_usuario = $request->tipo_de_usuario;
		$maest->id_empleado = $request->id_empleado;
		$maest->save();
		$proceso = "ALTA USUARIO";
		$mensaje = "Usuario guardado correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		public function reporteusuarios(){
			$usuarios = usuarios::orderBy('id_usuario','asc')->get();
			return view ('sistema.reporteusuarios')->with('usuarios',$usuarios);
	}
		public function eliminausuarios($id_usuario){
			usuarios::find($id_usuario)->delete();
			$proceso = "Eliminar Usuario";
			$mensaje = "El Usuario ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}

		public function modificausuarios($id_usuario){
			$infom= usuarios::where('id_usuario','=',$id_usuario)->get();
			$id_empleado = $infom [0]->id_empleado;

			$empleados = empleados::where('id_empleado','=',$id_empleado)->get();
			$todas = empleados::where('id_empleado','!=',$id_empleado)->get();

			return view ('sistema.modificausuarios')
			
			->with('infom',$infom[0])
			->with('id_empleado',$id_empleado)
			->with('empleados',$empleados[0]->nombre)
			->with('todas',$todas);
		}

public function guardaedicionusuario(Request $request){
		//echo $request->nombre;
		$id_usuario = $request->id_usuario;
		$login = $request->login;
		$password = $request->password;
		$tipo_de_usuario = $request->tipo_de_usuario;
		$id_empleado = $request->id_empleado;



	
		
			$TA = usuarios::find($id_usuario);
			$TA->id_usuario = $request->id_usuario;
			$TA->login = $request->login;
			$TA->password = $request->password;
			$TA->tipo_de_usuario = $request->tipo_de_usuario;
			$TA->id_empleado = $request->id_empleado;
			


			$TA->save();
			$proceso = "MODIFICACION DE USUARIOS";
			$mensaje = "USUARIO  modificado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
}



}
