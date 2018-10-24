<!DOCTYPE html>
		<html>
		<head>
			<title>Modifica Usuario</title>
		</head>


		<body>
				<center><h1> Modifica Usuarios</h1></center>

			
			<div align="center" class="row">
	<form action ="{{route('guardaedicionusuario')}}" method = 'POST' align="center">
				{{csrf_field()}}

				@if($errors->first('id_usuario'))
		        <i> {{ $errors->first('id_usuario') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_usuario">Clave:</label>
				<input type="text" placeholder="Clave" name="id_usuario" value="{{$infom->id_usuario}}" readonly='readonly'><br>
				</div>

				@if($errors->first('login'))
		        <i> {{ $errors->first('login') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">login:</label>
				<input type="text" placeholder="login" name="nombre" value="{{$infom->login}}"><br>
				</div>

				@if($errors->first('password'))
		        <i> {{ $errors->first('password') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="password">password:</label>
				   <input type="text" placeholder="Password" name="password" value="{{$infom->password}}"><br>
				</div>

				@if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="tipo_de_usuario">Tipo de Usuario:</label>
				<input type="text" placeholder="Tipo de Usuario" name="tipo_de_usuario" value="{{$infom->tipo_de_usuario}}"><br>
				</div>
				<br>
			

				Selecciona Tu nombre de Empleado<select name="id_empleado">
					<option value='{{$id_empleado}}'>{{$empleados}}</option>
					@foreach($todas as $td)
					<option value='{{$td->id_empleado}}'>{{$td->nombre}}</option>
					@endforeach
				</select>
				<br>
<br>

				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
			
		</body>
		</html>

