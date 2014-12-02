<?php

include("controlador/conexion.php");


class mlistanovedad{
    
    function mlistanovedad(){}
    
    
    
    function selecnovedades($docente){
        $sql = "select curso.nombre as curso, alumno.prinombre, alumno.priapellido, novedad.titulo, novedad.descripcion, novedad.fecha from curso
            inner join persona on curso.idpersona = persona.identificacion inner join novedad on persona.identificacion = novedad.iddocente inner join alumno on novedad.idalumno = alumno.identificacion where novedad.iddocente='".$docente."'";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
}




?>
