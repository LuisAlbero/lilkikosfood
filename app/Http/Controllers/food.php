<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\carreras;
use App\maestros;

class curso extends Controller
{
    public function areatriangulo()
    {
        $base = 34;
        $altura= 40;
        $area = $base * $altura /2;
        echo "El area del triangulo es $area";
    }
    public function areacirculo($radio)
    {
        $pi = 3.14;
        $area = $pi * $radio * $radio;
        echo "el Area del circulo es $area";
    }
	public function altamaestro()
	{
        $clavequesigue = maestros::orderBy('idm', 'desc')
                                ->take(1)
                                ->get();
            $idms = $clavequesigue[0]->idm+1;
        //Select * from carreras
        //orm eloquent
        //$carreras = carreras::all(); (Manda todos los datos que encuentra en la tabla)
        //return $carreras;
        $carreras = carreras::where('activo', 'Si')
                            ->orderBy('nombre', 'asc')
                            ->get();
        return view ('sistema.altamaestro')
                    ->with('carreras', $carreras)
                    ->with('idms', $idms);
    }
	public function guardamaestro(Request $request)
	{   
	$nombre = $request->nombre;
	$edad= $request->edad;
	$correo = $request->correo;
	$idm = $request->idm;
    $cp = $request->cp;
    //No se recibe el archivo
	
	 $this->validate($request,[
	     'idm'=>'required|numeric',
         'nombre'=>'required|alpha',
         'edad'=>'required|integer|min:18|max:70',
         'correo'=>'required|email',
         'cp'=>['regex:/^[0-9]{5}/'],
               //['regex:/^[0-9]{5}[-][0-9,a-z]{3}[H,Z][a-z]*$/'] Fue ejemplo de clase
         'archivo' =>'image|mimes:jpg,jpeg,gif,png'
         ]);
         //$file=>C:/>users/misimagenes/carpeta/monlaferte.jpg
    $file = $request->file('archivo');
    if($file!="")
    {
    //ldate => 20180928_063455 (La fecha en la que se esta guardando la imagen)
    $ldate = date ('Ymd_His_');
    //$img = monlaferte.jpg
    $img = $file->getClientOriginalName();
    //img2 =20180928_063455_monlaferte.jpg (De esta manera quedaria gurdada la imagen)
    $img2 = $ldate.$img;
    \Storage::disk('local')->put($img2, \File::get($file));
    }
    else{
        $img2 = 'Sinfoto.jpg';
    }

      //echo "listo para guardar";
      //insert into maestros values (idm,nombre,edad),,,,,,
      $maest = new maestros;
      $maest->archivo = $img2;
      $maest -> idm = $request->idm;
      $maest -> nombre = $request->nombre;
      $maest -> edad = $request->edad;
      $maest -> correo = $request->correo;
      $maest -> cp = $request->cp;
      $maest -> idc = $request->idc;
      $maest -> save();
      //echo "Registro Guardadp";
      $proceso = "ALTA DE MAESTRO";
      $mensaje = "Maestro guardado correctamente";
      return view ("sistema.mensaje")
      ->with('proceso', $proceso)
      ->with('mensaje', $mensaje);
      
    }
    
    public function reportemaestros(){
        $maestros = maestros::orderBy('nombre','asc')->get();
        return view ('sistema.reporte')
        ->with('maestros', $maestros);
    }

    public function eliminam($idm){
        //echo "El maestro a eliminar es $idm";
        maestros::find($idm)->delete();
        $proceso = "Eliminar Maestros";
        $mensaje = "El maestro ha sido eliminado exitosamente";
        return view('sistema.mensaje')
        ->with('proceso', $proceso)
        ->with('mensaje', $mensaje);
    }


    public function modificam($idm){
        //echo "Maestro a modificar $idm";
        $infom = maestros::where('idm', '=', $idm)->get();
        $idc = $infom[0]->idc;

        $carrera= carreras::where('idc', '=', $idc)->get();

        $todasdemas = carreras::where('idc', '!=', $idc)->get();

        return view ('sistema.modificamaestro')
        ->with('infom', $infom[0])
        ->with('idc', $idc)
        ->with('carrera', $carrera[0]->nombre)
        ->with('todasdemas', $todasdemas);
    }
    public function guardaedicionm(Request $request)
    {
        //echo $request->nombre;
        $nombre = $request->nombre;
	$edad= $request->edad;
	$correo = $request->correo;
	$idm = $request->idm;
    $cp = $request->cp;
    //No se recibe el archivo
	
	 $this->validate($request,[
	     'idm'=>'required|numeric',
         'nombre'=>'required|alpha',
         'edad'=>'required|integer|min:18|max:70',
         'correo'=>'required|email',
         'cp'=>['regex:/^[0-9]{5}/'],
               //['regex:/^[0-9]{5}[-][0-9,a-z]{3}[H,Z][a-z]*$/'] Fue ejemplo de clase
         'archivo' =>'image|mimes:jpg,jpeg,gif,png'
         ]);

         $file = $request->file('archivo');
    if($file!="")
    {
    //ldate => 20180928_063455 (La fecha en la que se esta guardando la imagen)
    $ldate = date ('Ymd_His_');
    //$img = monlaferte.jpg
    $img = $file->getClientOriginalName();
    //img2 =20180928_063455_monlaferte.jpg (De esta manera quedaria gurdada la imagen)
    $img2 = $ldate.$img;
    \Storage::disk('local')->put($img2, \File::get($file));
    }
     }
}