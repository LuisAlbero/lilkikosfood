<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Clientes</title>
</head>
<body>
	<h1 align="center">Modifica EMPLEADOS</h1>
	<form action ="{{route('guardaedicionempleado')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_empleado'))
		<i> {{ $errors->first('id_empleado') }} </i> 
		@endif	<br>

		Clave : <input type = 'text' name = 'id_empleado' value="{{$infom->id_empleado}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>

		Descripción del Tipo: <input type = 'text' name = 'nombre' value="{{$infom->nombre}}">
		<br>
		<br>


@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	<br>

		Apellido P: <input type = 'text' name = 'apellido1' value="{{$infom->apellido1}}">
		<br>
		<br>

@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	<br>

		Apellido M: <input type = 'text' name = 'apellido2' value="{{$infom->apellido2}}">
		<br>
		<br>


@if($errors->first('puesto')) 
		<i> {{ $errors->first('puesto') }} </i> 
		@endif	<br>

		Puesto: <input type = 'text' name = 'puesto' value="{{$infom->puesto}}">
		<br>
		<br>



@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	<br>

		Telefono: <input type = 'text' name = 'telefono' value="{{$infom->telefono}}">
		<br>
		<br>



@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	<br>

	Email: <input type = 'text' name = 'email' value="{{$infom->email}}">
		<br>
		<br>



@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	<br>

		RFC: <input type = 'text' name = 'rfc' value="{{$infom->rfc}}">
		<br>
		<br>



@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	<br>

		Calle: <input type = 'text' name = 'calle' value="{{$infom->calle}}">
		<br>
		<br>



@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	<br>

		Numero: <input type = 'text' name = 'numero' value="{{$infom->numero}}">
		<br>
		<br>





@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	<br>

		Colonia: <input type = 'text' name = 'colonia' value="{{$infom->colonia}}">
		<br>
		<br>





@if($errors->first('estado')) 
		<i> {{ $errors->first('estado') }} </i> 
		@endif	<br>

		Estado: <input type = 'text' name = 'estado' value="{{$infom->estado}}">
		<br>
		<br>





@if($errors->first('cp')) 
		<i> {{ $errors->first('cp') }} </i> 
		@endif	<br>

		CP: <input type = 'text' name = 'cp' value="{{$infom->cp}}">
		<br>
		<br>




		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>