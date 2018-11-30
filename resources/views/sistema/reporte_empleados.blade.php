@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE EMPLEADO</h2>


	<table border="1" align="center">
		<thead>

		<tr><td>Clave</td><td>Nombre</td><td>Apellido P</td><td>Apellido M</td><td>Puesto </td><td>Telefono </td><td>Email </td><td>Calle </td><td>Numero </td><td>Colonia </td><td>Estado</td><td>CP</td><td>Accion</td>	
		</tr>
	</thead>
		@foreach($TipAb as $ab)

			<tr><td>{{$ab->id_empleado}}</td>
             <td>{{$ab->nombre}}</td>
              <td>{{$ab->apellido1}}</td>
               <td>{{$ab->apellido2}}</td>
                <td>{{$ab->puesto}}</td>
                 <td>{{$ab->telefono}}</td>
                  <td>{{$ab->email}}</td>
                    <td>{{$ab->calle}}</td>
                     <td>{{$ab->numero}}</td>
                      <td>{{$ab->colonia}}</td>
                       <td>{{$ab->estado}}</td>
                        <td>{{$ab->cp}}</td>
                         
		<td><a href="{{URL::action('controlador_empleados@eliminaempleado', ['id_empleado'=>$ab->id_empleado])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button></a>

				<a href="{{URL::action('controlador_empleados@modificaempleado',['id_empleado'=>$ab->id_empleado])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></a></a>
			</td></tr>
		@endforeach
	</table>
@stop