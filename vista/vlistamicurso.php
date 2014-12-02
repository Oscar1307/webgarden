<?php

include("controlador/clistacursos.php");

?>



<center>
 
<form id="form2" name="form2" method="GET" action="" class="display" onSubmit="return confirm('Desea eliminar?')">

    <div align="center" id="tabint">
        <table width="700" border="0" cellspacing="0" cellpadding="5">
            
              <label><h1>MIS CURSOS</h1></label>  
              <label><h3><?php echo $nombrecurso[0]['nombre'] ?></h3></label> 
        </table>
        <div style="width: 700px">
        <table id="example" class="display" cellspacing="0" width="100%">
             <thead>
            <tr>
               
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Alumnos</th>
                
            </tr>
             </thead>
       <tbody>
       <?php
            //Select
            //echo json_encode ($datos);
       
            for ($i = 0; $i < count($milista); $i++) {
                ?>
        
                <tr>

                    
                   
                    <td align="center" width="150"><?php echo $milista[$i]['curso'];?></td>
                    <td align="center"> <?php echo $milista[$i]['nivel']?></td>
                    <td align="center" width="150"><a href="home.php?acceso=153&idcurso=<?php echo $milista[$i]['id']; ?>"><img src="image/lupa.png" width="25" height="25"></a> </td>
                    
                    
     
                       

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