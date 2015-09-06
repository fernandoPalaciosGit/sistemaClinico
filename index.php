<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inicio</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css" />
	<script>
		$(function() {

			$('#btn-entrar').click(function() {
				var confirmado = validarFormulario();
				if(confirmado){
					var url = 'iniciar-sesion.php';
					$.ajax({
						type: 'POST',
						url: url,
						data: $('#form-index').serialize(),
						success:function(data){							
							if(data == 0){
								window.location.replace("index-admin.php");
							}else{
								$('#resp').html(data);
							}
						}
					});
				}
			});
			function validarFormulario(){
				if( $('#usuario').val() == "")
				{
					$('#resp').html("Existen campos vacios.");
					$('#usuario').focus();
				}else if( $('#contrasena').val() == "")
				{
					$('#resp').html("Existen campos vacios.");
					$('#contrasena').focus();
				}else
				{
					$('#resp').html("");
					return true;
				}
			}
		});
	</script>
</head>
<body>
	<header>
		<nav>
			<h1>Inicio</h1>
		</nav>
	</header>
	<div id="cont-form">
		<form action="#" id="form-index">
			<div class="form-group">
		    	<label for="usuario">Usuario</label>
		    	<input type="email" class="form-control" id="usuario" name="usuario" placeholder="usuario">
		  	</div>
		  	<div class="form-group">
		    	<label for="contrasena">Contraseña</label>
		    	<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contraseña">
		  	</div>
		  	<input id="btn-entrar" class="btn btn-primary" type="button" value="ingresar" />
			<div id="resp"></div>
		</form>
	</div>

</body>
</html>
