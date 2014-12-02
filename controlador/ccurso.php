<?php

include("modelo/mcurso.php");
//include("modelo/mpagina.php");

$ins = new mcurso();

$idcurso = isset($_POST["idcurso"]) ? $_POST["idcurso"] : NULL;
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : NULL;
$idnivel = isset($_POST["idnivel"]) ? $_POST["idnivel"] : NULL;
$idpersona = isset($_POST["idpersona"]) ? $_POST["idpersona"] : NULL;
$actua = isset($_POST["actua"]) ? $_POST["actua"] : NULL;
$elim = isset($_GET["elim"]) ? $_GET["elim"] : NULL;
$edit = isset($_GET["edit"]) ? $_GET["edit"] : NULL;
$codigo = isset($_POST["codigo"]) ? $_POST["codigo"] : NULL;
$revi = isset($_GET["revi"]) ? $_GET["revi"] : NULL;


//echo $selecal;

if ($nombre && $idnivel && $idpersona && !$actua) {
    $ins->inscurso($nombre, $idnivel, $idpersona);
    ?>
    <script>
        alert("El curso ha sido creado exitosamente");
        location.href='home.php?acceso=106';
    </script>            
    <?php

}




$sele = $ins->selcurso();

if ($elim) {

    $alumno = $ins->selalum($elim);
    $actividadex = $ins->validactividadex($elim);

    if ($alumno>= 1 ||$actividadex >= 1) {
        ?>                 

        <script>
            alert("Este curso no puede ser eliminado, puede ser debido a las siguientes razones: \n\n - El curso puede contener alumnos. \n - El curso puede tener actividades extracurriculares.");
            location.href = 'home.php?acceso=106';
        	
        </script>

        <?php

    } else {

        $ins->delcurso($elim);
        ?>


        <script>
            alert("El curso se ha eliminado con exito");
            location.href = 'home.php?acceso=106';
        	
        </script>

        <?php

    }
    
    
}



$niv = $ins->selnivel();





//$actua = $ins->updcurso($nombre, $idnivel, $idpersona);

$selper = $ins->selper();

if ($edit) {
    
   
        
    $cursoact = $ins->selcursoact($edit);
    
   
}

if ($codigo && $actua && $nombre && $idnivel && $idpersona) {
    
    $alumno = $ins->selalum($codigo);
    $actividadex = $ins->validactividadex($codigo);
    
    if ($alumno>= 1 ||$actividadex >= 1) {
        ?>
    <script>        
        alert('Este curso no puede ser actualizado, puede ser debido a las siguientes razones: \n\n - El curso puede contener alumnos. \n - El curso puede tener actividades extracurriculares.');
        location.href = 'home.php?acceso=106';
    </script>
        <?php
        
    }else{
    
    
    
    $ins->updcurso($codigo, $nombre, $idnivel, $idpersona);
    
    echo "<script>
        alert('El curso se ha actualizado exitosamente');
        location.href = 'home.php?acceso=106';
    	
    </script>";


    }

}


/*
  if($selecal){

  $alumno = $ins->selecalum($selecal);


  } */


$profesor = $ins->selnombreprof();


//para actividades extracurriculares
$actividad = $ins->selactivi($revi);
?>
