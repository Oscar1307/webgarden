<?php

include("modelo/mpersona.php");
//include("modelo/mpagina.php");

$ins = new mpersona();

$tipdocu = isset($_POST["tipdocu"]) ? $_POST["tipdocu"] : NULL;
$nomdocu = isset($_POST["nomdocu"]) ? $_POST["nomdocu"] : NULL;
$prinomb = isset($_POST["prinomb"]) ? $_POST["prinomb"] : NULL;
$segnomb = isset($_POST["segnomb"]) ? $_POST["segnomb"] : NULL;
$priapellido = isset($_POST["priapellido"]) ? $_POST["priapellido"] : NULL;
$segapellido = isset($_POST["segapellido"]) ? $_POST["segapellido"] : NULL;
$genero = isset($_POST["genero"]) ? $_POST["genero"] : NULL;
$direcc = isset($_POST["direcc"]) ? $_POST["direcc"] : NULL;
$telef = isset($_POST["telef"]) ? $_POST["telef"] : NULL;
$email = isset($_POST["email"]) ? $_POST["email"] : NULL;
$pass = isset($_POST["pass"]) ? $_POST["pass"] : NULL;

//Para cedula
$cedula = isset($_GET["cedula"]) ? $_GET["cedula"]:NULL;


$codigo = isset($_GET['codigo']) ? $_GET['codigo']:NULL;



$val = isset($_GET['val']) ? $_GET['val']:NULL;

$activo = isset($_GET['activo']) ? $_GET['activo']:NULL;




if ($codigo && $activo && $cedula && $val) {
    
/*    
echo $cedula;
echo "<br>";
echo $codigo;
echo "<br>";
echo $val;
echo "<br>";
echo $activo;
echo "<br>";
    */
    
    
    


    if ($val == 1) {

        $alumnoper = $ins->validaporalumno($cedula);
        
        if ($alumnoper >= 1) {

            echo "<script>
                
            alert('No se puede desactivar este perfil, debido a que el usuario tiene alumnos a su cargo.');
                
              </script>";
        } else {

            if ($activo == 1) {

                $ins->actuperf($codigo, 2);
            } else {

                $ins->actuperf($codigo, 1);
            }
        }
    }



    if ($val == 3) {

        $cursoper = $ins->validaporcurso($cedula);

        if ($cursoper >= 1) {

            echo "<script>
                
            alert('No se puede desactivar este perfil, debido a que el usuario tiene cursos a su cargo.');
                
              </script>";
        } else {

            if ($activo == 1) {

                $ins->actuperf($codigo, 2);
            } else {

                $ins->actuperf($codigo, 1);
            }
        }
    }




    if ($val == 4) {

        $rutaper = $ins->validaporuta($cedula);

        if ($rutaper >= 1) {

            echo "<script>
                
            alert('No se puede desactivar este perfil, debido a que el usuario tiene rutas a su cargo.');
                
              </script>";
        } else {

            if ($activo == 1) {

                $ins->actuperf($codigo, 2);
            } else {

                $ins->actuperf($codigo, 1);
            }
        }
    }




    if ($val == 5) {

        if ($activo == 1) {

            $ins->actuperf($codigo, 2);
        } else {

            $ins->actuperf($codigo, 1);
        }
    }
}





$perfiperso = $ins->selepersperfil($cedula);










//$files = isset($_POST["files"]) ? $_POST["files"]:NULL;


$acudiente = isset($_POST["acudiente"]) ? $_POST["acudiente"] : NULL;
$profesor = isset($_POST["profesor"]) ? $_POST["profesor"] : NULL;
$conductor = isset($_POST["conductor"]) ? $_POST["conductor"] : NULL;
$admini = isset($_POST["admini"]) ? $_POST["admini"] : NULL;

$pr = isset($_GET["pr"]) ? $_GET["pr"] : NULL;
$actua = isset($_POST["actua"]) ? $_POST["actua"] : NULL;
$codi = isset($_POST["codi"]) ? $_POST["codi"] : NULL;







if ($tipdocu && $nomdocu && $prinomb && $priapellido && $genero && $direcc && $telef && $email && $pass && !$actua) {
    //print_r($_FILE);
    ?>
    <script>

        alert("Se ha creado el nuevo usuario con exito");
        location.href = 'home.php?acceso=105';

    </script>

    <?php

    if (empty($_FILES['files']['name']) && empty($_FILES['files']['tmp_name'])) {
        //echo "Esto sucede porque files no es nulo";
        $rutaDestino = 'image/perfil.png';




        //is_null($_FILES['files']['name']) && is_null($_FILES['files']['tmp_name'])
    } else {

        $rutaServidor = 'image';
        $rutaTemporal = $_FILES['files']['tmp_name'];
        $nombreFoto = $_FILES['files']['name'];
        $rutaDestino = $rutaServidor . '/' . $nombreFoto;
        move_uploaded_file($rutaTemporal, $rutaDestino);
    }
    $ins->inspersona($tipdocu, $nomdocu, $prinomb, $segnomb, $priapellido, $segapellido, $genero, $direcc, $telef, $email, $pass, $rutaDestino);

    $perfilacu = 1;
    $perfilprof = 3;
    $perfilconduc = 4;
    $perfiladmin = 5;
    $activo = 2;

    $ins->insperdesact($nomdocu, $perfilacu, $activo);
    $ins->insperdesact($nomdocu, $perfilprof, $activo);
    $ins->insperdesact($nomdocu, $perfilconduc, $activo);
    $ins->insperdesact($nomdocu, $perfiladmin, $activo);
}


/* Codigo para actualizar toda persona */


if ($tipdocu && $prinomb && $priapellido && $genero && $direcc && $telef && $email && $actua && $codi) {
    //print_r($_FILE);
    ?>
    <script>

        alert("Se han actualizado con exito los datos");
        location.href = 'home.php?acceso=113';

    </script>


    <?php

    $ins->updpersona($tipdocu, $prinomb, $segnomb, $priapellido, $segapellido, $genero, $direcc, $telef, $email, $codi);
}



//echo $rutaDestino;







$tipo = $ins->selcoddocu();

$gene = $ins->selgene();

$persona = $ins->seliperso();




$infoperfil = $ins->inforperfiles();




if ($pr) {
    $peredit = $ins->selpersototal($pr);
}




/* function consulta(){
  var fechini=document.getElementById("fecha").value;
  alert(fechini);
  window.location='home.php?pac=102&fecha='+fechini+'';
  } */











//codigo para editar perfiles










$infoperfil = $ins->inforperfiles();
?>      
