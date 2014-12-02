<?php
include("controlador/cpersona.php");
?>

<form name="form1" method="get" action="">   
    <br>
    <br>
    <br>
    <label><h1>SELECCIONE CARGOS</h1></label>
    <table border="1" align="center" width="500">

      
        
        
            <tr>
                <th colspan="2"><?php echo $perfiperso[0]['prinombre'] . " " . $perfiperso[0]['priapellido']; ?></th>
            </tr>	
       
            
            
           
        <tr>
              
            <td align="center"><?php echo $perfiperso[0]['nombre']; ?></td>
             
            <td align="center">
                
             
           
          <a href="home.php?acceso=135&codigo=<?php echo $perfiperso[0]['idperxper']; ?>&activo=<?php echo $perfiperso[0]['activo']; ?>&cedula=<?php echo $cedula ?>&val=1">
                                                            
               <?php if($perfiperso[0]['activo']==1){ ?><image src="image/activa.png" height="25" width="25"><?php } ?>
               <?php if($perfiperso[0]['activo']==2){ ?><image src="image/desactiva.png" height="25" width="25"><?php } ?></a>
            
            </td>
        </tr>

        <tr>
            <td align="center"><?php echo $perfiperso[1]['nombre']; ?></td>
            <td align="center">
                
                
             
                
            <a href="home.php?acceso=135&codigo=<?php echo $perfiperso[1]['idperxper']; ?>&activo=<?php echo $perfiperso[1]['activo']; ?>&cedula=<?php echo $cedula ?>&val=3">
                                                            
               <?php if($perfiperso[1]['activo']==1){ ?><image src="image/activa.png" height="25" width="25"><?php } ?>
               <?php if($perfiperso[1]['activo']==2){ ?><image src="image/desactiva.png" height="25" width="25"><?php } ?></a>
            
            
            
            </td>
        </tr>


        <tr>
            <td align="center"><?php echo $perfiperso[2]['nombre']; ?></td>
            <td align="center">
                
                
           
            
             <a href="home.php?acceso=135&codigo=<?php echo $perfiperso[2]['idperxper']; ?>&activo=<?php echo $perfiperso[2]['activo']; ?>&cedula=<?php echo $cedula ?>&val=4">
             <?php if($perfiperso[2]['activo']==1){ ?><image src="image/activa.png" height="25" width="25"><?php } ?>
             <?php if($perfiperso[2]['activo']==2){ ?><image src="image/desactiva.png" height="25" width="25"><?php } ?></a>
             
            
            
            
            </td>
        </tr>

        <tr>
            <td align="center"><?php echo $perfiperso[3]['nombre']; ?></td>
            <td align="center">
                
              
               
                
               <a href="home.php?acceso=135&codigo=<?php echo $perfiperso[3]['idperxper']; ?>&activo=<?php echo $perfiperso[3]['activo']; ?>&cedula=<?php echo $cedula; ?>&val=5">                                              
               <?php if($perfiperso[3]['activo']==1){ ?><image src="image/activa.png" height="25" width="25"><?php } ?>
               <?php if($perfiperso[3]['activo']==2){ ?><image src="image/desactiva.png" height="25" width="25"><?php }?></a>
                 
            
            
            
            </td>
        </tr>
     
        <input type="hidden" name="cedula" value ="<?php echo $cedula; ?>">  
        <tr>
            <td colspan="2" align="center">
                
                <input type="button" value="Volver" onClick="location.href='home.php?acceso=113'">
                
            </td>
        
        </tr>
    </table>
</form>



