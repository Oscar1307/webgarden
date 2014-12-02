<?php

include ("modelo/mnoveacu.php");
$ins = new mnove();



$idalumno = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$act = isset($_GET["act"]) ? $_GET["act"] : NULL;
$alum = isset($_GET["alum"]) ? $_GET["alum"] : NULL;



$alumno = $ins->alumno($idalumno);

$selnove = $ins->selnov($idalumno);
$selnove1 = $ins->selnov1($act);
?>
	
