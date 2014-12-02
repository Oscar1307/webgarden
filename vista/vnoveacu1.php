<?php
include ("controlador/cnoveacu.php");
?>
<center>
   

        <table width="700" border="1">
            <tr>
                <td colspan="2" align="center">
                    <h2>Ver Novedad</h2>
                </td>
               

            </tr>
            <tr> 
                <td  align="left">tipo de novedad</td>



                <td ><?php echo $selnove1[0]['tipon'] ?></td>
            </tr>
            <tr>
                <td align="left">Nombre</td>

                <td ><?php echo $selnove1[0]['titulo'] ?></td>
            </tr>
            <tr>
                <td align="left">Descripci&oacute;n</td> 
                <td ><?php echo $selnove1[0]['descripcion'] ?></td>
            </tr>



            <tr>
                <td colspan="2" align="center" >
                        <input type="button" onclick="location.href='home.php?pr=<?php echo $alum?>&acceso=117'" value="volver"/>
               
                  
                </td>
            </tr>


        </table>
    
</center>
