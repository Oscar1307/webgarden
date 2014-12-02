<?php
include ("controlador/clistaruta.php");
?>
<center>
 

    <div align="center" id="tabint">
        
        <table width="700" border="0" cellspacing="0" cellpadding="5">
               
            <tr>
                <td colspan="6" align="center">
                    <h2>Rutas de trasporte</h2>
                </td>

            </tr> 
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
                <th >No.Ruta<input name="acceso" type="hidden" id="acceso" value="109" /></th>

                <th>Placa Vehiculo</th>
                <th>Numero Puestos</th>
                <th>Marca</th>
                <th>Modelo</th>
                  <th>Integrantes</th>
               
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
           
       
            for ($i = 0; $i < count($datos); $i++) {
                ?>
        
                <tr>

                    
                       <td> <?php echo $datos[$i]['idruta'] ?></td>
                  
                    
                    <td> <?php echo $datos[$i]['placa'] ?></td> 
                    <td> <?php echo $datos[$i]['npuesto'] ?></td>
                    <td > <?php  echo $datos[$i]['marca'] ?></td>
                      <td > <?php  echo $datos[$i]['modelo'] ?></td>
                       <td align="center"><a href="home.php?rut=<?php echo $datos[$i]['idruta'] ?>&acceso=132"><img border=0 src="image/editar.png" width="35" height="35" /></a></td>
                    
                    
                      
                 

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


