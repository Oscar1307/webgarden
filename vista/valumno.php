<?php
include ("controlador/calumno.php");
?>

<script language="javascript">
    function Recargarcursos(value) {
        var parametros = {
            "valor": value
        };
        $.ajax({
            data: parametros,
            url: 'vista/miscript.php',
            type: 'post',
            success: function (response) {
                $("#reloadMunicipio").html(response);
            }
        });
    }
</script>



<center>
    <form name="form1" action="" method="post"  onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')" enctype="multipart/form-data" >

        <table width="700"  border="0" cellpadding="6">
            <tr>
                <td colspan="2" align="center">
                    <h2>Registro de Alumnos</h2>
                </td>

            </tr> 
            <tr>
                <td colspan="3" align="center"><output id="list" width='100' height='110'> <img src='image/perfil.png' width='100' height='110'/></output></td>
            </tr>
            <tr> 
                <td colspan="0" align="left" > tipo de documento <br>



                    <select name="tdocapre" required>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($dat); $i++) {
                            ?>

                            <option value=" <?php echo $dat[$i]['idvalor'] ?>" /> <?php echo $dat[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
                <td  colspan="1" align="left">
                    <input type="text" placeholder="No.documento" name="ndocapre" size="35" maxlength="11" required="required" pattern="(1|2|3|4|5|6|7|8|9)[0-9]+" />
                </td>    

            </tr> 
            <tr>  


                <td colspan="1" align="left"> <input type="text" placeholder="Primer Nombre" name="prinombre" size="35" maxlength="15" required="required" /></td>
                <td colspan="1" align="left"> <input type="text" placeholder="Segundo Nombre  (No requerido)" name="segnombre" size="35" maxlength="20"  /></td>
            </tr>
            <tr>  


                <td colspan="1" align="left"> <input type="text" placeholder="Primer Apellido" name="priape" size="35" maxlength="15" required="required" /></td>
                <td colspan="1" align="left"> <input type="text" placeholder="Segundo Apellido (No requerido)" name="segape" size="35" maxlength="20"  /></td>
            </tr>
            <tr>  


                <td colspan="1" align="left"> <input type="text" placeholder="Direcci&oacute;n" name="direc" size="35" maxlength="15" required="required" /></td>

                <td colspan="1" align="left">  Fecha de nacimiento <br> <input type="date" placeholder="Fecha de nacimiento" name="fechanaci" size="35" maxlength="20" required="required"  /></td>
            </tr>
            <tr>



                <td colspan="0" align="left" >Ruta<br>



                    <select name="idruta" required>
                        <option value>Seleccione</option>
                       <option value="1"/>Sin ruta </option>

                        <?php
                        for ($i = 0; $i < count($dot); $i++) {
                            ?>

                            <option value="<?php echo $dot[$i]['idruta'] ?>"/>Placa: <?php echo $dot[$i]['placa'] ?>, Conductor: <?php echo $dot[$i]['nombre'] ?> <?php echo $dot[$i]['apellido'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
                <td colspan="0" align="left" >Acudiente<br>



                    <select name="idacudiente" required>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($det); $i++) {
                            ?>

                            <option value=" <?php echo $det[$i]['identificacion'] ?>" /> <?php echo $det[$i]['identificacion'] ?> <?php echo $det[$i]['prinombre'] ?> <?php echo $det[$i]['priapellido'] ?></option>

                        <?php } ?>

                    </select>


                </td>
            </tr>
            <tr> 
                <td colspan="0" align="left" >Grupo sangu&iacute;neo <br>



                    <select name="gruposan" required>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($grupo); $i++) {
                            ?>

                            <option value=" <?php echo $grupo[$i]['idvalor'] ?>" /> <?php echo $grupo[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
                <td colspan="0" align="left" >Factor RH<br>



                    <select name="factorrh" required>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($factor); $i++) {
                            ?>

                            <option value=" <?php echo $factor[$i]['idvalor'] ?>" /> <?php echo $factor[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>


            </tr> 
            <tr> 
                <td colspan="0" align="left" >Genero<br>



                    <select name="genero" required>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($genero); $i++) {
                            ?>

                            <option value=" <?php echo $genero[$i]['idvalor'] ?>" /> <?php echo $genero[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>






            <tr>
                <td colspan="0" align="left" > Descripci&oacute;n Enfermedades<br>
                    <textarea name="descripcion" maxlength="1000" required="required" rows="4" cols="51"></textarea></td>
                <td colspan="0" align="left" >Restricciones<br>
                    <textarea name="restri" maxlength="1000" required="required" rows="4" cols="51"></textarea></td>


            </tr>
            <tr>
                <td colspan="3" align="center" >MATRICULA<br>
                </td>


            </tr>


            <tr>



                <td colspan="0" align="left" > 



                    <div align="center" >
                        <select name="nivel"  onchange="javascript:Recargarcursos(this.value);" required>
                            <option value>Nivel</option>
                            <?php
                            include("./controlador/conexion_sqlserver.php");
                            $sql = "SELECT idnivel,nombre FROM nivel ORDER BY idnivel";
//echo $sql;
                            $conexionBD = new conexion_sqlserver();
                            $conexionBD->conectarBD();
                            $data = $conexionBD->ejecutarConsulta($sql, 0);
                            for ($i = 0; $i < count($data); $i++) {
                                ?>
                                <option value="<?php echo $data[$i]['idnivel'] ?>"><?php echo $data[$i]['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </td><td>

                    <div  align="center" id="reloadMunicipio">
                        <select name="idcurso" id="id_estado">
                            <option value>Cursos</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>

                <td colspan="3" align="center"><input type="file" name="files" id="files" title="Solo se admiten fotos con extension jpg y png" name="files" required="required"/></td>


            </tr>

            <tr>
                <td colspan="2"align="center">
                    <input  type="submit" value="Guardar" onclick="comprobacion(this.form, this.form.files.value)"/>
                    <input type="reset" value="Limpiar" />
                </td>


            </tr>


        </table>


    </form>


</center>

<script>
    function comprobacion(formulario, archivo) {
        extpermit = new Array(".jpg", ".png");
        //mensaje = "";
        if (archivo) {
            exten = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
            permitida = false;

            for (var i = 0; i < extpermit.length; i++) {

                if (extpermit[i] == exten) {
                    permitida = true;
                    break;

                }

            }

            if (!permitida) {
                mensaje = "Las extensiones de las fotos solo pueden ser " + extpermit.join();
                event.preventDefault();
                //return false;
            } else {

                formulario.submit();
                return 1;

            }

        }
        alert(mensaje);
        return 0;
    }

</script>


<script>


    function archivo(evt) {

        var files = evt.target.files;
        for (var i = 0, f; f = files[i]; i++) {
            if (!f.type.match('image.*')) {

                continue;

            }

            var reader = new FileReader();
            reader.onload = (function (theFile) {

                return function (e) {

                    document.getElementById("list").innerHTML = ['<img class="thumb" width="100" height="110" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');

                };

            })(f);

            reader.readAsDataURL(f);

        }


    }
    document.getElementById('files').addEventListener('change', archivo, false);
</script>
