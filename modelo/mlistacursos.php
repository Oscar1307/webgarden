<?php
include("controlador/conexion.php");

class mlistacursos{
    
    function mlistacursos(){}
    
    
    
    function listadecursos(){
        $sql = "select curso.idcurso as idcurso, curso.nombre as curso, nivel.nombre as nivel from curso inner join nivel on nivel.idnivel = curso.idnivel";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    }
    
    function listadelumnos($curso){
        $sql= "select alu.identificacion,alu.foto,alu.direccion, alu.prinombre,alu.priapellido,val1.nombre as rh ,val2.nombre as grupos from alumno as alu inner join curso as cur on alu.idcurso=cur.idcurso inner join valor as val1 on alu.rh=val1.idvalor inner join valor as val2 on alu.gruposan=val2.idvalor where alu.idcurso = '".$curso."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    }
   
    function selecurso($curso){
        $sql = "select nombre from curso where idcurso = '".$curso."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
    
    function milista($docente){
        $sql = "select curso.nombre as curso, curso.idcurso as id , nivel.nombre as nivel from curso inner join nivel on curso.idnivel = nivel.idnivel where curso.idpersona = '".$docente."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    }
    
    
    
}

?>