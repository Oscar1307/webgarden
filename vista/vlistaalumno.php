<?php
include ("controlador/calumno.php");
?>
<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="6" align="center">
                    <h2>Alumnos Registrados</h2>
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
                <th>Ver o editar </th>
                 <th>Eliminar</th>
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
                    <td align="center"><a href="home.php?pr=<?php echo $datos[$i]['identificacion'] ?>&acceso=111"><img border=0 src="<?php echo $datos[$i]['foto'] ?>" width="90" height="100" /></a></td>
                    
                    <td> <?php echo $datos[$i]['prinombre'] ?></td> 
                    <td> <?php echo $datos[$i]['priapellido'] ?></td>
                    <td > <?php echo $datos[$i]['curso'] ?></td>
                    <td > <?php echo $datos[$i]['direccion'] ?></td>
                    <td> <?php echo $datos[$i]['grupos'] ?><?php echo $datos[$i]['rh'] ?></td>


                   
                    <td align="center"><a href="home.php?pr=<?php echo $datos[$i]['identificacion'] ?>&acceso=110"><img border=0 src="image/editar.png" width="35" height="35" /></a></td>
                    <td align="center"><a href="home.php?del=<?php echo $datos[$i]['identificacion'] ?>&acceso=109"><img border=0 src="image/eliminar.png" width="35" height="35"  onclick="return confirm('Desea eliminar el alumno?');"/></a></td>

                </tr>
          
            <?php } ?>
   </tbody>
            <tr>
                <td colspan=17 class="style2">Presione la foto  para cambiarla .</td>
            </tr>
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
