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
    <form name="form1" action="home.php?acceso=109" method="post"  onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')" enctype="multipart/form-data" >

        <table width="700"  border="0" cellpadding="6">
            <tr>
                <td colspan="2" align="center">
                    <h2>Datos de Alumno</h2>
                </td>

            </tr> 
            <tr>
                <td colspan="3" align="center"><output id="list" width='100' height='110'><img src='<?php echo $datosalumno[0]['foto'] ?>' width='100' height='110'/></output></td>
            </tr>
            <tr> 
                <td colspan="0" align="left" > tipo de documento <br>



                    <select name="tdocapre" required disabled>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($dat); $i++) {
                            ?>

                            <option <?php if ($datosalumno[0]['tipodoc']==$dat[$i]['idvalor']) echo "SELECTED"  ?> value=" <?php echo $dat[$i]['idvalor'] ?>" /> <?php echo $dat[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
                <td  colspan="1" align="left">Identificaci&oacute;n<br>
                    
                  <?php echo $datosalumno[0]['identificacion'] ?>
                </td>    

            </tr> 
            <tr>  


                <td colspan="1" align="left">Primer Nombre<br> <input type="text"  name="prinombre" size="35" maxlength="15" required="required" value="<?php echo $datosalumno[0]['prinombre'] ?>" disabled /></td>
                <td colspan="1" align="left">Segundo Nombre<br> <input type="text" name="segnombre" size="35" maxlength="20" disabled value="<?php echo $datosalumno[0]['segnombre'] ?>"   /></td>
                 
            </tr>
            <tr>  


                <td colspan="1" align="left">Primer Apellido<br> <input type="text"  name="priape" size="35" maxlength="15" required="required" disabled value="<?php echo $datosalumno[0]['priapellido'] ?>"/></td>
                <td colspan="1" align="left">Segundo Apellido<br><input type="text"  name="segape" size="35" maxlength="20" disabled value="<?php echo $datosalumno[0]['segapellido'] ?>" /></td>
            </tr>
            <tr>  


                <td colspan="1" align="left">Direcci&oacute;n<br><input type="text" disabled  name="direc" size="35" maxlength="15" required="required" value="<?php echo $datosalumno[0]['direccion'] ?>" /></td>

                <td colspan="1" align="left">Fecha de nacimiento <br> <input type="date" disabled  name="fechanaci" size="35" maxlength="20" required="required" value="<?php echo $datosalumno[0]['fecha_naci'] ?>" /></td>
            </tr>
            <tr>



                <td colspan="0" align="left" >Ruta<br>



                    <select name="idruta" required disabled>
                        <option value>Seleccione</option>
                        <option value="1" SELECTED/>Sin ruta</option>
                        <?php
                        for ($i = 0; $i < count($dot); $i++) {
                            ?>

                            <option  <?php if ($datosalumno[0]['idruta']==$dot[$i]['idruta']) echo "SELECTED"  ?> value="<?php echo $dot[$i]['idruta'] ?>"/>Placa: <?php echo $dot[$i]['placa'] ?>, Conductor: <?php echo $dot[$i]['nombre'] ?> <?php echo $dot[$i]['apellido'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
                <td colspan="0" align="left" >Acudiente<br>



                    <select name="idacudiente" required disabled>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($det); $i++) {
                            ?>

                            <option <?php if ($datosalumno[0]['acudiente']==$det[$i]['identificacion']) echo "SELECTED"  ?> value=" <?php echo $det[$i]['identificacion'] ?>" /> <?php echo $det[$i]['identificacion'] ?> <?php echo $det[$i]['prinombre'] ?> <?php echo $det[$i]['priapellido'] ?></option>

                        <?php } ?>

                    </select>


                </td>
            </tr>
            <tr> 
                <td colspan="0" align="left" >Grupo sangu&iacute;neo <br>



                    <select name="gruposan" required disabled>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($grupo); $i++) {
                            ?>

                            <option <?php if ($datosalumno[0]['gruposan']==$grupo[$i]['idvalor']) echo "SELECTED"  ?> value=" <?php echo $grupo[$i]['idvalor'] ?>" /> <?php echo $grupo[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
                <td colspan="0" align="left" >Factor RH<br>



                    <select name="factorrh" required disabled>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($factor); $i++) {
                            ?>

                            <option <?php if ($datosalumno[0]['rh']==$factor[$i]['idvalor']) echo "SELECTED"  ?> value=" <?php echo $factor[$i]['idvalor'] ?>" /> <?php echo $factor[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>


            </tr> 
            <tr> 
                <td colspan="0" align="left" >Genero<br>



                    <select name="genero" required disabled>
                        <option value>Seleccione</option>
                        <?php
                        for ($i = 0; $i < count($genero); $i++) {
                            ?>

                            <option <?php if ($datosalumno[0]['genero']==$genero[$i]['idvalor']) echo "SELECTED"  ?> value=" <?php echo $genero[$i]['idvalor'] ?>" /> <?php echo $genero[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>






            <tr>
                <td colspan="0" align="left" > Descripci&oacute;n Enfermedades<br>
                    <textarea disabled name="descripcion" maxlength="1000" required="required" rows="4" cols="51"><?php echo $datosalumno[0]['desenf']?></textarea></td>
                <td colspan="0" align="left" >Restricciones<br>
                    <textarea disabled name="restri" maxlength="1000" required="required" rows="4" cols="51"><?php echo $datosalumno[0]['retri']?></textarea></td>


            </tr>
            <tr>
                <td colspan="3" align="center" >MATRICULA<br>
                </td>


            </tr>


            <tr>



                <td colspan="0" align="left" > 



                    <div align="center" >
                        <select name="nivel" disabled  onchange="javascript:Recargarcursos(this.value);" required>
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
                                <option <?php if ($datosniv==$data[$i]['idnivel']) echo "SELECTED"  ?> value="<?php echo $data[$i]['idnivel'] ?>"><?php echo $data[$i]['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </td><td>

                    <div  align="center" id="reloadMunicipio">
                        <select name="idcurso" id="id_estado" disabled>
                            <option value>Cursos</option>
                            <option selected="selected" value="<?php echo $datoscur2[0]['idcurso'] ?>"/> <?php echo $datoscur2[0]['nombre']  ?>  </option>
                        </select>
                    </div>
                </td>
            </tr>
           
            <tr>
                <td colspan="2"align="center">
                     <input type="button" onclick="location.href='home.php?acceso=123'" value="volver"/>
               
                  
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
