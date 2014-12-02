<?php

include("controlador/ccurso.php");
/*
echo $cursoact[0]['idcurso'];   
echo "</br>";  
echo $cursoact[0]['nombre'];
echo "</br>";  
echo $cursoact[0]['idnivel'];
echo "</br>";  
echo $cursoact[0]['idpersona'];
*/


?>




<form name="form1" method="post" action="home.php?acceso=106">

<table border="1" width = "600" align="center">
<tr>
<td colspan = "4" align = "center">EDITAR CURSO<input type="hidden" value="actua" name="actua" /><input type="hidden" name="codigo" value="<?php echo $cursoact[0]['idcurso']; ?>" /></td>
</tr>

<tr>

<td align = "center">Nombre:</td>
<td>


<input type= "text" name = "nombre" value="<?php echo $cursoact[0]['nombre']; ?>" maxlength='50'/>



</td>



<td align = "center">Nivel:</td>
<td>

<select name = "idnivel">

<?php
for($a=0;$a<count($niv);$a++){
?>
<option <?php if($cursoact[0]['idnivel']==$niv[$a]['idnivel']) echo "SELECTED";?> value = "<?php echo $niv[$a]['idnivel'] ?>"><?php echo $niv[$a]['nombre']; ?></option>

<?php } ?>

</select>

</td>



</tr>
<tr>

<td align = "center">Id director de curso:</td>
<td>

<select name="idpersona">

<?php
for($d=0; $d<count($selper);$d++){
?>

<option <?php if($cursoact[0]['idpersona']==$selper[$d]['id']) echo "SELECTED"; ?> value="<?php echo $selper[$d]['id'] ?>"><?php echo $selper[$d]['id']." ".$selper[$d]['nombre']." ".$selper[$d]['apellido'] ?>  

<?php } ?>


</select>






</td>
</tr>






<tr>
<td colspan = "4" align = "center">


<input type = 'button' value = 'VOLVER' onclick="location.href='home.php?acceso=106'" />

<input type = 'submit' value = 'ACTUALIZAR'/>

<input type = 'button' value = 'CANCELAR' onclick="location.href='home.php'"/>




</td>
</tr>

</table>

</form>




<br>

<br>
<form name ="form2" method = "GET" action = "" onSubmit="return confirm('Desea eliminar el curso?')">

<table border = "1" width = "700" align="center">
<tr>

<th>IDCURSO</th>
<th>EDITAR</th>
<th>CURSO</th>
<th>PROFESOR</th>
<th>INFORMACION</th>

</tr>

<?php
for($a=0;$a<count($sele);$a++){

?>
<tr>

<td align = "center"><?php echo $sele[$a]["idcurso"]?></td>
<td align = "center"><a href="home.php?edit=<?php echo $sele[$a]["idcurso"]?>&acceso=106"><img border = 0 src="image/editar.png"width = "20" height = "20" /></a></td>
<td align = "center"><?php echo $sele[$a]["nombre"]?></td>
<td align = "center"><?php  echo $sele[$a]["prinombre"]." ".$sele[$a]["priapellido"]?></td>
<td align = "center"><a href="home.php?acceso=108&revi=<?php echo $sele[$a]["idcurso"]?>"><img src="image/rubik.png" width = "20" height = "20"></td>


</tr>

<?php } ?>


<tr>
    <td colspan="6">Para eliminar, presione el n&uacute;mero del c&oacute;digo.</td>
</tr>



</table>
</form>


