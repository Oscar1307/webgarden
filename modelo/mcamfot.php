<?php

include("controlador/conexion.php");
class mcamfot {

    var $arr;

    function mcamfot() {
        
    }
    function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}

    

  //usuada 
    function selalum1($iddocumento) {
        $sql = "SELECT * from alumno where identificacion='" .$iddocumento. "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    //usuada 
    function camfot($rutaDestino , $idalumno) {
     $sql = "UPDATE alumno SET foto='".$rutaDestino."' WHERE identificacion ='".$idalumno."';";
        $this->cons($sql);
    }
}