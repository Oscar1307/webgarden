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




<form name="form1" method="post" action="home.php?acceso=106" >

<table width = "600" align="center" cellpadding="6">
<tr>
<th colspan = "4" align = "center" ><h2>EDITAR CURSO</h2><input type="hidden" value="actua" name="actua" /><input type="hidden" name="codigo" value="<?php echo $cursoact[0]['idcurso']; ?>" /></th>
</tr>

<tr>

<td align = "center">Nombre:</td>
<td>


<input type= "text" name = "nombre" value="<?php echo $cursoact[0]['nombre']; ?>" maxlength='50' size="27"/>



</td>



<td align = "center" rowspan="2">Nivel:


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








