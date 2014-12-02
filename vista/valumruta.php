<?php
include ("controlador/clistaruta.php");
?>
<center>
 

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
        	<td colspan="2" align="left" >
                      <input type="button" onclick="location.href='home.php?acceso=129'" value="volver"/>
            
            </td>
        </tr>
            <tr>
                <td colspan="6" align="center">
                    <h2> Alumnos </h2>
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
                <th>Datos Acudiente</th>
                <th>Eliminar Integrante</th>
                 
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
           
       
            for ($i = 0; $i < count($datos1); $i++) {
                ?>
        
                <tr>

                    
                       <td> <?php echo $datos1[$i]['identificacion'] ?></td>
                    <td align="center"><img border=0 src="<?php echo $datos1[$i]['foto'] ?>" width="90" height="100" /></a></td>
                    
                    <td> <?php echo $datos1[$i]['prinombre'] ?></td> 
                    <td> <?php echo $datos1[$i]['priapellido'] ?></td>
                    <td > <?php echo $datos1[$i]['curso'] ?></td>
                    <td > <?php echo $datos1[$i]['direccion'] ?></td>
                    <td> <?php echo $datos1[$i]['grupos'] ?><?php echo $datos1[$i]['rh'] ?></td>


                    <td align="center"><a href="home.php?rut=<?php echo $rut?>&doc=<?php echo $datos1[$i]['acudiente'] ?>&acceso=136"><img border=0 src="image/editar.png" width="35" height="35" /></a></td>
                    <td align="center"><a href="home.php?doc=<?php echo $datos1[$i]['acudiente'] ?>&rut=<?php echo $rut?>&elim=<?php echo $datos1[$i]['identificacion'] ?>&acceso=132"><img border=0 src="image/eliminar.png" width="35" height="35" onclick="return confirm('Desea eliminar el alumno de la ruta de trasporte?');" /></a></td>
                    
                 

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


