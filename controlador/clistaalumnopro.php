<?php

include("modelo/mlistaalumnopro.php");
$ins = new malumno();

$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;

$idacudiente = isset($_SESSION["idUser"]) ? $_SESSION["idUser"] : NULL;
$perfil = isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : NULL;

//echo $imagen;









 $datos = $ins->selalumos();


$datosalumno = $ins->selalum1($pr);




?>