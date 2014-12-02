<?php include ("controlador/conexion.php"); ?>
<div align="center">
     <br><br><br><br><br><br>
    <p id="tiuloingreso">INGRESAR</p>
    <form id="form1" name="form1" method="post" action="modelo/mcontrol.php">
        <table width="300"  align="center" class="Table">
            <tr>
                <td colspan="2" align="center">

                    <?php
                    $ErrUsu = isset($_GET["errorusuario"]) ? $_GET["errorusuario"] : NULL;
                    if (strcmp($ErrUsu, "si") == 0) {
                        echo "<span style=\"color:red\"><b>Informaci&oacute;n de Usuario invalida</b></span>";
                    } else {
                        
                    }
                    ?>
                </td>
            </tr>
         
            <tr>
                <td><div align="left" style="color:black">No.Documento:</div></td>
                <td><div align="left">
                        <input name="username" type="text" id="CampoTxt" maxlength="30" size="21" required/>
                    </div></td>
            </tr>
            <tr>
                <td><div align="left" style="color:black">Contrase&ntilde;a:</div></td>
                <td>
                    <div align="left">
                        <input name="password" type="password" id="CampoTxt" maxlength="30" size="21" required/>
                    </div>
                </td>
               
            </tr>

            <tr>
                <td><div align="left" style="color:black">Perfil:</div></td>

                <td>
                    <div align="left">
                        <select name="perfil" required >
                        <option value   </option>seleccione




                        <?php
                        $sql = "SELECT * FROM `perfil`;";
                        $conexionBD = new conexion();
                        $conexionBD->conectarBD();
                        $data = $conexionBD->ejeCon($sql, 0);
                        ?>




<?php
for ($i = 0; $i < count($data); $i++) {
    ?>

                            <option value=" <?php echo$data[$i]['idperfil'] ?>" /> <?php echo $data[$i]['nombre'] ?> </option>

                        <?php } ?>

                        </select>
                </td>
                </div>
            </tr>




        </table>
        <table width="50" border="0" cellspacing="2" cellpadding="4">
            <tr>
                <td><input name="Login" type="submit" id="boton" value="Ingresar" /></td>
                <td><input name="Cancela" type="reset" id="boton" value="Cancelar"/></td>
            </tr>
        </table>
        <br/>
        <br/>
        <div id="olvido">
            <a href="index.php?pac=131" style="text-decoration:none; color:#FC5B04;  font-size: 20px; ">&iquest;Olvido su contrase&ntilde;a?</a><br />
        </div>
        
        
        <br/>
    </form>
</div>