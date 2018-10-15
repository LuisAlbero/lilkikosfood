

@section('contenido')
<h1> Alta de CLIENTEs </h1>
<br>
<form action = '{{route('guardarcliente')}}' method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

@if($errors->first('id_cliente')) 
<i> {{ $errors->first('id_cliente') }} </i> 
@endif	<br>
        

Clave  clien <input type = 'text' name = 'id_cliente' value="{{$id_cl}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre<input type  ='text' name = 'nombre' value="{{old('nombre')}}">
<br>



@if($errors->first('apellido1')) 
<i> {{ $errors->first('apellido1') }} </i> 
@endif	<br>
Apellido Paterno<input type = 'text' name = 'apellido1' value="{{old('apellido1')}}" >
<br>

@if($errors->first('apellido2')) 
<i> {{ $errors->first('apellido2') }} </i> 
@endif	<br>
Apellido Materno<input type = 'text' name = 'apellido2' value="{{old('apellido2')}}" >
<br>


@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>
telefono<input type = 'text' name = 'telefono' value="{{old('telefono')}}" >
<br>

@if($errors->first('email')) 
<i> {{ $errors->first('email') }} </i> 
@endif	<br>
email<input type  ='text' name = 'email' value="{{old('email')}}">
<br>

@if($errors->first('rfc')) 
<i> {{ $errors->first('rfc') }} </i> 
@endif	<br>
rfc<input type  ='text' name = 'rfc' value="{{old('rfc')}}">
<br>

@if($errors->first('calle')) 
<i> {{ $errors->first('calle') }} </i> 
@endif	<br>
Calle<input type  ='text' name = 'calle' value="{{old('calle')}}">
<br>

@if($errors->first('numero')) 
<i> {{ $errors->first('numero') }} </i> 
@endif	<br>
 numero<input type  ='text' name = 'numero' value="{{old('numero')}}">
<br>





@if($errors->first('colonia')) 
<i> {{ $errors->first('colonia') }} </i> 
@endif	<br>
colonia<input type  ='text' name = 'colonia' value="{{old('colonia')}}">
<br>


@if($errors->first('c_p')) 
<i> {{ $errors->first('c_p') }} </i> 
@endif  <br>
estado<input type  ='text' name = 'c_p' value="{{old('c_p')}}">
<br> 

@if($errors->first('estado')) 
<i> {{ $errors->first('estado') }} </i> 
@endif  <br>
c_p<input type  ='text' name = 'estado' value="{{old('estado')}}">
<br>





<br>
<input type = 'submit' value = 'Guardakr'>
<br>
</form>


