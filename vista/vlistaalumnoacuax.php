<?php
include ("controlador/clistaalumnoacuax.php");
?>
<center>
 

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="6" align="center">
                    <h2>Actividades extracurriculares </h2>
                </td>

            </tr> 
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
                <th >No.documento<input name="acceso" type="hidden" id="acceso" value="109" /></th>

                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Curso</th>
                <th>Direccion</th> 
                <th>RH</th>
                <th>Actividades extracurriculares</th>
                <th>Datos del curso</th>
                 
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
            //echo json_encode ($datos);
       
            for ($i = 0; $i < count($datos); $i++) {
                ?>
        
                <tr>

                    
                       <td> <?php echo $datos[$i]['identificacion'] ?></td>
                    <td align="center"><img border=0 src="<?php echo $datos[$i]['foto'] ?>" width="90" height="100" /></a></td>
                    
                    <td> <?php echo $datos[$i]['prinombre'] ?></td> 
                    <td> <?php echo $datos[$i]['priapellido'] ?></td>
                    <td > <?php echo $datos[$i]['curso'] ?></td>
                    <td > <?php echo $datos[$i]['direccion'] ?></td>
                    <td> <?php echo $datos[$i]['grupos'] ?><?php echo $datos[$i]['rh'] ?></td>


                    <td align="center"><a href="home.php?pr=<?php echo $datos[$i]['idcurso'] ?>&acceso=120"><img border=0 src="image/actividades.png" width="35" height="35" /></a></td>
                    <td align="center"><a href="home.php?cur=<?php echo $datos[$i]['idcurso'] ?>&acceso=122"><img border=0 src="image/editar.png" width="35" height="35" /></a></td>
                 

                </tr>
          
            <?php } ?>
   </tbody>
            
        </table>
        <p>&nbsp; </p>
    </div>
        </div>

    <script>
       $(document).ready(function() {
            $("#example").DataTable();
        } );
    </script>
</center>
