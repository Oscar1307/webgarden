<?php
include("controlador/clistanovedad.php");
?>

<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            
              <label><h1>Lista de novedades</h1></label>  
         
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
               
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>alumno</th>
                <th>Curso</th>
                <th>Fecha de publicacion</th>
             
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
            //echo json_encode ($datos);
       
            for ($i = 0; $i < count($novedades); $i++) {
                ?>
        
                <tr>

                    
                   
                    <td align="center" width="100"> <?php echo $novedades[$i]['titulo'] ?></td>
                    <td align="center"> <?php echo $novedades[$i]['descripcion'] ?></td>
                    <td align="center"> <?php echo $novedades[$i]['prinombre']." ".$novedades[$i]['priapellido']; ?></td>
                    <td align="center" width="150"> <?php echo $novedades[$i]['curso'] ?></td>
                    <td align="center"> <?php echo substr($novedades[$i]['fecha'],0,10) ?></td>
                    
     
                       

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
    <td colspan="3"><input type="button" value="ACEPTAR" onclick="location.href='home.php'"></button></td>
        </tr>
    </table>
    
    
</center>