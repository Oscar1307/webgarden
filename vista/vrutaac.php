<?php
	include ("controlador/crutaac.php");
	
?>
<center>


	<table width="700" border="1">
        <tr>
        	<td colspan="2" align="center">
            	<h2>Ruta de transporte</h2>
            </td>
            
        </tr>
       
         
            
       
        <tr>
        	<td align="left">Placa del veh&iacute;culo</td> 
        	 <td> <?php echo $datos1[0]['placa'] ?> </td>
             	   
          
        
        
        
        </tr>
    	<tr>
        	<td align="left">N&uacute;mero de puestos</td>
            
           <td> <?php echo $datos1[0]['npuesto'] ?></td>
        </tr>
       
       <tr>
        	<td align="left">Modelo del veh&iacute;culo</td>
            
           <td> <?php echo $datos1[0]['modelo'] ?></td>
        </tr>
         <tr>
        	<td align="left">Marca del veh&iacute;culo</td>
        	 <td><?php echo $datos1[0]['marca']?></td>
       </tr>
       <tr>
        	<td align="left">Conductor</td>
                <td><?php echo $datos1[0]['nombre'] ?> <?php echo $datos1[0]['apellido'] ?> <br><img src='<?php echo $conduc[0]['foto'] ?>' width='100' height='110'/></td>
        	
       </tr>
        <tr>
        	<td align="left">Telefono</td>
                <td><?php echo $conduc[0]['telefono'] ?> </td>
        	
       </tr>
       <tr>
        	<td align="left">Email</td>
                <td><?php echo $conduc[0]['email'] ?> </td>
        	
       </tr>
        <tr>
        	<td colspan="2" align="center" >
                     <input type="button" onclick="location.href='home.php?acceso=123'" value="volver"/>
            	
            </td>
        </tr>
        
    </table>


</center>


