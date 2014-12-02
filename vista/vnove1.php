<?php
include ("controlador/cnove.php");
?>
<center>
    <form name="form1" action="home.php?pr=<?php echo $alum?>&acceso=112" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')">

        <table width="700" border="0">
            <tr>
                <td colspan="3" align="center">
                    <h2>Editar Novedad</h2>
                </td>
                 <input type="hidden" name="actu" value="actu"/>
                 <input type="hidden" name="idnovedad" value="<?php echo $selnove1[0]['idnovedad']?>"/>

            </tr>
            <tr> 
                <td colspan="0" align="left">tipo de novedad</td>



                <td colspan="2">

                    <select name="tiponov" required >
                        <option value>Seleccione </option>
                        <?php
                        for ($i = 0; $i < count($dot); $i++) {
                            ?>

                            <option <?php if ($selnove1[0]['tiponov']==$dot[$i]['idvalor']) echo "SELECTED"  ?> value=" <?php echo $dot[$i]['idvalor'] ?>" /> <?php echo $dot[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
            </tr>
            <tr>
                <td align="left">Nombre</td>

                <td colspan="2"> <input type="text" placeholder="" name="titulo" size="55" maxlength="50" required="required" value=" <?php echo $selnove1[0]['titulo'] ?>"  /></td>
            </tr>
            <tr>
                <td align="left">Descripci&oacute;n</td> 
                <td colspan="2"><textarea name="descripcion" maxlength="1000" required="required" rows="4" cols="51"><?php echo $selnove1[0]['descripcion'] ?></textarea></td>
            </tr>



            <tr>
                <td colspan="3" align="center" >
                        <input type="button" onclick="location.href='home.php?pr=<?php echo $alum?>&acceso=112'" value="volver"/>
               
                    <input type="submit"  value="Editar"   />
                </td>
            </tr>


        </table>
    </form>
</center>
