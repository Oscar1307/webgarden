<?php

include("modelo/mcamfotperso.php");
$ins = new mcamfotperso();
$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$imagen = isset($_FILES['files']['size']) ? $_FILES['files']['size'] : NULL;
$idpersona = isset($_POST["idpersona"]) ? $_POST["idpersona"] : NULL;



if ($imagen) {
    $rutaServidor = 'image';
    $rutaTemporal = $_FILES['files']['tmp_name'];
    $nombreFoto = $idpersona;
    $nombreFoto.= $_FILES['files']['name'];
    $rutaDestino = $rutaServidor . '/' . $nombreFoto;
    move_uploaded_file($rutaTemporal, $rutaDestino);
    if ($rutaDestino && $idpersona) {
        $ins->camfotperso($rutaDestino, $idpersona);
         ?>
        <script>
            alert("Foto cambiada");
            location.href = 'home.php?acceso=113';
        </script>

        <?php
    }
}




$datospersona = $ins->selperso($pr);