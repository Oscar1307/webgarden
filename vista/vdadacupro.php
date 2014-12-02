<?php
	include ("controlador/clistaruta.php");
	
?>
<center>


	<table width="700" border="1">
        <tr>
        	<td colspan="2" align="center">
            	<h2>Acudiente</h2>
            </td>
            
        </tr>
       
         
            
       
        <tr>
        	<td align="left">Nombres</td> 
        	 <td> <?php echo $docen[0]['prinombre'] ?>  <?php echo $docen[0]['segnombre'] ?> </td>
             	   
          
        
        
        
        </tr>
    	<tr>
        	<td align="left">Apellidos</td>
            
          <td> <?php echo $docen[0]['priapellido'] ?>  <?php echo $docen[0]['segapellido'] ?> </td>
        </tr>
       
       <tr>
        	<td align="left">telefono</td>
            
            <td> <?php echo $docen[0]['telefono'] ?></td>
        </tr>
         <tr>
        	<td align="left">Email</td>
        	 <td> <?php echo $docen[0]['email'] ?></td>
       </tr>
       <tr>
        	<td align="left">Direccion</td>
        	 <td> <?php echo $docen[0]['direccion'] ?></td>
       </tr>
     
        <tr>
        	<td colspan="2" align="center" >
                     <input type="button" onclick="location.href='home.php?acceso=138'" value="volver"/>
            	
            </td>
        </tr>
        
    </table>


</center>




