<?php
	include ("modelo/mrutaac.php");  
        
	$ins = new mruta();
     $rut = isset($_GET["rut"]) ? $_GET["rut"] : NULL;
      $datos1 =$ins->selruta($rut);
      $conduc=$ins->selconduc($datos1[0]['idconductor']);
      

   
	
?>
	
	




