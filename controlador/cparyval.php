<?php

include("modelo/mparyval.php");

$ins = new mparyval();

$param = isset($_POST['param']) ? $_POST['param'] : NULL;
$edit = isset($_GET['edit']) ? $_GET['edit']:NULL;
$pr = isset($_POST['pr']) ? $_POST['pr']:NULL;
$actual = isset($_POST['actual']) ? $_POST['actual']:NULL;
//$param = isset($_POST['param']) ? $_POST['param']:NULL;
$eliminar = isset($_POST['eliminar']) ? $_POST['eliminar']:NULL;


echo $actual;
echo $pr;
echo $param;



$parametros = $ins->selparametro();

if ($param && !$actual && !$pr) {

    echo "<script>
            
           alert('Se ha agregado un nuevo parametro a la lista');
           location.href='home.php?acceso=154';
           
          </script>";

    $ins->inspara($param);
}



if($eliminar) {
    
   $confirmado = $ins->seleconfirm($eliminar);
    
    if($confirmado>=1){
        echo "<script>
            
           alert('No se puede eliminar el parametro, debido a que hay valores que dependen de él.');
           location.href='home.php?acceso=154';
           
          </script>";
    }else{
    

    $ins->elimiparametro($eliminar);


    echo "<script>
            
           alert('Se ha eliminado el parametro de la lista');
           location.href='home.php?acceso=154';
           
          </script>";
    }
}


if($edit){
    
    
  $paraedit = $ins->selparaedit($edit);
    
}

if($param && $pr && $actual){
    
    $ins->updparametro($param, $pr);
    
    
     echo "<script>
            
           alert('Se ha actualizado el parametro exitosamente');
           location.href='home.php?acceso=154';
           
          </script>";
    
}





//Correccion para valores
     

    $parameter = isset($_POST['parameter']) ? $_POST['parameter']:NULL;
    $valor = isset($_POST['valor']) ? $_POST['valor']:NULL;
    $edit =isset($_GET['edit']) ? $_GET['edit']:NULL;
    $actu =isset($_POST['actu']) ? $_POST['actu']:NULL;
    $idval = isset($_POST['idval']) ? $_POST['idval']:NULL;
    
    $elim = isset($_POST['elim']) ? $_POST['elim']:NULL;
        
    
    if($parameter && $valor && !$actu){
        
        echo "<script>
            alert('El valor se ha guardado exitosamente');
            location.href='home.php?acceso=154';
            </script>";
        
        
        $ins->insertavalor($valor, $parameter);
    }
    
    if($edit){
       $edite = $ins->selevalorpaeditar($edit);
    }
    
    if($idval && $valor && $actu){
        
        
        echo "<script>
            alert('Se ha actualizado el valor exitosamente');
            location.href='home.php?acceso=154';
            </script>";
        
        $ins->editarvalor($idval, $valor);
    }
    
    if ($elim) {

    $alumnos = $ins->selvaloral($elim);
    $personas = $ins->selpersoval($elim);
    $activi = $ins->selactivival($elim);
    $novedad = $ins->selnoveval($elim);



    if ($alumnos >= 1 || $personas >= 1 || $activi >= 1 || $novedad >= 1) {


        echo "<script>
            alert('El valor no puede ser eliminado, debido a que hay informacion que depende del mismo.');
            location.href='home.php?acceso=154';
            </script>";
        
    } else {

        echo "<script>
            alert('Se ha eliminado el valor exitosamente');
            location.href='home.php?acceso=154';
            </script>";

        $ins->eliminavalor($elim);
    }
}




    $parametro = $ins->parametros();

    $valores = $ins->selvalores();



?>
