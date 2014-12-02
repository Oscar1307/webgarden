<?php
include ("controlador/ccamfot.php");
?>

<center>
    <form name="form1" action="" method="post"  onSubmit="return confirm('Por  favor primero  verifique  los datos ingresados  antes de hacer clic en  !aceptar!')" enctype="multipart/form-data" >

        <table width="700"  border="0" cellpadding="6">
            <tr>
                <td colspan="3" align="center">
                    <h2>Cambiar foto</h2>
                     <input type="hidden" name="idalumno" value="<?php echo $datosalumno[0]['identificacion']?>"/>
                </td>

            </tr>
             <tr>  


                 <td colspan="1" align="center"><?php echo $datosalumno[0]['identificacion']?><br><?php echo $datosalumno[0]['prinombre']?><br><?php echo $datosalumno[0]['priapellido']?></td>
              
            </tr>
            <tr>
                <td colspan="3" align="center"><output id="list" width='100' height='110'><img src='<?php echo $datosalumno[0]['foto'] ?>' width='100' height='110'/></output></td>
            </tr>
            <tr>

                <td colspan="3" align="center"><input type="file" name="files" id="files" title="Solo se admiten fotos con extension jpg y png" name="files" required="required"/></td>


            </tr>
           
            <tr>
                <td colspan="3"align="center">
                     <input type="button" onclick="location.href='home.php?acceso=109'" value="volver"/>
                    <input  type="submit" value="Cambiar" onclick="comprobacion(this.form, this.form.files.value)"/>
                  
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
