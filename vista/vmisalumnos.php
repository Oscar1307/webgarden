<?php

include("controlador/clistacursos.php");

?>

<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            
              <label><h1>ALUMNOS</h1></label>  
              <label><h3><?php echo $nombrecurso[0]['nombre'] ?></h3></label> 
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
               
                <th>No. Documento</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>RH</th>
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
            //echo json_encode ($datos);
       
            for ($i = 0; $i < count($listalumno); $i++) {
                ?>
        
                <tr>

                    
                   
                    <td align="center" width="100"> <?php echo $listalumno[$i]['identificacion'] ?></td>
                    <td align="center" width="150"> <img src="<?php echo $listalumno[$i]['foto'] ?>" width="80" height="80"></td>
                    <td align="center"> <?php echo $listalumno[$i]['prinombre']." ".$listalumno[$i]['priapellido'] ?></td>
                    <td align="center" width="150"> <?php echo $listalumno[$i]['direccion'] ?></td>
                    <td align="center" width="150"> <?php echo $listalumno[$i]['grupos']." ".$listalumno[$i]['rh']; ?></td>
                    
                    
     
                       

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

<center>
    <table>
        
            <tr>
    <td colspan="3"><input type="button" value="VOLVER" onclick="location.href='home.php?acceso=152'"></button></td>
        </tr>
    </table>
    
    
</center>

