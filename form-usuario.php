<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
		#form-admin-usuario{ width: 50%; margin: 0.5em auto;}
	</style>
	<script>

	</script>
</head>
<body>
	<form class="form-horizontal" id="form-admin-usuario">
	 	<div class="form-group">
			<label for="nombre" class="col-sm-2 control-label" >Nombre</label>
	    	<div class="col-sm-10">
				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" autofocus >
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="apellido" class="col-sm-2 control-label">Apellido</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="edad" class="col-sm-2 control-label">Edad</label>
	    	<div class="col-sm-10">
	      		<input type="number" class="form-control" name="edad" id="edad" placeholder="edad">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="especialidad" class="col-sm-2 control-label">Especialidad</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="especialidad" id="especialidad" placeholder="especialidad">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="cedula" class="col-sm-2 control-label">Cedula</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="cedula" id="cedula" placeholder="cedula">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="correo" class="col-sm-2 control-label">Correo</label>
	    	<div class="col-sm-10">
	      		<input type="email" class="form-control" name="correo" id="correo" placeholder="correo">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="telefono" class="col-sm-2 control-label">Telefono</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="nombreUsuario" class="col-sm-2 control-label">Nombre usuario</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="nombre usuario">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="contrasena" class="col-sm-2 control-label">Contraseña</label>
	    	<div class="col-sm-10">
	      		<input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="contraseña">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="recontrasena" class="col-sm-2 control-label">Repetir contraseña</label>
	    	<div class="col-sm-10">
	      		<input type="password" class="form-control" name="recontrasena" id="recontrasena" placeholder="repetir contraseña">
	    	</div>
	  	</div>
	  	<div class="form-group">
	  		<label for="selec-tipoUsuario" class="col-sm-2 control-label">Tipo de usuario</label>
	  		<div class="col-sm-10">
		  		<select class="form-control" id="selec-tipoUsuario">
			 		<option>Doctor</option>
			  		<option>Psicologo</option>
			  		<option>Enfermera</option>
				</select>
			</div>
	  	</div>		 
	  
 		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-default">Enviar</button>
	    	</div>
	  	</div>
	</form>
	
</body>
</html>