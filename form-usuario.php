<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/sweetalert.css" />
	<style>
		#form-admin-usuario{ width: 50%; margin: 0.5em auto;}
	</style>
	<script>
		$(function(){
			// function click del boton enviar del formulario
			// primero se manda llamer el metdo para validar el formulario,
			// si todo sale bien regrsa un true y se hace la llamda ajax
			// para enviar los datos al servidor
			$('#btn-enviar-form').click(function() {
				var confirm = validarFormulario();
				if(confirm){
					var url = 'server-ingreso-usuario.php';
					$.ajax({
						type: 'POST',
						url: url,
						data: $('#form-admin-usuario').serialize(),
						success: function(data) {
							console.log(data);
							// Principales errores que el servidor regresará :
							// 1.- El nombre de usuario ya existe
							// 2.- La cedula ya esta dentro del sistema
							// 3.- El un usuario ya esta registrado con ese nombre y apellido
							// 4.- Ingreso exitoso
							if(data == 1){
								sweetAlert("Error...", "El nombre de usuario ya existe.", "error");
								$('#nombreUsuario').focus();
							}else if(data == 2){
								sweetAlert("Error...", "La cedula ya se encuentra registrada en el sistema.", "error");
								$('#cedula').focus();
							}else if(data == 3){
								sweetAlert("Error...", "Ya existe un usuario con el nombre y apellido, registrado.", "error");
								$('#nombre').focus();
							}else if(data == 4){
								sweetAlert("Correcto", "Ingreso exitoso!", "success");
								limpiarFormulario();
							}
						}
					});
				}
			});
			// funcion click para limpiar el formualario
			$('#btn-cancelar-form').click(function() {
				limpiarFormulario();
			});

			// funcion para validar el formulario de nuevo usuario
			// verifica especios en blanco, el correo, telefono y la contraseña
			function validarFormulario(){

				var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/; // ER validacion correo
				var tel = /^\d{10}$/; // ER validacion telefono

				if( $('#nombre').val() === ""){
					alertSweetVacio('nombre');
				}else if( $('#apellido').val() === ""){
					alertSweetVacio('apellido');
				}else if( $('#edad').val() === ""){
					alertSweetVacio('edad');
				}else if( $('#especialidad').val() === ""){
					alertSweetVacio('especialidad');
				}else if( $('#cedula').val() === ""){
					alertSweetVacio('cedula');
				}else if( $('#correo').val() === ""){
					alertSweetVacio('correo');
				}else if( $('#telefono').val() === ""){
					alertSweetVacio('telefono');
				}else if( $('#nombreUsuario').val() === ""){
					alertSweetVacio('nombre de usuario');
				}else if( $('#contrasena').val() === ""){
					alertSweetVacio('contraseña');
				}else if( $('#recontrasena').val() === ""){
					alertSweetVacio('repetir contraseña');
				}else if( !regex.test( $('#correo').val() ) ){
					alertSweetCorreoIncorrecto();
				}else if( $('#contrasena').val() != $('#recontrasena').val() ){
					alertErrorContra();
				}else if(!tel.test( $('#telefono').val())){
					 alertErrorTelefono();
				}else{
					return true;
				}
			}
			// funcion para limpiar el formulario
			function limpiarFormulario(){
				$('#form-admin-usuario')[0].reset();
			}
			// las siguientes funciones son para mostrar un alert mas personalizado
			function alertSweetVacio(nombre){
				sweetAlert("Error...", "Campo "+nombre+" vacio", "error");
			}
			function alertSweetCorreoIncorrecto(){
				sweetAlert("Error...", "El correo es incorrecto", "error");
			}
			function alertErrorContra(){
				sweetAlert("Error...", "Las contraseñas no coinciden", "error");
			}
			function alertErrorTelefono(){
				sweetAlert("Error...", "El telefono debe ser de 10 digitos.", "error");
			}
		});
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
	      		<input type="number" class="form-control" name="telefono" id="telefono" placeholder="telefono">
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
	  		<label for="selec-tipoUsuario" class="col-sm-2 control-label">Tipo</label>
	  		<div class="col-sm-10">
		  		<select class="form-control" id="selec-tipoUsuario" name="selec-tipoUsuario">
			 		<option>Doctor</option>
			  		<option>Psicologo</option>
			  		<option>Enfermera</option>
				</select>
			</div>
	  	</div>

 		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="button" id="btn-enviar-form" class="btn btn-default">Enviar</button>
	      		<button type="button" id="btn-cancelar-form" class="btn btn-default">Cancelar</button>
	    	</div>
	  	</div>
	</form>

</body>
</html>
