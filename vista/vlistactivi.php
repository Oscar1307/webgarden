<?php
include("controlador/ccursoactivi.php");
?>

<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            
              <label><h1>Actividades extracurriculares</h1></label>
           
            
            
        <label><h3><?php echo $extracu[0]['cursonom']; ?></h3></label>
        
            
         
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
               
                <th>Nombre</th>
                <th>Descripcion</th>
               
             
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
            //echo json_encode ($datos);
       
            for ($i = 0; $i < count($extracu); $i++) {
                ?>
        
                <tr>

                    
                   
                    <td align="center"> <?php echo $extracu[$i]['actividad'] ?></td>
                    <td align="center"> <?php echo $extracu[$i]['descrip'] ?></td>
                    
     
                       

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
    <td colspan="3"><input type="button" value="ACEPTAR" onclick="location.href='home.php?acceso=125'"></button></td>
        </tr>
    </table>
    
    
</center>