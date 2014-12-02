<?php

   include("modelo/mactua.php");
	//include("modelo/mpagina.php");
	
	$ins = new mactua();
$idusuario = isset($_SESSION["idUser"]) ? $_SESSION["idUser"]:NULL;

        $tipdocu = isset($_POST["tipdocu"]) ? $_POST["tipdocu"]:NULL;
	$codusu = isset($_POST["codusu"]) ? $_POST["codusu"]:NULL;
	$prinomb = isset($_POST["prinomb"]) ? $_POST["prinomb"]:NULL;
	$segnomb = isset($_POST["segnomb"]) ? $_POST["segnomb"]:NULL;
	$priapellido = isset($_POST["priapellido"]) ? $_POST["priapellido"]:NULL;
	$segapellido = isset($_POST["segapellido"]) ? $_POST["segapellido"]:NULL;
	$genero = isset($_POST["genero"]) ? $_POST["genero"]:NULL;
	$direcc = isset($_POST["direcc"]) ? $_POST["direcc"]:NULL;
	$telef = isset($_POST["telef"]) ? $_POST["telef"]:NULL;
	$email = isset($_POST["email"]) ? $_POST["email"]:NULL;
        $volver = isset($_POST["volver"]) ? $_POST["volver"]:NULL;
        
	
        if($tipdocu && $codusu && $prinomb && $segnomb && $priapellido && $segapellido && $genero && $direcc && $telef && $email && !$volver){
            ?>
<script>
    
    alert("Sus datos se han actualizado con exito.");
    location.href='home.php';
   
</script>


           <?php
            
            
        
        
	$ins->updpersona($tipdocu, $prinomb, $segnomb, $priapellido, $segapellido, $genero, $direcc, $telef, $email, $codusu);



        }


        if($volver){
            
            ?>
            <script>
    
                location.href='home.php';
   
           </script>


            <?php
            
            
        }

        
         
            
            
            
        


	
	
	$tipo = $ins->selcoddocu();
	
	$gene = $ins->selgene();
        
        
        $peredit=$ins->selpersototal($idusuario);
     
	

	
	?>






















