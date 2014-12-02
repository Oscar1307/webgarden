<?php
include("controlador/cpersona.php");
?>





<script>


    function comprobacion(formulario, archivo){
        extpermit = new Array(".jpg",".png");
        //mensaje = "";
        if(archivo){
            exten = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
            permitida = false;
	
            for(var i = 0;i<extpermit.length;i++){
	
                if(extpermit[i] == exten){
                    permitida = true;
                    break;
	
                }
		
            }
	
            if(!permitida){
                mensaje = "Las extensiones de las fotos solo pueden ser "+extpermit.join();
                event.preventDefault();
                //return false;
            }else{
	
                formulario.submit();
                return 1;
		
            }
	  
        }	
        alert(mensaje);
        return 0;	
    } 

</script>


<form name="form1" method="post" action="" enctype="multipart/form-data" >

    <table width="500" align="center" cellpadding="8">







        <tr>
            <td colspan="5" align="center"><?php if ($pr) { ?>EDITAR USUARIO<?php } else { ?>INGRESAR USUARIO<?php } ?></td>

        </tr>
          
        <tr>
            <td colspan="5" align="center"><output id="list"><?php if ($pr) { ?> <img src=<?php echo $peredit[0]['foto'] ?> width='100' height='110'/> <?php } else { ?> <img src='image/perfil.png' width='100' height='110'/><?php } ?></output></td>
            
        </tr>

        <tr>
            
            <td colspan="5" align="center"><?php if($pr){    }else{?><input type="file" id="files" title="Solo se admiten fotos con extension jpg y png" name="files" /><?php } ?></td>
        </tr>
        
        
        <tr>
            

            <td align="center">Tipo de documento:
                <select name = "tipdocu">
<?php
for ($a = 0; $a < count($tipo); $a++) {
    ?>

                        <option <?php if ($pr)
                        if ($peredit[0]['tipodoc'] == $tipo[$a]['idvalor'])
                            echo "SELECTED";
    ?> value="<?php echo $tipo[$a]['idvalor'] ?>">
                        <?php echo $tipo[$a]['nombre']; ?></option>

                        <?php } ?>
                </select>
            </td>
            <td align="center"><?php if ($pr){ echo "No. documento: ".$peredit[0]['identificacion']; } ?><?php if(!$pr){ ?><input type="text" name="nomdocu" required="required"  placeholder="No. Documento" maxlength="11" pattern="[0-9]{1,11}" title="Este campo solo admite n&uacute;meros"><?php } ?></td>
            
        
        </tr>

        <tr>
            
            
            <td align="center"><input type="text" name="prinomb" required="required" value="<?php if ($pr) echo $peredit[0]['prinombre'] ?>" placeholder="Primer nombre" maxlength="15"></td>
            <td align="center"><input type="text" name="segnomb" value="<?php if ($pr) echo $peredit[0]['segnombre'] ?>" placeholder="Segundo nombre" maxlength="20"/></td>
        </tr>

        <tr>
            
            <td align="center"><input type="text" name="priapellido" required="required" value="<?php if ($pr) echo $peredit[0]['priapellido'] ?>" placeholder="Primer apellido" maxlength="15"/></td>

            <td align="center"><input type="text" name="segapellido" value="<?php if ($pr) echo $peredit[0]['segapellido'] ?>" placeholder="Segundo apellido" maxlength="20"/></td>
            
        </tr>

        <tr>

            
            <td align="center">Genero:

                <select name = "genero">
<?php
for ($b = 0; $b < count($gene); $b++) {
    ?>



                        <option  <?php if ($pr)
                        if ($peredit[0]['idvalor'] == $gene[$b]['idvalor'])
                            echo "SELECTED"; 
    ?>  value="<?php echo $gene[$b]['idvalor'] ?>">
    <?php echo $gene[$b]['nombre']; ?>
                        </option>







<?php } ?>
                </select>





            </td>



            <td align="center"><input type="text" name="direcc" required="required" value="<?php if ($pr) echo $peredit[0]['direccion'] ?>" placeholder="Direccion" maxlength="15"/></td>
            
        </tr>

        <tr>

            
            <td align="center"><input type="text" name="telef" required="required" value="<?php if ($pr) echo $peredit[0]['telefono'] ?>" placeholder="Telefono" maxlength="15" pattern="[0-9]{1,15}" title="Este campo solo admite n&uacute;meros"  /></td>
		<td align="center"><input type="text" name="email" required="required" value="<?php if ($pr) echo $peredit[0]['email'] ?>" placeholder="E-mail" maxlength="100"/></td>
            
        </tr>

        <tr>

            <td colspan="2" align ="center"> <?php if (!$pr){  ?><input type="password" name="pass" required="required" placeholder="Password" maxlength="200"/>
<?php } ?></td>
            
            

        </tr>

        <tr>
            <td colspan="5" align="center">
<?php if (!$pr) { ?>
                    <input type = "Submit" name="Submit" value = 'CREAR' onclick="comprobacion(this.form, this.form.files.value)"/>
                    <input type = 'reset' value = 'LIMPIAR' />
                <?php } else { ?>
                    <input type = "Submit" name="Submit" value = 'ACTUALIZAR' onclick="comprobacion(this.form, this.form.files.value)"/>
                    <input type="hidden" name="actua" value="actua" />
                    <input type="hidden" name="codi" value="<?php echo $peredit[0]['identificacion'] ?>" />
                    <input type = 'button' value = 'CANCELAR' onClick="location.href='home.php?acceso=113'" />
<?php } ?>
            </td>
        </tr>



    </table>
</form>




<br>

<br>

<script>


    function archivo (evt){
	
        var files = evt.target.files;
        for(var i = 0, f; f = files[i]; i++){
            if(!f.type.match('image.*')){
	
                continue;
	   
            }
	
            var reader = new FileReader();
            reader.onload = (function(theFile){
	
                return function(e){
		 
                    document.getElementById("list").innerHTML = ['<img class="thumb" width="100" height="110" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
		 
                };
	
            })(f);
	    
            reader.readAsDataURL(f);
	  
        }
	  
	  
    }
    document.getElementById('files').addEventListener('change', archivo, false);
</script>


<!--
<tr>
<td colspan="5" align="center">Seleccione los perfiles que tendra el usuario. <br />
Acudiente<input type="checkbox" name ="acudiente" />
Profesor<input type="checkbox" name ="profesor" />
Conductor<input type="checkbox" name ="conductor" />
Administrador<input type="checkbox" name ="admini" />
</td>
</tr>-->
