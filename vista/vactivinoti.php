<?php
include("controlador/ccurso.php");
?>



<?php if($actividad==NULL){?>

<form name="form1" action="">   
    <div align="center" id="tabint">
    <table border="1" width="500">
        <tr>
                <th colspan="6" align="center" >
                    <h2>Actividades extracurriculares</h2>
                    <label><h3><?php echo $nombrecurslist; ?></h3></label>
                </th>

            </tr> 
        
        
        
         <tr>
            <td align="center"><h1>El curso no posee actividades por el momento</h1></td>            
        </tr>
        
        <tr>
            <td align="center"><img src="image/tarea.png" width = "200" height = "200"></td>
            
        </tr>
    
         <tr>
            <td align="center" colspan="3"><input type="button" value="Volver" onclick="location.href='home.php?acceso=106'"></td>
        </tr>
    </table>
    </div>
  
</form>    


    <?php }else{ ?>


<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <th colspan="6" align="center">
                    <h2>Actividades extracurriculares</h2>
                    <label><h3><?php echo $actividad[0]['nombre']; ?></h3></label>
                </th>

            </tr> 
            
         <tr>
            <td align="center" colspan="3"><input type="button" value="Volver" onclick="location.href='home.php?acceso=106'"></td>
        </tr>
            
            
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
                

                <th align="center">Nombre</th>
                <th align="center">Descripci&oacute;n</th>
                <th align="center">Encargado</th>
               
             
            </tr>
             </thead>
       <tbody>
         <?php for($a=0;$a<count($actividad);$a++){?>
        <tr>
            <td align="center"><?php echo $actividad[$a]['activi']; ?></td>
            
            <td align="center"><?php echo $actividad[$a]['descripcion']; ?></td>
            
            <td align="center"><?php echo $actividad[$a]['prinombre']." ".$actividad[$a]['priapellido']; ?></td>
        </tr>
        <?php } ?>
   </tbody>
            
        </table>
        <p>&nbsp; </p>
    </div>
        </div>
</form>
    <script>
       $(document).ready(function() {
            $("#example").DataTable();
        } );
    </script>
</center>
        
        
        
        <?php } ?>