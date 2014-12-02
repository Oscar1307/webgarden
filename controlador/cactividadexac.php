<?php

include ("modelo/mactividadexac.php");
$ins = new mactividadex();
$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$act = isset($_GET["act"]) ? $_GET["act"] : NULL;
$cur = isset($_GET["cur"]) ? $_GET["cur"] : NULL;
$datos = $ins->selactividadex($pr);
$curso=$ins->selcurso($cur);
$docente=$ins->seldocente($curso[0]['identificacion']);
$curso1=$ins->selcurso($pr);
$datos1 = $ins->selactividadex1($act);
?>
	





