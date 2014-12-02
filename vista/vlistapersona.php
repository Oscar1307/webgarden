<?php
include ("controlador/cpersona.php");
?>
<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="6" align="center">
                    <h2>Personas registradas</h2>
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
                <th>Tel&eacute;fono</th>
                <th>Direcci&oacute;n</th>
                <th>E-mail</th> 
                <th>Gestionar perfiles</th>
                <th>Editar</th>
             
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
            //echo json_encode ($datos);
       
            for ($i = 0; $i < count($persona); $i++) {
                ?>
        
                <tr>

                    
                       <td align="center"> <?php echo $persona[$i]['identificacion'] ?></td>
                    <td align="center"><a href="home.php?pr=<?php echo $persona[$i]['identificacion'] ?>&acceso=114"><img border=0 src="<?php echo $persona[$i]['foto'] ?>" width="90" height="100"></a></td>
                    
                    <td align="center"> <?php echo $persona[$i]['prinombre']." ".$persona[$i]['priapellido'] ?></td> 
                    <td align="center"> <?php echo $persona[$i]['telefono'] ?></td>
                    <td align="center"> <?php echo $persona[$i]['direccion'] ?></td>
                    <td align="center" > <?php echo $persona[$i]['email'] ?></td>
                    <td align="center"><a href="home.php?acceso=135&cedula=<?php echo $persona[$i]['identificacion'] ?>"><img src="image/maletin.png" width="22" height="22" title="Gestionar perfiles" align="right"></a></td>
                            


                    
                    <td align="center"><a href='home.php?pr=<?php echo $persona[$i]['identificacion'] ?>&acceso=105'><img border=0 src="image/editar.png" width="35" height="35" /></a></td>
                       

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
