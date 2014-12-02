<?php
include("modelo/mcontra.php");

$ins = new mcontra();

$ndocapre = isset($_POST['ndocapre']) ? $_POST['ndocapre']:NULL;



if($ndocapre){
    
    $datpass = $ins->recupe($ndocapre);
    
}else{
    
    $datpass = isset($datpass) ? $datpass:NULL;
}


?>
