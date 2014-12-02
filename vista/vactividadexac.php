<?php
include ("controlador/cactividadexac.php");
?>

<center>
   

        <table width="700" border="0">
            
         <tr>
                <td colspan="3" align="center" >
                        <input type="button" onclick="location.href='home.php?acceso=119'" value="volver"/>
                  
                </td>
            </tr>


        </table>
    
    



    

        <div align="center" id="tabint">
            <table width="700px" border="1" cellspacing="0" cellpadding="5">
                 <tr>
                    <th class="style1" align="left" colspan="7">Actividades Extracurriculares Curso:<?php echo $curso1[0]['nombre']?></th>
                </tr>


                <tr>
                   

                    <th class="style1" align="center" width="120px">Tipo actividad</th>
                    <th class="style1" align="center" width="120px">Nombre actividad</th>
                    <th class="style1" align="center" width="100px">Curso</th>
                    <th class="style1" align="center" width="100px">Responsable</th>
                    <th class="style1" align="center" width="160px">Fecha de publicaci&oacute;n</th>
                    <th class="style1" align="center" width="160px">Ver</th>
                </tr>
                <?php
//Select
//echo json_encode ($datos);
                for ($i = 0; $i < count($datos); $i++) {
                    ?>
                    <tr>
                   
                        <td class="style2" align="left"> <?php echo $datos[$i]['tipo'] ?></td>  
                        <td class="style2" align="left"> <?php echo $datos[$i]['nombre'] ?></td>  
                        <td class="style2" align="left" width="160px"> <?php echo $datos[$i]['curso'] ?></td> 
                        <td class="style2" align="left" width="160px"><?php echo $datos[$i]['perfil'] ?><br><?php echo $datos[$i]['prinombre'] ?> <?php echo $datos[$i]['priapellido'] ?></td>
                        <td class="style2" align="left" width="160px"> <?php echo $datos[$i]['fecha1'] ?></td> 
                        <td align="center"><a href="home.php?pr=<?php echo $pr ?>&acceso=121&act=<?php echo $datos[$i]['idactividadex']?>"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>
                    </tr>
                <?php } ?>

                
            </table>
            <p>&nbsp; </p>
        </div>
   

</center>
