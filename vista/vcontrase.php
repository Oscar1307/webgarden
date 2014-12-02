<?php
	include ("controlador/ccontrase.php");
        
	

?>

<center>
<form name="form1" action="" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')"  >

	<table width="700" border="0">
        <tr>
        	<td colspan="2" align="center">
            	<h2>Cambiar Contrase&ntilde;a</h2>
            </td>
            
        </tr>
        <tr>
        	<td align="left">Contrase&ntilde;a Actual</td>
        	<td><input type="password" title="" placeholder="Contrase&ntilde;a Actual" name="pass1" size="35" maxlength="30" required="required" maxlength="200" />
            
        </td> 
        
        
        </tr>
         <tr>
        	<td align="left">Nueva Contrase&ntilde;a </td>
        	<td><input type="password"  placeholder="Nueva Contrase&ntilde;a" name="pass2" size="35" maxlength="30" required="required" maxlength="200"/>
            
        </td> 
        
        
        </tr>
        <tr>
        	<td align="left">Repetir Nueva Contrase&ntilde;a </td>
        	<td><input type="password" title="Las Contrase&ntilde;as deben ser iguales " placeholder="Repetir Nueva Contrase&ntilde;a" name="pass3" size="35" maxlength="200" required="required" />
            
        </td> 
        
        
        </tr>
        
    	<tr>
        	<td colspan="2" align="center" height="30px">
            	<input type="submit"  value="Actualizar contrase&ntilde;a"   />
                <input type="button" onclick="location.href='home.php?pac=130'" value="Cancelar"/>
            </td>
        </tr>
      
    </table>
</form>


</center>