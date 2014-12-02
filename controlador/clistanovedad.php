<?php

include("modelo/mlistanovedad.php");

$ins = new mlistanovedad();


$docente = isset($_SESSION["idUser"]) ? $_SESSION["idUser"]:NULL;

$novedades = $ins->selecnovedades($docente);


?>
