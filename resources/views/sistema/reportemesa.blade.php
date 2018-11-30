@extends('sistema.principal')

  @section('contenido')
		<h2 class="titlea"> REPORTE MESA</h2>
	<div class="tab">
	
	<table border="1" align="center">
		<thead>	
		<tr><td>Clave</td><td>Clave de la zona</td><td>Numero de Personas</td><td>Accion</td>	
		</tr>
	</thead>
		@foreach($mesas as $ab)

			<tr>
				<td>{{$ab->id_mesa}}</td>

             <td>{{$ab->id_zona}}</td>
             				<td>{{$ab->numero_de_personas}}</td>




              
              
                         
			<td><a href="{{URL::action('curso@eliminamesa',['id_mesa'=>$ab->id_mesa])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-trash"></span>  
        </button> </a>
				<a href="{{URL::action('curso@modificam',['id_mesa'=>$ab->id_mesa])}}"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> 
        </button></a>
			
		@endforeach
	</table>
@stop