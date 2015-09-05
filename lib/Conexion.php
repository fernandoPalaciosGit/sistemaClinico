<?php

class Conexion {

    private $servidor;
    private $user;
    private $password;
    private $conexion;

    public function __construct() {
       $this->servidor = 'localhost';
       $this->user = 'root';
       $this->password = 'root';
    }

    public function abrirConexion() {
        $this->conexion = mysql_connect($this->servidor, $this->user, $this->password) or die('no se conecto a la base de datos');
    }

    public function cerrarConexion() {
        mysql_close($this->conexion);
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function seleccionarBaseDatos($bd) {
        mysql_select_db($bd, $this->conexion);
    }

    public function setConsulta($query) {
        mysql_query($query, $this->conexion);
        echo mysql_error();
    }

    public function getConsulta($query) {
        return mysql_query($query, $this->conexion);
    }

}

?>
