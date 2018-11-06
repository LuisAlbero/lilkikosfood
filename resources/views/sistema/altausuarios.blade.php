	@extends('sistema.principal')

  @section('contenido')


			
			<div align="center" class="row">
			<form class="formulario" role="form" action="{{route('guardausuarios')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}
				<div class="contenedor">
		<h2 class="title"> REGISTRO USUARIO</h2>

				@if($errors->first('id_usuario'))
		        <i> {{ $errors->first('id_usuario') }} </i>
		        @endif 
		        <div class="form-group">
		        	<label for="id_usuario"><p class="sub">ID Usuario:</p></label>
				<input class="input48" type="text" placeholder="Clave..." name="id_usuario" value="{{$id_usr}}" readonly='readonly'><br>
				</div>

				@if($errors->first('login'))
		        <i> {{ $errors->first('login') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">Login:</label>
				<input class="input48" type="text" placeholder="Usuario" name="login" value="{{old('login')}}"><br>
				</div>

				@if($errors->first('password'))
		        <i> {{ $errors->first('password') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="password">Password:</label>
				   <input class="input48" type="text" placeholder="Password" name="password" value="{{old('password')}}"><br>
				</div>

				

				@if($errors->first('tipo_de_usuario'))
		        <i> {{ $errors->first('tipo_de_usuario') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="tipo_de_usuario">Tipo de usuario:</label>
				 <input class="input48" type="text" placeholder="Tipo de usuario..." name="tipo_de_usuario" value="{{old('tipo_de_usuario')}}"><br><br>

				</div>

				Selecciona tu nombre de empleado<select name="id_empleado">
				@foreach($empleados as $cr)
				<option class="input48" value= '{{$cr->id_empleado}}'> {{$cr->nombre}} 
				</option>	
				@endforeach
				</select>
				<br><br>

			

	
		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
</form></div>
@stop