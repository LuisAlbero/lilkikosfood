<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Mesas</title>
</head>
<body>
	<h1 align="center">REPORTE MESAS</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Clave de la zona</td><td>Numero de Personas</td><td>Accion</td>	
		</tr>
		@foreach($mesas as $ab)

			<tr><td>{{$ab->id_mesa}}</td>
             <td>{{$ab->id_zona}}</td>
             <td>{{$ab->numero_de_personas}}</td>
             



              
              
                         
			<td>
				<a href="{{URL::action('c_mesas@eliminamesa',['id_mesa'=>$ab->id_mesa])}}">Eliminar</a>
				<a href="{{URL::action('c_mesas@modificam',['id_mesa'=>$ab->id_mesa])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>