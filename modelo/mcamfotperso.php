<?php

include("controlador/conexion.php");
class mcamfotperso {

    var $arr;

    function mcamfotperso() {
        
    }
    function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}

    

  //usuada 
    function selperso($iddocumento) {
        $sql = "SELECT * from persona where identificacion='" .$iddocumento. "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    //usuada 
    function camfotperso($rutaDestino , $idpersona) {
     $sql = "UPDATE persona SET foto='".$rutaDestino."' WHERE identificacion ='".$idpersona."';";
        $this->cons($sql);
    }
}
