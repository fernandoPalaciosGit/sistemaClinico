 <?php
require 'Conexion.php';

class Inter extends Conexion {

    public function __construct() {
        parent::__construct();
    }
    // Funcion para agregar un nuevo usuario ala bd
    public function AgregarNuevoUsuario($nombre,$apellidos,$correo,$nombreUsuario,$contrasena,$tipoUsuario,$fecha){
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('clinica');
        $rSQL = $this -> getConsulta('INSERT INTO usuario(nombre,apellidos,correo,nombreUsuario,contrasena,tipoUsuario,fecha)  VALUES("'.$nombre.'","'.$apellidos.'","'.$correo.'","'.$nombreUsuario.'","'.$contrasena.'","'.$tipoUsuario.'","'.$fecha.'")');

    }
    // Funcion que permitira traer todos los datos de un
    // usuario en particular usando el nombre usuario
    public function BuscarUsuario($nombreUsuario) {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('clinica');
        $rSQL = $this->getConsulta('select * from usuario where nombreUsuario ="'.$nombreUsuario.'" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }
    // Esta funcion permitira hacer una busqueda de
    // usuario haciendo referencia ala cedula
    public function BuscarUsuarioCedula($cedula) {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('clinica');
        $rSQL = $this->getConsulta('select * from usuario where cedula ="'.$cedula.'" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }
    // Esta funcion permira hacer una busqueda de
    // de un usuario con base al nombre y apellido ingresados
    public function BuscarUsuarioNombreApellido($nombre, $apellido) {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('clinica');
        $rSQL = $this->getConsulta('select * from usuario where nombre ="'.$cedula.'" and apellido = "'.$apellido.'" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }
    // Esta funcion permitira hacer una busqueda de
    // de usuario por medio del nombre de usuario
    public function BuscarUsuarioNombreUsuario($nombreUsuario) {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBaseDatos('clinica');
        $rSQL = $this->getConsulta('select * from usuario where nombreUsuario ="'.$nombreUsuario.'" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }
}
?>
