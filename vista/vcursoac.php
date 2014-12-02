<?php
include ("controlador/cactividadexac.php");
?>

<center>


    <table width="700" border="1
           " >
        <tr>
            <td colspan="2" align="center">
                <h2>Datos del Curso</h2>
            </td>

        </tr>
        <tr> 
            <td colspan="0" align="left" >Nombre</td>



            <td colspan="0">

              <?php echo $curso[0]['nombre'] ?>

            </td>
        </tr>
        <tr>
            <td align="left">Nivel</td>

            <td colspan="0"> <?php echo $curso[0]['niv'] ?></td>
        
       
               </tr>
        <tr>
            <td align="left">Profesor</td> 
            <td colspan="0" ><?php echo $curso[0]['prinombre'] ?> <?php echo $curso[0]['priapellido'] ?> <br><img src='<?php echo $docente[0]['foto'] ?>' width='100' height='110'/> </td>
             
        </tr>
         <tr>
            <td align="left">Telefono</td> 
            <td colspan="0"><?php echo $docente[0]['telefono'] ?>  </td>
        </tr>
         <tr>
            <td align="left">Email</td> 
            <td colspan="0"><?php echo $docente[0]['email'] ?>  </td>
        </tr>


        <tr>

            <td colspan="2" align="center" >
                <input type="button" onclick="location.href = 'home.php?acceso=119'" value="volver"/>

            </td>
        </tr>    

        

    </table>

</center>

