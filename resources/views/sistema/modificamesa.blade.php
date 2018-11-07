<html>
<body style="text-align: center;">
	
<h1>Modifica de Mesa</h1>
<br>
<form action ="{{route('guardaedicionm')}}" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

Clave <input type = 'text' name = 'id_mesa' value="{{$mesas->id_mesa}}" readonly = 'readonly'>
<br>


@if($errors->first('id_mesa'))
<i> {{ $errors->first('id_mesa') }} </i>
@endif <br>




@if($errors->first('numero_de_personas')) 
		<i> {{ $errors->first('numero_de_personas') }} </i> 
		@endif	<br>
		<p class="sub">Numero de personas</p> <input class="input48" type = 'text' name = 'numero_de_personas' value="{{old('numero_de_personas')}}">

<br>
<br>
Seleccione zona<select name = 'id_zona'>
        <option value = '{{$id_zona}}'>{{$zonas}}</option>
        @foreach($todasdemas as$td)



        <option value = '{{$td->id_zona}}'>{{$td->zona}}</option>
        @endforeach
      </select>
<br><br>


<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>
