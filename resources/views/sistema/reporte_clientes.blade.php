@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE CLIENTE</h2>
	<div class="tab">
	<table border="1" >

<thead>
		<tr><td>Clave</td><td>Nombre</td><td>Apellido M.</td><td>Apellido P</td><td>Telefono</td><td>Email</td><td>Rfc</td><td>Calle</td><td>Numero</td>	<td>Colonia</td>	<td>C.P.</td>	<td>Estado</td><td>Accion</td>			
		</tr>
</thead>

		@foreach($TipAb as $ab)
			<tr><td>{{$ab->id_cliente}}</td><td>{{$ab->nombre}}</td><td>{{$ab->apellido1}}</td><td>{{$ab->apellido2}}</td><td>{{$ab->telefono}}</td><td>{{$ab->email}}</td><td>{{$ab->rfc}}</td><td>{{$ab->calle}}</td><td>{{$ab->numero}}</td><td>{{$ab->colonia}}</td><td>{{$ab->c_p}}</td><td>{{$ab->estado}}</td>




			<td> <a href="{{URL::action('controlador_clientes@eliminacliente', ['id_cliente'=>$ab->id_cliente])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button></a>
				<a href="{{URL::action('controlador_clientes@modificacliente',['id_cliente'=>$ab->id_cliente])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Edit
        </button></a>
			</td></tr>
		@endforeach
	</table>
</div>
@stop