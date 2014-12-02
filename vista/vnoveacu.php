<?php
include ("controlador/cnoveacu.php");
?>
<center>
  

        <table width="700" border="0">
            <tr>
                <td colspan="3" align="center" >
                        <input type="button" onclick="location.href='home.php?acceso=116'" value="volver"/>
                  
                </td>
            </tr>


        </table>
 


    <form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('Desea eliminar?')">

        <div align="center" id="tabint">
            <table width="700px" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <th class="style1" align="left" colspan="7">Novedades Alumno:<?php echo $alumno[0]['identificacion']?> <?php echo $alumno[0]['prinombre']?> <?php echo $alumno[0]['segnombre'] ?></th>
                </tr>


                <tr>
                    

                    <th class="style1" align="center" width="100px">Tipo Novedad</th>
                    <th class="style1" align="center" width="100px">Nombre Novedad</th>
                    <th class="style1" align="center" width="100px">Responsable</th>
                    <th class="style1" align="center" width="100px">Fecha de publicaci&oacute;n</th>
                    <th class="style1" align="center" width="100px">Ver</th>
                </tr>
                <?php
//Select
//echo json_encode ($datos);
                for ($i = 0; $i < count($selnove); $i++) {
                    ?>
                    <tr>
                       
                        <td class="style2" align="left"> <?php echo $selnove[$i]['tipon'] ?></td>  
                        <td class="style2" align="left"> <?php echo $selnove[$i]['titulo'] ?></td>  
                        <td class="style2" align="left" width="160px"><?php echo $selnove[$i]['perfil'] ?><br><?php echo $selnove[$i]['prinombre'] ?> <?php echo $selnove[$i]['priapellido'] ?></td>
                        <td class="style2" align="left" width="160px"> <?php echo $selnove[$i]['fecha'] ?></td> 
                        <td align="center"><a href="home.php?act=<?php echo $selnove[$i]['idnovedad'] ?>&acceso=118&alum=<?php echo $idalumno?>"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>
                    </tr>
                <?php } ?>

               
            </table>
            <p>&nbsp; </p>
        </div>
    </form>

</center>
