<?php
	include ("controlador/cmarcaruta.php");
?>
<center>
<form name="form1" action="home.php?acceso=103" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')"  >

	<table width="700" border="0">
        <tr>
        	<td colspan="2" align="center">
            	<h2> Editar Marca de veh&iacute;culos de transporte </h2>
                
            </td>
            
        </tr>
         <tr>
        	<td colspan="2" align="center">
            	No.Marca de veh&iacute;culo:
                <?php echo $datos1[0]['idmarca']?>
            </td>
            
        </tr>
        <tr>
        	<td align="left">Nombre marca</td> 
        	 <td> <input type="text" placeholder="Nombre marca" name="nomarca" size="25" maxlength="50" required="required" value= "<?php echo $datos1[0]['nombre'] ?>"  /></td>
                  <input type="hidden" name="actu" value="actu"/>
                 <input type="hidden" name="idmarca" value="<?php echo $datos1[0]['idmarca']?>"  
          
        </td> 
        
        
        </tr>
    
          <tr>
        	<td colspan="2" align="center" >
                      <input type="button" onclick="location.href='home.php?acceso=103'" value="volver"/>
            	<input type="submit"  value="Editar"/>
            </td>
        </tr>
         
    </table>
</form>



<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('Desea eliminar?')">
  
  <div align="center" id="tabint">
    <table width="700" border="1" cellspacing="0" cellpadding="5">
       

 <tr>
        <th class="style1" align="center" width="80">No.Marca<input name="acceso" type="hidden" id="acceso" value="103" /></th>
   
        
         <th class="style1" align="center" width="120">Nombre</th>
            <th class="style1" align="center" width="160">Editar</th>
   
      </tr>
 <?php 
 	//Select
	
		 //echo json_encode ($datos);
		for ($i=0; $i < count($datos); $i++){
	  ?>
        <tr>
          
		    <td class="style2" align="center"><input type="submit" name="del" value= <?php  echo $datos[$i]['idmarca'] ?>></td>
           
        
           <td class="style2" align="left"> <?php  echo $datos[$i]['nombre'] ?></td> 
         
           
      
            
            <td align="center"><a href="home.php?pr=<?php  echo $datos[$i]['idmarca'] ?>&acceso=103&up=34"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>
		
        </tr>
      <?php  }  ?>
 
         <tr>
		    <td colspan=17 class="style2">Para eliminar presione el n&uacute;mero del c&oacute;digo.</td>
        </tr>
    </table>
    <p>&nbsp; </p>
  </div>
</form>

</center>


