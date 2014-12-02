<?php

include("modelo/mcamfot.php");
$ins = new mcamfot();
$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$imagen = isset($_FILES['files']['size']) ? $_FILES['files']['size'] : NULL;
$idalumno = isset($_POST["idalumno"]) ? $_POST["idalumno"] : NULL;

if ($imagen) {
    $rutaServidor = 'image';
    $rutaTemporal = $_FILES['files']['tmp_name'];
    $nombreFoto = $idalumno;
    $nombreFoto.= $_FILES['files']['name'];
    $rutaDestino = $rutaServidor . '/' . $nombreFoto;
    move_uploaded_file($rutaTemporal, $rutaDestino);
    if ($rutaDestino && $idalumno) {
        $ins->camfot($rutaDestino, $idalumno);
         ?>
        <script>
            alert("Foto cambiada");
            location.href = 'home.php?acceso=109';
        </script>

        <?php
    }
}




$datosalumno = $ins->selalum1($pr);
