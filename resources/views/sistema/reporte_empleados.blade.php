<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte de Tipos de Abogados</title>
</head>
<body>
	<h1 align="center">REPORTE EMPLEADOS</h1>
	<table border="1" align="center">
		<tr><td>Clave</td><td>Nombre</td><td>Apellido P</td><td>Apellido M</td><td>Puesto </td><td>Telefono </td><td>Email </td><td>RFC P</td><td>Calle </td><td>Numero </td><td>Colonia </td><td>Estado</td><td>CP</td><td>Accion</td>	
		</tr>
		@foreach($TipAb as $ab)

			<tr><td>{{$ab->id_empleado}}</td>
             <td>{{$ab->nombre}}</td>
              <td>{{$ab->apellido1}}</td>
               <td>{{$ab->apellido2}}</td>
                <td>{{$ab->puesto}}</td>
                 <td>{{$ab->telefono}}</td>
                  <td>{{$ab->email}}</td>
                   <td>{{$ab->rfc}}</td>
                    <td>{{$ab->calle}}</td>
                     <td>{{$ab->numero}}</td>
                      <td>{{$ab->colonia}}</td>
                       <td>{{$ab->estado}}</td>
                        <td>{{$ab->cp}}</td>
                         
		<td><a href="{{URL::action('controlador_empleados@eliminaempleado', ['id_empleado'=>$ab->id_empleado])}}">Eliminar</a>

				<a href="{{URL::action('controlador_empleados@modificaempleado',['id_empleado'=>$ab->id_empleado])}}">Modificar</a>
			</td></tr>
		@endforeach
	</table>
</body>
</html>