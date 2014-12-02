<?php
include("modelo/mlistacursos.php");

$ins = new mlistacursos();

$docente = isset($_SESSION["idUser"]) ? $_SESSION["idUser"]:NULL;
$idcurso = isset($_GET["idcurso"]) ? $_GET["idcurso"]:NULL;



$listacurso = $ins->listadecursos();


//consulta para alumos de todos los cursos y los alumnos de mis cursos
$listalumno = $ins->listadelumnos($idcurso);

$nombrecurso = $ins->selecurso($idcurso);

$milista = $ins->milista($docente);

?>