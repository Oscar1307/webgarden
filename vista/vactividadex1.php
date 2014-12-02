<?php
include ("controlador/cactividadex.php");
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
    <form name="form1" action="home.php?acceso=104" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')"  >

        <table width="700" border="0" >
            <tr>
                <td colspan="3" align="center">
                    <h2>Actividades extracurriculares</h2>
                </td>

            </tr>
            <tr> 
                <td colspan="0" align="left" > tipo de actividad  </td>



                <td colspan="2">

                    <select name="tipoacti" required >
                        <option value>Seleccione </option>
                        <?php
                        for ($i = 0; $i < count($dot); $i++) {
                            ?>

                            <option <?php if ($datos1[0]['tipo_acti']==$dot[$i]['idvalor']) echo "SELECTED"  ?> value=" <?php echo $dot[$i]['idvalor'] ?>" /> <?php  echo $dot[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
            </tr>
            <tr>
                <td align="left">Nombre Actividad</td>

                <td colspan="2"> <input type="text" placeholder="" name="nombreac" size="55" maxlength="100" required="required" value="<?php echo $datos1[0]['nombre'] ?>"  /></td>
                 <input type="hidden" name="actu" value="actu"/>
                 <input type="hidden" name="idactividadex" value="<?php echo $datos1[0]['idactividadex']?>"
            </tr>
            <tr>
                <td align="left">Descripci&oacute;n</td> 
                <td colspan="2"><textarea name="descripcion" maxlength="1000" required="required" rows="4" cols="51"><?php echo $datos1[0]['descripcion']?></textarea></td>
            </tr>



            <tr>


                <td>
                    Curso<br> 
                </td>
                <td>

                    <div align="left" >
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
                               <option  <?php if ($datosniv==$data[$i]['idnivel']) echo "SELECTED"  ?> value="<?php echo $data[$i]['idnivel'] ?>"><?php echo $data[$i]['nombre'] ?></option>
                          
  <?php } ?>
                        </select>
                    </div>
                </td><td>

                    <div  align="left" id="reloadMunicipio">
                        <select name="idcurso" id="id_estado">
                            <option value>Cursos</option>
                             <option selected="selected" value="<?php echo $datoscur2[0]['idcurso'] ?>"/> <?php echo $datoscur2[0]['nombre']  ?>  </option>
                            
                        </select>
                    </div>
                </td>
            </tr>
             <tr>
             
        	<td colspan="3" align="center" >
                      <input type="button" onclick="location.href='home.php?acceso=104'" value="volver"/>
            	<input type="submit"  value="Editar"/>
            </td>
        </tr>


        </table>
    </form>
</center>