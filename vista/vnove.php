<?php
include ("controlador/cnove.php");
?>
<center>
    <form name="form1" action="" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')">

        <table width="700" border="0">
            <tr>
                <td colspan="3" align="center">
                    <h2>Registrar Novedad</h2>
                </td>

            </tr>
            <tr> 
                <td colspan="0" align="left">tipo de novedad</td>



                <td colspan="2">

                    <select name="tiponov" required >
                        <option value>Seleccione </option>
                        <?php
                        for ($i = 0; $i < count($dot); $i++) {
                            ?>

                            <option value=" <?php echo $dot[$i]['idvalor'] ?>" /> <?php echo $dot[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
            </tr>
            <tr>
                <td align="left">Nombre</td>

                <td colspan="2"> <input type="text" placeholder="" name="titulo" size="55" maxlength="50" required="required"  /></td>
            </tr>
            <tr>
                <td align="left">Descripci&oacute;n</td> 
                <td colspan="2"><textarea name="descripcion" maxlength="1000" required="required" rows="4" cols="51"></textarea></td>
            </tr>



            <tr>
                <td colspan="3" align="center" >
                        <input type="button" onclick="location.href='home.php?acceso=137'" value="volver"/>
                    <input type="reset" value="limpiar" />
                    <input type="submit"  value="Guardar"   />
                </td>
            </tr>


        </table>
    </form>



    <form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('Desea eliminar?')">

        <div align="center" id="tabint">
            <table width="700px" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <th class="style1" align="left" colspan="7">Novedades Alumno:<?php echo $alumno[0]['identificacion']?> <?php echo $alumno[0]['prinombre']?> <?php echo $alumno[0]['segnombre'] ?></th>
                </tr>


                <tr>
                    <th class="style1" align="center" width="100px">No.Novedad<input name="acceso" type="hidden" id="acceso" value="112" /><input name="pr" type="hidden"  value="<?php echo $idalumno?>" /></th>

                    <th class="style1" align="center" width="100px">Tipo Novedad</th>
                    <th class="style1" align="center" width="100px">Nombre Novedad</th>
                    <th class="style1" align="center" width="100px">Responsable</th>
                    <th class="style1" align="center" width="100px">Fecha de publicaci&oacute;n</th>
                    <th class="style1" align="center" width="100px">Ver o Editar</th>
                </tr>
                <?php
//Select
//echo json_encode ($datos);
                for ($i = 0; $i < count($selnove); $i++) {
                    ?>
                    <tr>
                        <td class="style2" align="center"><input type="submit" name="del" value= <?php echo $selnove[$i]['idnovedad'] ?>></td>
                        <td class="style2" align="left"> <?php echo $selnove[$i]['tipon'] ?></td>  
                        <td class="style2" align="left"> <?php echo $selnove[$i]['titulo'] ?></td>  
                        <td class="style2" align="left" width="160px"><?php echo $selnove[$i]['perfil'] ?><br><?php echo $selnove[$i]['prinombre'] ?> <?php echo $selnove[$i]['priapellido'] ?></td>
                        <td class="style2" align="left" width="160px"> <?php echo $selnove[$i]['fecha'] ?></td> 
                        <td align="center"><a href="home.php?act=<?php echo $selnove[$i]['idnovedad'] ?>&acceso=115&alum=<?php echo $idalumno?>"><img border=0 src="image/editar.png" width="16" height="16" /></a></td>
                    </tr>
                <?php } ?>

                <tr>
                    <td colspan=17 class="style2">Para eliminar presione el n&uacute;mero del c&oacute;digo.</td>
                </tr>
            </table>
            <p>&nbsp; </p>
        </div>
    </form>

</center>
