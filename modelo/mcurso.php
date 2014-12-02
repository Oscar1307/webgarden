<?php
    include("controlador/conexion.php");
	
	
class mcurso{
	var $arr;
	
	function mcurso(){}
	
	function inscurso($nombre, $idnivel, $idpersona){
		$sql ="insert into curso(nombre, idnivel, idpersona) values('".$nombre."', '".$idnivel."', '".$idpersona."');";
		$this->cons($sql);
		
	}
	
	
	function selcurso(){
		$sql = "select curso.idcurso, curso.nombre, persona.prinombre, persona.priapellido, nivel.nombre as niv from curso inner join persona on curso.idpersona = persona.identificacion
                         inner join nivel on curso.idnivel = nivel.idnivel;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
		
	}
	
	
	function updcurso($codigo, $nombre, $idnivel, $idpersona){
		$sql = "UPDATE curso SET nombre='".$nombre."', idnivel='".$idnivel."', idpersona='".$idpersona."' WHERE
		idcurso = '".$codigo."';";
		$this->cons($sql);
		
		
	}
	
	
	function delcurso($idcurso){
		$sql = "delete from curso where idcurso='".$idcurso."';";
		$this->cons($sql);
		
		
	}

	function cons($c){
	    $conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
			
		
	}
	
	function selnivel(){
	    $sql =	"select idnivel, nombre from nivel;";
	    $conexionBD = new conexion();
	    $conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;	
	}
	
	function selnom($valor){
	   $sql = "select nivel.idnivel as idniv,nivel.nombre as noniv from nivel inner join curso on nivel.idnivel = curso.idnivel where curso.idnivel ='".$valor."';";
	   $conexionBD = new conexion();
	   $conexionBD->conectarBD();
	   $data = $conexionBD->ejeCon($sql,0);
	   return $data;
	
	
	}
	
	function selper(){
		$sql = "select persona.identificacion as id, persona.prinombre as nombre, persona.priapellido as apellido from persona inner join perxper on persona.identificacion = perxper.identificacion where perxper.perfil = 3 and perxper.activo = 1;";
		$conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data;
		
	}
	
	function selcursoact($idcurso){
       $sql = "select idcurso, nombre, idnivel, idpersona from curso where idcurso='".$idcurso."';";
		$conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data;	
	
	
	}
	
	
	
	/*function selecalum($idcurso){
		$sql= "select identificacion, prinombre, priapellido, desenf, retri from alumno inner join curso on alumno.idcurso = curso.idcurso where curso.idcurso='".$idcurso."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
		 echo json_encode($data);
	}*/
	
	
	function selnombreprof(){
		$sql = "select identificacion, prinombre, priapellido from persona;";
		$conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data;	
		
	}
	
	function selalum($elim){
	    $sql = "select * from alumno where idcurso ='".$elim."';"; 
	    $conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data;
	}
        
        function validapersona($elim){
            $sql = "select curso.idcurso, persona.identificacion from curso inner join persona on curso.idpersona = persona.identificacion where curso.idcurso='".$elim."';";
            $conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data;
        }
        
         function validactividadex($elim){
            $sql = "select actividadex.idactividadex, curso.idcurso from curso inner join actividadex on curso.idcurso = actividadex.idcurso where curso.idcurso='".$elim."'";
            $conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data; 
        }
        
        
        function selactivi($revi){
            $sql = "select actividadex.nombre as activi, actividadex.descripcion, persona.prinombre, persona.priapellido, curso.nombre from actividadex inner join curso on
actividadex.idcurso =  curso.idcurso inner join persona on curso.idpersona = persona.identificacion where curso.idcurso='".$revi."';";
            $conexionBD = new conexion();
	    $conexionBD->conectarBD();
	    $data = $conexionBD->ejeCon($sql,0);
	    return $data;
        }
        
        
        
}




?>