<?php

include("controlador/conexion.php");

class mcursoactivi {

    function mcursoactivi() {
        
    }

    function selcursoactividad($docente) {
        $sql = "select curso.idcurso as numcurso, curso.nombre as curso, nivel.nombre as nivel from curso inner join nivel on curso.idnivel=nivel.idnivel where idpersona = '" . $docente . "'";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function selactividos($curso, $docente){
        $sql = "select actividadex.nombre as actividad, actividadex.descripcion as descrip, curso.nombre as cursonom from actividadex inner join curso on actividadex.idcurso = curso.idcurso where curso.idcurso ='".$curso."' and curso.idpersona = '".$docente."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
}

?>
