<?php
	include ("controlador/cnivel.php");
?>
<center>
<form name="form1" action="" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')"  >

	<table width="700" border="0">
        <tr>
        	<td colspan="2" align="center">
            	<h2>Niveles de cursos</h2>
            </td>
            
        </tr>
        <tr>
        	<td align="left">Nombre nivel</td>
            
           <td> <input type="text" placeholder="Nombre nivel" name="nombre" size="50" maxlength="50" required="required"  /></td>
        </tr>
        <tr>
        	<td align="left">Descripci&oacute;n</td> 
        	 <td><textarea name="descripcion" maxlength="1000" required="required" rows="4" cols="51"></textarea></td>

       
        </tr>
    	
        <tr>
        	<td colspan="2" align="center" >
                    <input type="reset" value="limpiar" />
            	<input type="submit"  value="Guardar"   />
            </td>
        </tr>
         
    </table>
</form>



<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('Desea eliminar?')">
  
  <div align="center" id="tabint">
    <table width="700px" border="1" cellspacing="0" cellpadding="5">
       

 <tr>
        <th class="style1" align="center" width="80px">No.nivel<input name="acceso" type="hidden" id="acceso" value="101" /></th>
   
        
         <th class="style1" align="center" width="120px">Nombre nivel</th>
        <th class="style1" align="center" width="320px">Descripci&oacute;n</th>
          <th class="style1" align="center" width="160px">Editar</th>
      </tr>
 <?php 
 	//Select
	
		 //echo json_encode ($datos);
		for ($i=0; $i < count($datos); $i++){
	  ?>
        <tr>
          
		    <td class="style2" align="center"><input type="submit" name="del" value= <?php  echo $datos[$i]['idnivel'] ?>></td>
           
            <td class="style2" align="left"> <?php  echo $datos[$i]['nombre'] ?></td>  
           <td class="style2" align="left" width="160px"> <?php  echo $datos[$i]['descripcion'] ?></td> 
         
           
      
            
            <td align="center"><a href="home.php?pr=<?php  echo $datos[$i]['idnivel'] ?>&acceso=101&up=34"><img border=0 src="image/editar.png" width="25" height="25" /></a></td>
		
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


