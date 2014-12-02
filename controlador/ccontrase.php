<?php
include("modelo/mcontrase.php");
$ins = new mcontra();

$pass1 = isset($_POST["pass1"]) ? $_POST["pass1"]:NULL;
$pass2 = isset($_POST["pass2"]) ? $_POST["pass2"]:NULL;
$pass3 = isset($_POST["pass3"]) ? $_POST["pass3"]:NULL;
$idusuario = isset($_SESSION["idUser"]) ? $_SESSION["idUser"]:NULL;

$info =$ins->infoper($idusuario);

if($pass1 && $pass2 && $pass3){
    if($pass1 == $info[0]['pass'] && $pass2 && $pass3){
        if($pass2==$pass3){
            if($pass2!=$pass1){
                $ins->camcontra($idusuario, $pass2);
                
                ?>
<script>
    alert("La contraseña ha sido cambiada exitosamente");
    location.href = "home.php";
</script>
                <?php
                
                
            }else{
                /*Su antigua contraseña y la nueva son iguales*/
                
                ?>
<script>
    alert("Su antigua contraseña y la nueva son iguales");
</script>
                <?php   
                
                
            }
            
        }else{
            
            /*Las contraseñas no coinciden*/
            
            ?>
<script>
    alert("Las contraseñas no coinciden");
</script>

           <?php
            
            
        }
        
        
        
    }else{
        
        
        /*Su contraseña actual no coincide con la solicitada*/
        
        ?>
<script>
    //event.preventDefault();
    alert("La contraseña solicitada no coincide con su contraseña actual");
</script>

<?php
    }
    
    
}


?>