<?php
include ("controlador/cactividadexac.php");
?>

<center>


    <table width="700" border="1
           " >
        <tr>
            <td colspan="3" align="center">
                <h2>Actividad extracurricular</h2>
            </td>

        </tr>
        <tr> 
            <td colspan="0" align="left" > tipo de actividad  </td>



            <td colspan="2">

              <?php echo $datos1[0]['nombre'] ?>

            </td>
        </tr>
        <tr>
            <td align="left">Nombre Actividad</td>

            <td colspan="2"> <?php echo $datos1[0]['nombre'] ?></td>
        
       
               </tr>
        <tr>
            <td align="left">Descripci&oacute;n</td> 
            <td colspan="2"><?php echo $datos1[0]['descripcion'] ?></td>
        </tr>


        <tr>

            <td colspan="3" align="center" >
                <input type="button" onclick="location.href = 'home.php?acceso=120&pr=<?php echo $pr ?>'" value="volver"/>

            </td>
        </tr>    

        

    </table>

</center>