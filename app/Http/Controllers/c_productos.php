<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\productos;
use App\tipo_de_productos;

class c_productos extends Controller
{
	public function mensaje(){
		echo "hola mundo";
	}

	







	public function altaproductos(){
		$clavequesigue = productos::orderBy('id_producto','desc')
		->take(1)
		->get();
		$id_usr = $clavequesigue[0]->id_producto+1;


		$tipo_de_productos = tipo_de_productos::where('activo','si')
		->orderBy('nombre','asc')
		->get();

		return view ('sistema.altaproductos')->with('tipo_de_productos',$tipo_de_productos)->with('id_usr',$id_usr);

	//$carreras = carreras::all();
	//return view ('sistema.altamaestro')->with('carreras',$carreras)->with('idms',$idms);
	//return $carreras;
	}
	public function guardaproductos(Request $request){
		$id_producto = $request->id_producto;
		$nombre = $request->nombre;
		$descripcion = $request->descripcion;
		$precio = $request->precio;
		$id_tipo_producto = $request->id_tipo_producto;
 

 $this->validate($request,[
	     'id_producto'=>'required|numeric',
	               'nombre'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],

          'descripcion'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
         

           'precio'=>'required|numeric',
           


	     ]);



		$maest = new productos;
		$maest->id_producto = $request->id_producto;
		$maest->nombre = $request->nombre;	
		$maest->descripcion = $request->descripcion;
		$maest->precio = $request->precio;
		$maest->id_tipo_producto = $request->id_tipo_producto;

		$maest->save();
		$proceso = "ALTA PRODUCTO";
		$mensaje = "Producto guardado correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		public function reporteproductos(){
			$productos = productos::orderBy('id_producto','asc')->get();
			return view ('sistema.reporteproductos')->with('productos',$productos);
	}
		public function eliminaproductos($id_producto){
			productos::find($id_producto)->delete();
			$proceso = "Eliminar Producto";
			$mensaje = "El Producto ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}

		public function modificaproductos($id_producto){
			$infom= productos::where('id_producto','=',$id_producto)->get();
			$id_tipo_producto = $infom [0]->id_tipo_producto;

			$tipo_de_productos = tipo_de_productos::where('id_tipo_producto','=',$id_tipo_producto)->get();
			$todas = tipo_de_productos::where('id_tipo_producto','!=',$id_tipo_producto)->get();

			return view ('sistema.modificaproductos')
			
			->with('infom',$infom[0])
			->with('id_tipo_producto',$id_tipo_producto)
			->with('tipo_de_productos',$tipo_de_productos[0]->nombre)
			->with('todas',$todas);
		}

public function guardaedicionusuario(Request $request){
		//echo $request->nombre;
		$id_usuario = $request->id_usuario;
		$login = $request->login;
		$password = $request->password;
		$tipo_de_usuario = $request->tipo_de_usuario;
		$id_empleado = $request->id_empleado;


	 $this->validate($request,[
	     'id_cliente'=>'required|numeric',
         'login'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
          'password'=>['required','regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
          


	     ]);
	
		
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
