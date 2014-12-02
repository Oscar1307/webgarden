<?php
include("controlador/conexion.php");

class mcontra{
    
    function mcontra(){}
    
    
    function recupe($ndocapre){
        $sql ="select prinombre, priapellido, pass, email from persona where identificacion ='".$ndocapre."' ";
        	$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data=$conexionBD->ejeCon($sql,0);
		return $data;
        
        
        
    }
      
    
}

?>
