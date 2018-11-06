@extends('sistema.principal')

  @section('contenido')

	<form  class="formulario" action ="{{route('guardaempleado')}}" method = 'POST' align="center">

		<div class="contenedor">
		<h2 class="title"> REGISTRO EMPLEADO</h2>
		{{csrf_field()}}

		@if($errors->first('id_clientes'))
		<i> {{ $errors->first('id_clientes') }} </i> 
		@endif	<br>
		<p class="sub">Clave:</p> <input class="input48" type = 'text' name = 'id_empleado' value="{{$idTipAbs}}" readonly = 'readonly'>
		



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br><br>
		<p class="sub">Nombre:</p> <input class="input48" type = 'text' name = 'nombre' value="{{old('nombre')}}">
		


		@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	<br>
		<p class="sub">Apellido P:</p> <input class="input48" type = 'text' name = 'apellido1' value="{{old('apellido1')}}">
		


		@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	<br>
		<p class="sub">Apellido M:</p> <input class="input48" type = 'text' name = 'apellido2' value="{{old('apellido2')}}">
		



		@if($errors->first('puesto')) 
		<i> {{ $errors->first('puesto') }} </i> 
		@endif	<br>
		<p class="sub">Puesto:</p> <input class="input48" type = 'text' name = 'puesto' value="{{old('puesto')}}">
		



		@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	<br>
		<p class="sub">Telefono:</p> <input class="input48" type = 'text' name = 'telefono' value="{{old('telefono')}}">
		




		@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	<br>
		<p class="sub">Email:</p> <input class="input48" type = 'text' name = 'email' value="{{old('email')}}">
	




		@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	<br>
		<p class="sub">RFC:</p> <input class="input48" type = 'text' name = 'rfc' value="{{old('rfc')}}">
		



		@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	<br>
		<p class="sub">Calle:</p> <input class="input48" type = 'text' name = 'calle' value="{{old('calle')}}">
		




		@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	<br>
		<p class="sub">Numero:</p> <input class="input48" type = 'text' name = 'numero' value="{{old('numero')}}">
		


		@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	<br>
		<p class="sub">Colonia:</p> <input class="input48" type = 'text' name = 'colonia' value="{{old('colonia')}}">
		



		@if($errors->first('estado')) 
		<i> {{ $errors->first('estado') }} </i> 
		@endif	<br>
		<p class="sub">Estado:</p> <input class="input48" type = 'text' name = 'estado' value="{{old('estado')}}">
		


		@if($errors->first('cp')) 
		<i> {{ $errors->first('cp') }} </i> 
		@endif	<br>
		<p class="sub">CP:</p> <input class="input48" type = 'text' name = 'cp' value="{{old('cp')}}">
		<br>

<br>


		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
@stop