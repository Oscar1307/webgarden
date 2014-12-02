<?php

include("modelo/mlistaalumnonove.php");
$ins = new malumno();
$del = isset($_GET["del"]) ? $_GET["del"] : NULL;
$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
if ($del) {
    $regis = $ins->selnovedad($del);
    $countR1 = count($regis);
    if ($countR1 <> 0) {
        ?>
        <script>
            alert("El alumno no se puede eliminar Porque tiene novedades asignadas");

        </script>
        <?php

    } else {

        $ins->delalumno($del);
        ?>
        <script>
            alert("Alumno eliminado del sistema ");
            location.href = 'home.php?acceso=109';
        </script>

        <?php

    }
}
$idalumno = isset($_POST["idalumno"]) ? $_POST["idalumno"] : NULL;
$tipdocu = isset($_POST["tdocapre"]) ? $_POST["tdocapre"] : NULL;
$ndocapre = isset($_POST["ndocapre"]) ? $_POST["ndocapre"] : NULL;
$prinombre = isset($_POST["prinombre"]) ? $_POST["prinombre"] : NULL;
$segnombre = isset($_POST["segnombre"]) ? $_POST["segnombre"] : NULL;
$priape = isset($_POST["priape"]) ? $_POST["priape"] : NULL;
$segape = isset($_POST["segape"]) ? $_POST["segape"] : NULL;
$direc = isset($_POST["direc"]) ? $_POST["direc"] : NULL;
$fechanaci = isset($_POST["fechanaci"]) ? $_POST["fechanaci"] : NULL;
$idruta = isset($_POST["idruta"]) ? $_POST["idruta"] : NULL;
$idacudiente = isset($_POST["idacudiente"]) ? $_POST["idacudiente"] : NULL;
$gruposan = isset($_POST["gruposan"]) ? $_POST["gruposan"] : NULL;
$factorrh = isset($_POST["factorrh"]) ? $_POST["factorrh"] : NULL;
$genero = isset($_POST["genero"]) ? $_POST["genero"] : NULL;
$nivel = isset($_POST["idcurso"]) ? $_POST["idcurso"] : NULL;
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : NULL;
$restri = isset($_POST["restri"]) ? $_POST["restri"] : NULL;
$imagen = isset($_FILES['files']['size']) ? $_FILES['files']['size'] : NULL;
$actu = isset($_POST["actu"]) ? $_POST["actu"] : NULL;
//echo $imagen;

if (!$actu) {
    $existe = $ins->selexit($ndocapre);
    $countR = count($existe);

    if ($countR == 1) {
        ?>
        <script>
            alert("El alumno ya se encuentra registrado en el sistema");

        </script>
        <?php

    } else {


        if ($imagen && $ndocapre && $prinombre && $priape && $direc && $descripcion && $restri && $idruta && $idacudiente && $genero && $nivel && $factorrh && $tipdocu && $fechanaci && $gruposan && !$actu) {
            $rutaServidor = 'image';
            $rutaTemporal = $_FILES['files']['tmp_name'];
            $nombreFoto = $ndocapre;
            $nombreFoto.= $_FILES['files']['name'];
            $rutaDestino = $rutaServidor . '/' . $nombreFoto;
            move_uploaded_file($rutaTemporal, $rutaDestino);
        }
        if ($ndocapre && $prinombre && $priape && $direc && $descripcion && $restri && $idruta && $idacudiente && $rutaDestino && $genero && $nivel && $factorrh && $tipdocu && $fechanaci && $gruposan && !$actu) {

            $ins->insalumno($ndocapre, $prinombre, $segnombre, $priape, $segape, $direc, $descripcion, $restri, $idruta, $idacudiente, $rutaDestino, $genero, $nivel, $factorrh, $tipdocu, $fechanaci, $gruposan);
            ?>
            <script>
                alert("Alumno registrado  con éxito ");

            </script>
            <?php

        }
    }
} else {
    if ($idalumno && $prinombre && $priape && $direc && $descripcion && $restri && $idruta && $idacudiente && $genero && $nivel && $factorrh && $tipdocu && $fechanaci && $gruposan && $actu) {

        $ins->upalumno($idalumno, $prinombre, $segnombre, $priape, $segape, $direc, $descripcion, $restri, $idruta, $idacudiente, $genero, $nivel, $factorrh, $tipdocu, $fechanaci, $gruposan);
        ?>
        <script>
            alert("Registro  Actualizado");

        </script>
        <?php

    }
}












$dat = $ins->valor(3);
$dot = $ins->selruta();
$det = $ins->seldoc();
$grupo = $ins->valor(4);
$factor = $ins->valor(2);
$genero = $ins->valor(1);
$nivel = $ins->selniveled();
$datos = $ins->selalum();
$datosalumno = $ins->selalum1($pr);



$datoscur = $datosalumno[0]['idcurso'];
$datoscur2 = $ins->selcurso($datoscur);
$datosniv = $datoscur2[0]['idnivel'];
$datosniv2 = $ins->selnivel($datosniv);
?>