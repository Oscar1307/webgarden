<?php
include ("controlador/clistaalumnoacuda.php");
?>
<center>
 

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="6" align="center">
                    <h2>Datos de Alumnos </h2>
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
                <th>Datos Alumno</th>
                <th>Datos Ruta</th>
                 
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
           
       
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


                    <td align="center"><a href="home.php?pr=<?php echo $datos[$i]['identificacion'] ?>&acceso=124"><img border=0 src="image/editar.png" width="35" height="35" /></a></td>
                    <td align="center"><?php if ($datos[$i]['idruta']<>1){ ?> <a href="home.php?rut=<?php echo $datos[$i]['idruta'] ?>&acceso=128"><img border=0 src="image/ruta.png" width="35" height="35" /></a><?php }else{ ?>Alumno<br>sin ruta <?php } ?></td>

                 

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
