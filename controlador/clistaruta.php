<?php

include ("modelo/mlistaruta.php");

$ins = new mruta();
$rut = isset($_GET["rut"]) ? $_GET["rut"] : NULL;
$doc = isset($_GET["doc"]) ? $_GET["doc"] : NULL;
$elim = isset($_GET["elim"]) ? $_GET["elim"] : NULL;
$iduser = isset($_SESSION["idUser"]) ? $_SESSION["idUser"] : NULL;
$datos = $ins->selrutas($iduser);
$datos1 = $ins->selalum($rut);
$docen = $ins->seldocente($doc);
$alum= $ins->selalumno($elim);
$ruta1=$ins->selruta1($rut);
if ($elim) {
    $ins->upalum($elim);
      $correo = $docen[0]['email'];
                   
                    $nombre = $docen[0]['prinombre'];
                    $apellido = $docen[0]['priapellido']; 
                    $nombre1 = $alum[0]['prinombre'];
                    $apellido1 = $alum[0]['priapellido'];
                    $placa = $ruta1[0]['placa'];
                    $nombrecon = $ruta1[0]['nombre'];
                    $apellidocon = $ruta1[0]['apellido'];
                    $asunto = "Cambio Ruta de transporte";
                    $contenido = "Estimado usuario ".$nombre." ".$apellido.".<br>el Alumno : ".$nombre1." ".$apellido1.".ha sido eliminado de la ruta de transporte con placa:".$placa.",conductor: ".$nombrecon."  ".$apellidocon."  <br>APLICACION WEBGARDEN";
              
                    
                    mail($correo, $asunto, $contenido);
    
     ?>
        <script language="javascript">
            alert("Alumno eliminado de la ruta de trasporte");
         location.href = 'home.php?acceso=132&&rut=<?php echo $rut ?>';
        </script>
        <?php
    
    
}
?>
