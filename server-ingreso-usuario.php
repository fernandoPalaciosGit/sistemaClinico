<?php
    require 'lib/Inter.php';
    $Y = new Inter();

    // Se relizarán 3 peticiones a la base de datos:
    // 1.- para checar nombre y apellido ingresado
    // 2.- para checar cedula
    // 3.- para checar nombre de usuario

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

?>
