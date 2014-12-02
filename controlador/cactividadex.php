<?php

include ("modelo/mactividadex.php");
//include ("modelo/mpagina.php");

$ins = new mactividadex();
//Eliminar


$del = isset($_GET["del"]) ? $_GET["del"] : NULL;
$iduser = isset($_SESSION["idUser"]) ? $_SESSION["idUser"] : NULL;
$perfil = isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : NULL;
//echo $perfil;
if ($del) {

    $ins->delactividad($del);
    ?>
    <script language="javascript">
        alert("Actividad  eliminada");
        location.href = 'home.php?acceso=104';
    </script>
    <?php

}

//$pac=107;
//$filtro=isset($_GET["filtro"]) ? $_GET["filtro"]:NULL;
$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$idactividadex = isset($_POST["idactividadex"]) ? $_POST["idactividadex"] : NULL;
$nombre = isset($_POST["nombreac"]) ? $_POST["nombreac"] : NULL;
$descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : NULL;
$tipoacti = isset($_POST["tipoacti"]) ? $_POST["tipoacti"] : NULL;
$idcurso = isset($_POST["idcurso"]) ? $_POST["idcurso"] : NULL;
$actu = isset($_POST["actu"]) ? $_POST["actu"] : NULL;

if ($descripcion && $nombre && $tipoacti && $idcurso && $iduser && $perfil && !$actu) {
    $ins->insactividadex($descripcion, $nombre, $tipoacti, $idcurso, $iduser, $perfil);
    ?>
    <script language="javascript">
        alert("Actividad extracurricular creada con \u00e9xito");
        //location.href='home.php?pac=107';

    </script>

    <?php

}
if ($idactividadex && $descripcion && $nombre && $tipoacti && $idcurso && $actu) {
    $ins->upactividadex($idactividadex, $descripcion, $nombre, $tipoacti, $idcurso);
    ?>
    <script language="javascript">
        alert("Actividad extracurricular Actualizada  con \u00e9xito");
        //location.href='home.php?pac=107';

    </script>


    <?php

}

$datos1 = $ins->selactividadex1($pr);
$datoscur = $datos1[0]['idcurso'];
$datoscur2 = $ins->selcurso($datoscur);
$datosniv = $datoscur2[0]['idnivel'];
$datosniv2 = $ins->selnivel($datosniv);


if ($perfil == 5) {
    $datos = $ins->selactividadex();
} else {
    $datos = $ins->selactividadexdo($iduser);
}
$dot = $ins->valor(7);



//Paginar
/*
  $bo = "";
  $nreg = 10;//numero de registros a mostrar
  $pag = new mpagina($nreg);
  $conp ="select count(ap.ndocapre) as Npe from aprendiz as ap inner join valor as va1 on
  ap.tdocapre=va1.codval inner join  valor as va2  on
  ap.genapre=va2.codval
  inner join valor as va3 on  ap.estcapre=va3.codval  inner join
  ubicacion as ubi on ap.codubi=ubi.codubi
  inner join perfil as per on ap.idper=per.idper  and ap.idper=2 ";
  if($filtro) $conp.= " WHERE ap.ndocapre LIKE '%".$filtro."%'";

 */
?>
	





