<?php

include("modelo/mlistaalumnoacu.php");
$ins = new malumno();

$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;

$idacudiente = isset($_SESSION["idUser"]) ? $_SESSION["idUser"] : NULL;


//echo $imagen;









$datos = $ins->selalum($idacudiente);
$datosalumno = $ins->selalum1($pr);



$datoscur = $datosalumno[0]['idcurso'];
$datoscur2 = $ins->selcurso($datoscur);
$datosniv = $datoscur2[0]['idnivel'];
$datosniv2 = $ins->selnivel($datosniv);
?>