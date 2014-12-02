<?php
include("controlador/ccurso.php");
?>

<form name="form1" action="">
    <table border="1" width="500">
        
        <?php if($actividad==NULL){?>
        
        <tr>
            <td><h1>El curso no posee actividades por el momento</h1></td>            
        </tr>
        
        <tr>
            <td align="center"><img src="image/tarea.png" width = "200" height = "200"></td>
            
        </tr>
        
        <?php }else{ ?>
        <label><h1>Actividades extracurriculares</h1></label>
        <label><h3><?php echo $actividad[0]['nombre']; ?></h3></label>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Encargado</th> 
        </tr>
        <?php for($a=0;$a<count($actividad);$a++){?>
        <tr>
            <td><?php echo $actividad[$a]['activi']; ?></td>
            
            <td><?php echo $actividad[$a]['descripcion']; ?></td>
            
            <td><?php echo $actividad[$a]['prinombre']." ".$actividad[$a]['priapellido']; ?></td>
        </tr>
        <?php } ?>
        
        <?php } ?>
        
        <tr>
            <td align="center" colspan="3"><input type="button" value="Volver" onclick="location.href='home.php?acceso=106'"></td>
        </tr>
    </table>    
</form>





