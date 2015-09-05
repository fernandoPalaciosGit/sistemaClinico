<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
		nav{ padding:0;	width: 80%;	text-align: center;	margin: 0.5em auto;	}
		span{ with 80%; text-align: center; }
		#resp-form{border: thin solid;}
	</style>
	<script>
		$(function(){
			$('#btn-add-usuario').click(function() {
				var url = 'form-usuario.php';
				peticionAjax(url);
			});

			function peticionAjax(url){
				$.ajax({
					type: 'POST',
					url: url,
					success: function(data){
						$('#resp-form').html(data);
					}
				});
			}
		});
	</script>
</head>
<body>
	<span><p>Administración de usuarios</p></span>
	<nav>
		<button type="button" id="btn-add-usuario" class="btn btn-default" data-tooltip="Agregar"><img src="img/adduser.png" alt="usuarios" /></button>
		<button type="button" id="btn-add-usuario" class="btn btn-default" data-tooltip="Ver"><img src="img/viewuser.png" alt="usuarios" /></button>
		<button type="button" id="btn-add-usuario" class="btn btn-default" data-tooltip="Actualizar"><img src="img/updateuser.png" alt="usuarios" /></button>
		<button type="button" id="btn-add-usuario" class="btn btn-default" data-tooltip="Eliminar"><img src="img/deleteuser.png" alt="usuarios" /></button>
	</nav>
	<section id="resp-form">
		<form action="#">
			
		</form>
	</section>
</body>
</html>