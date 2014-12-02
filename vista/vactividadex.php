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
    <form name="form1" action="" method="post" onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')"  >

        <table width="700" border="0">
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

                            <option value=" <?php echo $dot[$i]['idvalor'] ?>" /> <?php echo $dot[$i]['nombre'] ?> </option>

                        <?php } ?>

                    </select>


                </td>
            </tr>
            <tr>
                <td align="left">Nombre Actividad</td>

                <td colspan="2"> <input type="text" placeholder="" name="nombreac" size="55" maxlength="100" required="required"  /></td>
            </tr>
            <tr>
                <td align="left">Descripci&oacute;n</td> 
                <td colspan="2"><textarea name="descripcion" maxlength="1000" required="required" rows="4" cols="51"></textarea></td>
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
                                <option value="<?php echo $data[$i]['idnivel'] ?>"><?php echo $data[$i]['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </td><td>

                    <div  align="left" id="reloadMunicipio">
                        <select name="idcurso" id="id_estado">
                            <option value>Cursos</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" >
                    <input type="reset" value="limpiar" />
                    <input type="submit"  value="Guardar"   />
                </td>
            </tr>


        </table>
    </form>



    <form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('Desea eliminar?')">
   <div style="width: 700px">
       
        <div align="center" id="tabint">
            <table id="listaactivi" width="700px" border="1" cellspacing="0" class="display" >

                <thead>
                <tr>
                    <th>No.actividad<input name="acceso" type="hidden" id="acceso" value="104" /></th>

                 <th>Tipo actividad</th>
                   <th>Nombre actividad</th>
                    <th>Curso</th>
                  <th>Responsable</th>
                   <th>Fecha de publicaci&oacute;n</th>
                   <th>Ver o Editar</th>
                </tr>
                </thead>
                  <tbody>
                <?php
//Select
//echo json_encode ($datos);
                
                for ($i = 0; $i < count($datos); $i++) {
                    ?>
                    <tr>
                        <td><input type="submit" name="del" value= <?php echo $datos[$i]['idactividadex'] ?>></td>
                         <td> <?php echo $datos[$i]['tipo'] ?></td>  
                        <td> <?php echo $datos[$i]['nombre']  ?></td>  
                         <td><?php echo $datos[$i]['curso'] ?></td> 
                          <td><?php echo $datos[$i]['perfil'] ?><br><?php echo $datos[$i]['prinombre'] ?> <?php echo $datos[$i]['priapellido'] ?></td>
                         <td><?php echo $datos[$i]['fecha1'] ?></td> 
                         <td align="center"><a href="home.php?pr=<?php echo $datos[$i]['idactividadex'] ?>&acceso=104&up=34"><img border=0  src="image/editar.png" width="25" height="25" /></a></td>
                    </tr>
                <?php }?>
                
                       </tbody>

                <tr>
                    <td colspan=17 class="style2">Para eliminar presione el n&uacute;mero del c&oacute;digo.</td>
                </tr>
            </table>
            <p>&nbsp; </p>
             </div>
        </div>
    </form>
     <script>
       $(document).ready(function() {
            $("#listaactivi").DataTable();
             //alert("Actividad extracurricular Actualizada  con \u00e9xito");
        } );
    </script>

</center>
