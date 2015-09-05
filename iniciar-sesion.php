<?php 
	require 'lib/Inter.php';
	$Y = new Inter();

	$usuario = $_POST['usuario'];
	$contra	 = $_POST['contrasena'];

	$consultaUser = $Y -> BuscarUsuario($usuario);
	$cont = 0;

	foreach ($consultaUser as $cu) {
		$cont++;
	}
	
	if($cont == 0){
		echo "Usuario no encontrado.";
	}else if ($contra != $cu['contrasena']) {
		echo "Contraseña incorrecta";
	}else{

		$nombre = $cu['nombre'];
		$apellido = $cu['apellido'];
		$id = $cu['idUsuario'];
		$tipoUsuario = $cu['tipoUser'];

		session_start();

		$_SESSION['activo'] = true;
		$_SESSION['nombre'] = $nombre;
		$_SESSION['apellido'] = $apellido;
		$_SESSION['id'] = $id;
		$_SESSION['tipoUsuario'] = $tipoUsuario;

		switch ($tipoUser) {
			case 0:
				echo 0;				
			break;
			
			default:
				# code...
			break;
		}
	}
	
?>