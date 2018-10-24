<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Clientes</title>
</head>
<body>
	<h1 align="center">Registrar empleado</h1>
	<form action ="{{route('guardaempleado')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_clientes'))
		<i> {{ $errors->first('id_clientes') }} </i> 
		@endif	<br>

		Clave: <input type = 'text' name = 'id_empleado' value="{{$idTipAbs}}" readonly = 'readonly'>
		<br><br>



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		Nombre: <input type = 'text' name = 'nombre' value="{{old('nombre')}}">
		<br>
		<br>


		@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	<br>
		Apellido P: <input type = 'text' name = 'apellido1' value="{{old('apellido1')}}">
		<br>
		<br>


		@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	<br>
		Apellido M: <input type = 'text' name = 'apellido2' value="{{old('apellido2')}}">
		<br>
		<br>



		@if($errors->first('puesto')) 
		<i> {{ $errors->first('puesto') }} </i> 
		@endif	<br>
		Puesto: <input type = 'text' name = 'puesto' value="{{old('puesto')}}">
		<br>
		<br>




		@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	<br>
		Telefono: <input type = 'text' name = 'telefono' value="{{old('telefono')}}">
		<br>
		<br>




		@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	<br>
		Emial: <input type = 'text' name = 'email' value="{{old('email')}}">
		<br>
		<br>




		@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	<br>
		RFC: <input type = 'text' name = 'rfc' value="{{old('rfc')}}">
		<br>
		<br>




		@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	<br>
		Calle: <input type = 'text' name = 'calle' value="{{old('calle')}}">
		<br>
		<br>




		@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	<br>
		Numero: <input type = 'text' name = 'numero' value="{{old('numero')}}">
		<br>
		<br>


		@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	<br>
		Colonia: <input type = 'text' name = 'colonia' value="{{old('colonia')}}">
		<br>
		<br>



		@if($errors->first('estado')) 
		<i> {{ $errors->first('estado') }} </i> 
		@endif	<br>
		Estado: <input type = 'text' name = 'estado' value="{{old('estado')}}">
		<br>
		<br>


		@if($errors->first('cp')) 
		<i> {{ $errors->first('cp') }} </i> 
		@endif	<br>
		CP: <input type = 'text' name = 'cp' value="{{old('cp')}}">
		<br>
		<br>




		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>