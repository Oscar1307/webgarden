<?php
include("controlador/conexion.php");

class mcontra{
    
    function mcontra(){}
    
    function cons($c){
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $conexionBD->ejeCon($c,1);
        
    }
    
    
    function infoper($idusuario){
       $sql = "select * from persona where identificacion='".$idusuario."' ";
       $conexionBD = new conexion();
       $conexionBD->conectarBD();
       $data = $conexionBD->ejeCon($sql, 0);
       return $data;  
    }
    
    function camcontra($idusuario, $pass2){
        $sql = "update persona set pass='".$pass2."' where identificacion ='".$idusuario."' ";
        $this->cons($sql);
    }
    
    
    
    
    
    
    
    
    
}




?>
