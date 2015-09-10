<?php
    require 'lib/Inter.php';
    $Y = new Inter();

    $tipoUser = $_POST['selec-tipoUsuario'];

    switch ($tipoUser) {
        case 'Doctor':
            $tipo = 1;
            break;
        case 'Psicologo':
            $tipo = 2;
            break;
        case 'Enfermera':
            $tipo = 3;
            break;
    }

    $usuarios = $Y -> BuscarUsuarioFiltro($tipo);
    $cont = 0;

    $tabla="<table class='table table-bordered'>
               <tr>
                   <td>Nombre</td>
                   <td>Apellidos</td>
                   <td>Edad</td>
                   <td>Especialidad</td>
                   <td>Correo</td>
                   <td>Telefono</td>
                   <td>Cedula</td>
               </tr>";
           foreach ($usuarios as $us) {
               $cont++;
               $tabla.="<tr>
                           <td>".$us['nombre']."</td>
                           <td>".utf8_encode($us['apellido'])."</td>
                           <td>".utf8_encode($us['edad'])."</td>
                           <td>".utf8_encode($us['especialidad'])."</td>
                           <td>".utf8_encode($us['correo'])."</td>
                           <td>".utf8_encode($us['telefono'])."</td>
                           <td>".utf8_encode($us['cedula'])."</td>
                       </tr>";
           }
           $tabla.='</table>';
    if($cont == 0){
        echo 10;
    }else{
        echo $tabla;
    }



// <td><a href=\"#\" onclick=\"cargar('#tablaelim','cachadatos_admin.php?accion=1&id=".utf8_encode($mt_seleccion['IDTUTORES'])."');\" >Eliminar</a></td>

?>
