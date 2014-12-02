<?php

include ("modelo/mnove.php");
$ins = new mnove();
$idnovedad = isset($_POST["idnovedad"]) ? $_POST["idnovedad"] : NULL;
$iddocente = isset($_SESSION["idUser"]) ? $_SESSION["idUser"] : NULL;
$perfilid = isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : NULL;
$tiponov = isset($_POST["tiponov"]) ? $_POST["tiponov"] : NULL;
$titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : NULL;
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : NULL;
$idalumno= isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$actu = isset($_POST["actu"]) ? $_POST["actu"] : NULL;
$del= isset($_GET["del"]) ? $_GET["del"] : NULL;
$act= isset($_GET["act"]) ? $_GET["act"] : NULL;
$alum= isset($_GET["alum"]) ? $_GET["alum"] : NULL;
if ($del){
     $ins->delnove($del);
      ?>
        <script language="javascript">
            alert("Novedad eliminada");
            location.href = 'home.php?acceso=112&pr=<?php echo $idalumno?>';
        </script>
        <?php
}


if ($titulo && $descripcion && $iddocente && $idalumno && $tiponov && $perfilid && !$actu){
     $ins->insnove($titulo ,$descripcion , $iddocente , $idalumno ,$tiponov, $perfilid );
     ?>
        <script language="javascript">
            alert("Novedad Creada");
        </script>
        <?php
}
if ($idnovedad && $titulo && $descripcion && $tiponov && $actu){
    
     $ins->upnove($idnovedad , $titulo , $descripcion , $tiponov);
       ?>
        <script language="javascript">
            alert("Novedad Editada");
        </script>
        <?php
}
//echo $pr;
//echo $perfil;
$dot = $ins->valor(6);
$alumno= $ins->alumno($idalumno);


//echo $idalumno;

echo "<br>";
//echo $iddocente;

if ($perfilid==5){
    $selnove= $ins->selnov($idalumno);
     
}else{
    $selnove= $ins->selnoves($idalumno ,$iddocente);
}

$selnove1= $ins->selnov1($act);



?>
	
