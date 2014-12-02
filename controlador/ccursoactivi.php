<?php

include("modelo/mcursoactivi.php");

$ins = new mcursoactivi();

$docente = isset($_SESSION["idUser"]) ? $_SESSION["idUser"]:NULL;
$curso = isset($_GET['curso']) ? $_GET['curso']:NULL;


$cursosprof = $ins->selcursoactividad($docente);

$extracu = $ins->selactividos($curso, $docente);


?>
