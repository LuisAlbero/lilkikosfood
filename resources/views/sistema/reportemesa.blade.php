<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte Mesas</title>
</head>
<body>
	<h1 align="center">REPORTE MESAS</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Clave de la zona</td><td>Accion</td>	
		</tr>
		@foreach($mesas as $ab)

			<tr><td>{{$ab->id_mesa}}</td>
             <td>{{$ab->id_zona}}</td>



              
              
                         
			<td><a href="#">Eliminar </a>
				<a href="{{URL::action('curso@modificam',['id_mesa'=>$ab->id_mesa])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>