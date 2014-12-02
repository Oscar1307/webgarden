<?php
	include ("controlador/cnivel.php");
	
?>
<center>
<form name="form1" action="home.php?acceso=101" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')"  >

	<table width="700" border="0">
        <tr>
        	<td colspan="2" align="center">
            	<h2> Editar nivel de curso</h2>
            </td>
            
        </tr>
        <tr>
        	<td colspan="2" align="center">
            	No.nivel:
                <?php echo $datos1[0]['idnivel']?>
            </td>
            
        </tr>
           
            
        
        <tr>
        	<td align="left">Nombre del nivel </td> 
        	 <td> <input type="text" placeholder="Nombre nivel" name="nombre" size="50" maxlength="50" required="required" value= "<?php echo $datos1[0]['nombre'] ?>" /></td>
             	 <input type="hidden" name="actu" value="actu"/>
                 <input type="hidden" name="idnivel" value="<?php echo $datos1[0]['idnivel']?>"     
          
        </td> 
        
        
        </tr>
    	<tr>
        	<td align="left">Descripci&oacute;n</td>
            
           <td> <textarea name="descripcion"  maxlength="1000" required="required" rows="4" cols="51"> <?php echo $datos1[0]['descripcion']?></textarea>
      </td>
        </tr>
        
       
        <tr>
        	<td colspan="2" align="center" >
                      <input type="button" onclick="location.href='home.php?acceso=101'" value="volver"/>
            	<input type="submit"  value="Editar"/>
            </td>
        </tr>
        
    </table>
</form>



<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('Desea eliminar?')">
  
  <div align="center" id="tabint">
    <table width="700" border="1" cellspacing="0" cellpadding="4">

      <tr>
        <th class="style1" align="center" width="80">No.nivel<input name="acceso" type="hidden" id="acceso" value="101" /></th>
   
        
         <th class="style1" align="center" width="120">Nombre nivel</th>
        <th class="style1" align="center" width="120">Descripci&oacute;n</th>
          <th class="style1" align="center" width="160">Editar</th>
      </tr>
 <?php 
 	//Select
	
		 //echo json_encode ($datos);
		for ($i=0; $i < count($datos); $i++){
	  ?>
        <tr>
          
		    <td class="style2" align="center"><input type="submit" name="del" value= <?php  echo $datos[$i]['idnivel'] ?>></td>
           
            <td class="style2" align="left"> <?php  echo $datos[$i]['nombre'] ?></td>  
           <td class="style2" align="left"> <?php  echo $datos[$i]['descripcion'] ?></td> 
         
           
      
            
            <td align="center"><a href="home.php?pr=<?php  echo $datos[$i]['idnivel'] ?>&acceso=101&up=34"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>
		
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


