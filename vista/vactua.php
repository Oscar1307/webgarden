<?php

include("controlador/cactua.php");


?>
<link rel="stylesheet" type="text/css" href="css/estilo.css" >





<form name="form1" method="post" action="">

<table width="400" align="center" cellpadding="6">







<tr>
<td colspan="5" align="center">EDITAR USUARIO</td>

</tr>


<tr>
<td align="center">Tipo de documento:</td>

<td>
<select name = "tipdocu">
<?php

for($a=0;$a<count($tipo);$a++){
	
	
?>

<option <?php 
 if($peredit[0]['tipodoc']==$tipo[$a]['idvalor']) echo "SELECTED";?> value="<?php echo $tipo[$a]['idvalor'] ?>">
 <?php echo $tipo[$a]['nombre'] ;?></option>

<?php } ?>
</select>
</td>


</tr>


<tr><td align="center">Numero de documento:</td>
<td><input type="hidden" name="codusu" value="<?php echo $peredit[0]['identificacion'] ?>"><?php echo $peredit[0]['identificacion'] ?></td></tr>




<tr>
<td align="center">Primer nombre:</td>
<td><input type="text" name="prinomb" required="required" value="<?php echo $peredit[0]['prinombre'] ?>" maxlength="15"></td>

</tr>


<tr><td align="center">Segundo nombre:</td>
<td><input type="text" name="segnomb" value="<?php echo $peredit[0]['segnombre'] ?>" maxlength="20"/></td></tr>





<tr>
<td align="center">Primer apellido:</td>
<td><input type="text" name="priapellido" required="required" value="<?php echo $peredit[0]['priapellido'] ?>" maxlength="15"/></td>


</tr>



<tr><td align="center">Segundo apellido:</td>
<td><input type="text" name="segapellido" value="<?php echo $peredit[0]['segapellido'] ?>" maxlength="20"/></td></tr>





<tr>

<td align="center">Genero:</td>
<td>

<select name = "genero">
<?php

for($b=0;$b<count($gene);$b++){
	
	
?>

    
    
<option  <?php
    
if($peredit[0]['idvalor']==$gene[$b]['idvalor']) echo "SELECTED"; ?>  value="<?php echo $gene[$b]['idvalor']?>">
<?php echo $gene[$b]['nombre'] ;?>
</option>







<?php }  ?>
</select>





</td>




</tr>

<tr>

<td align="center">Telefono:</td>
<td><input type="text" name="telef" required="required" value="<?php echo $peredit[0]['telefono'] ?>" maxlength="15" pattern="[0-9]{1,15}" title="Este campo solo admite n&uacute;meros" /></td>

</tr>




<tr><td align="center">Direccion:</td>
<td><input type="text" name="direcc" required="required" value="<?php echo $peredit[0]['direccion'] ?>" maxlength="15"/></td></tr>
<tr><td align="center">E-mail:</td>
<td><input type="text" name="email" required="required" value="<?php echo $peredit[0]['email'] ?>" maxlength="100"/></td></tr>

<tr>
<td colspan="5" align="center">
  
    <input type = "Submit" name="Submit" value = 'ACTUALIZAR' />
    <input type="hidden" name="actua" />
    <input type="hidden" name="codi" value="<?php echo $peredit[0]['identificacion'] ?>" />
    <input type = 'submit' name ="volver" value = 'CANCELAR' />
 
</td>
</tr>



</table>
</form>