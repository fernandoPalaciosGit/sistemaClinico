<?php
    require 'lib/Inter.php';
    $Y = new Inter();

    // Se relizarán 3 peticiones a la base de datos:
    // 1.- para checar nombre y apellido ingresado
    // 2.- para checar cedula
    // 3.- para checar nombre de usuario

    // Se cachan los datos enviados desde el form-admin-usuario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $especialidad = $_POST['especialidad'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $contrasena = $_POST['nombreUsuario'];
    $tipousuario = $_POST['selec-tipoUsuario'];

    // Se realiza la peticiones en el orden de arriba
    // para validar de que los datos no se repitan
    $nombreUsuarioConsult = $Y -> BuscarUsuarioNombreUsuario($nombreUsuario);
    $cont1 = 0;
    foreach ($nombreUsuarioConsult as $nu) { $cont1++; }
    if($cont1 > 0){ echo 1; }

    $verificarCedulaConsult = $Y -> BuscarUsuarioCedula($cedula);
    $cont2 = 0;
    foreach ($verificarCedulaConsult as $vc) { $cont2++; }
    if( $cont2 > 0){ echo 2;}

    $nombreApellido = $Y -> BuscarUsuarioNombreApellido($nombre, $apellido);
    $cont3 = 0;
    foreach ($nombreApellido as $na) { $cont3++;   }
    if($cont3 > 0){ echo 3;}

    // Validamos que ningun contador se haya incrementado
    // para constar de que no existe algun error
    if( $cont1 == 0 && $cont2 == 0 && $cont3 == 0){

    }



?>
