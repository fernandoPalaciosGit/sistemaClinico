<?php
	require 'lib/Inter.php';
	$Y = new Inter();

	// Se cachan los datos del formulario del inicio de sesion
	$usuario = $_POST['usuario'];
	$contra	 = $_POST['contrasena'];

	// se realiza la busqueda del usuario ala base de datos
	$consultaUser = $Y -> BuscarUsuario($usuario);
	$cont = 0;
	foreach ($consultaUser as $cu) { $cont++; }

	// Una vez hecho la peticion se verifica si la bd
	// regreso datos y si las contraseñas coinciden con la
	// que ingreso el usuario
	if($cont == 0){
		echo "Usuario no encontrado.";
	}else if ($contra != $cu['contrasena']) {
		echo "Contraseña incorrecta";
	}else{
		// si todo salio bien se guardan los
		// siguientes datos traidos de la bd en variables
		$nombre = $cu['nombre'];
		$apellido = $cu['apellido'];
		$id = $cu['idUsuario'];
		$tipoUsuario = $cu['tipoUser'];
		// se inicia la session
		session_start();
		// los datos guardados en variables se almacenan
		// en variables de tipo session para que no sean borrados
		// al recargar la pagina
		$_SESSION['activo'] = true;
		$_SESSION['nombre'] = $nombre;
		$_SESSION['apellido'] = $apellido;
		$_SESSION['id'] = $id;
		$_SESSION['tipoUsuario'] = $tipoUsuario;

		// este indica a donde sera redirigido el usuario
		// de pendiendo el tipo de usuario
		// 0.- admin
		// 1.- doctor
		// 2.- psicolog
		// 3.- enfermera
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
