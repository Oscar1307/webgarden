<?php

include("controlador/ccontra.php");

?>



<body>
    

    <br><br><br><br><br><br>
    <?php
		if (!$datpass){
	?>
    <form id="form1" name="form1" method="post" action="">
        <table width="700"  align="center" class="Table">
            <tr>
            	<td align="left" colspan="2"><h1>Paso 1</h1></td>
            </tr>
            <tr>
                <td align="left">Ingrese el n&uacute;mero de su documento de identidad:</td>
              <td align="right">
                  <input name="ndocapre" type="text" id="CampoTxt" size="21" maxlength="11" pattern="[0-9]{1,11}" title="Este campo solo admite n&uacute;meros"/>
                <input type="submit" value="Verificar" />
                <a href="index.php" target="_self"><input type="button"  value="Volver" /> </a>
                </td>
            </tr>   
        </table>
    </form>
<?php


                }else{
                    
                 ?>
    <table width="700"  align="center" class="Table">
        <tr>
            <td>
                <h1>Paso 2</h1>
            </td>
        </tr>
        
        <tr>
            <td>
                <?php
                    $correo = $datpass[0]['email'];
                    $pass = $datpass[0]['pass'];
                    $nombre = $datpass[0]['prinombre'];
                    $apellido = $datpass[0]['priapellido']; 
                    $asunto = "Recuperacion de contraseña";
                    $contenido = "Estimado Señor ".$nombre." ".$apellido.".<br> Su contraseña es: ".$pass.". <br> APLICACION WEBGARDEN";
                    
                    
                    mail($correo, $asunto, $contenido);
                    $em = substr($datpass[0]['email'],0,4)."*******".substr($datpass[0]['email'],strpos($datpass[0]['email'],"@"),5)."***.***.***"; 
                    ?>
                   Se&ntilde;or(a): <?php echo $nombre." ".$apellido.". <br>"?> &nbsp; Su contrase&ntilde;a ha sido enviada al correo: <?php echo $em; ?>  
                    <br>
                    <br>
                    <br>
                    <a href="index.php" target="_self"><input type="button"  value="Inicio" /> </a>
                
                
            </td>
        </tr>
        
    </table>
    
<?php                    
        }
?>

</body>