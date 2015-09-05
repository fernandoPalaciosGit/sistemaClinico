<?php session_start(); if($_SESSION['activo'] !== true){ header('Location:index.php'); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/index-admin.css" />
	<script>
	$(function(){
		
		$('#btn-usuarios').click(function() {
			var url = 'vista-admin-usuarios.php';
			peticionAjax(url);
		});
		$('#btn-proveedores').click(function() {
			var url = 'vista-admin-proveedores.php';
			peticionAjax(url);
		});
		$('#btn-medicinas').click(function() {
			var url = 'vista-admin-medicinas.php';
			peticionAjax(url);
		});
		$('#btn-reportes').click(function() {
			var url = 'vista-admin-reportes.php';
			peticionAjax(url);
		});

		function peticionAjax (url) {
			$.ajax({
				type: 'POST',
				url: url,
				success:function(data){
					$('#resp').html(data);
				}
			});
		}
	});
	</script>
</head>
<body>
	<header>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
		  		<div id="cabecera">		  			
		  			<h3>Bienvenido: <?php echo $_SESSION['nombre']; ?> </h3>
		  			<small>Sistema de administración clinica.</small>
		  		</div>
			</div>
			<div class="col-xs-6 col-md-4">
		  		<section id="cerrar">  
		  			<h5><a href="cerrar-sesion.php">Cerrar sesion</a></h5>
		  		</section>
			</div>
		</div>
	</header>
	<section>	
		<section id="actividades">
			<button type="button" id="btn-usuarios" class="btn btn-default" data-tooltip="Admin. de usuarios."><img src="img/usuarios.png" alt="usuarios" /></button>
			<button type="button" id="btn-proveedores" class="btn btn-default" data-tooltip="Admin. de proveedores."><img src="img/proveedores.png" alt="proveedores" /></button>
			<button type="button" id="btn-medicinas" class="btn btn-default" data-tooltip="Admin. de medicinas."><img src="img/medicinas.png" alt="medicinas" /></button>
			<button type="button" id="btn-reportes" class="btn btn-default" data-tooltip="Reporte de doctor."><img src="img/reportes.png" alt="medicinas" /></button>
		</section>
	</section>
	<hr>
	<section id="resp">
		
	</section>	
</body>
</html>
<!--Adminitra a los usuarios, medicinas y proveedores de las medicinas-->