<?php

include("controlador/cparyval.php");

?>

<!--Correccion para valores-->

<br><br><br>

<center>
<form name="valores" action="" method="POST">
    <div id="tabint" class="display" style="width: 500px; margin-right: -150px ">
    <table border="1" width="500" cellspacing="0">
        <tr>
            <th colspan="2" align="center"><?php if($edit){ ?>EDITAR VALOR<?php }else{ ?>INSERTAR VALOR<?php } ?></th>
        </tr>
        
        <tr>
            <td align="center">Parametro:
            <?php if($edit){ ?>
                <?php echo $edite[0]['parametro'] ?><input type="hidden" name="idval" value="<?php $edite[0]['idvalor']?>">
           <?php }else{ ?>
                 <select name="parameter">
                    <option value="0">Seleccione</option>
                    <?php for($r=0;$r<count($parametro);$r++){ ?>
                    <option value="<?php echo $parametro[$r]['idparametro']; ?>" ><?php echo $parametros[$r]['nombre'];?></option>         
                    <?php } ?>
                </select>
                <?php } ?>
            </td>
            
            <td align="center"><?php if($edit){ ?><input type="text" name="valor" value="<?php echo $edite[0]['valor']; ?>" required maxlength="50"><?php }else{ ?><input type="text" name="valor" placeholder="Valor" required maxlength="50"><?php } ?></td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                <?php if(!$edit){ ?>
                <input type="submit" value="Guardar">
                <input type="button" value="Cancelar" onClick="location.href='home.php'">
                <?php }else{ ?>
                <input type="submit" value="Actualizar" ><input type="hidden" name="actu" value="actu"><input type = "hidden" name="idval" value="<?php echo $edite[0]['idvalor'] ?>">
                <input type="button" value="Aceptar" onClick="location.href='home.php?acceso=154'">
                <?php } ?>
            </td>
        </tr>
    </table>
    </div>
</form>
</center>


<br>
<center>

<form id="form2" name="form2" method="POST" action="" class="display" onSubmit="return confirm('Desea eliminar?')" style="width: 500px; margin-right: -148px;">

    <div align="center" id="tabint" style="width: 520px; margin-right: -10px ">
     
    
        <div  style=" width: 100%; float: center; " >
        
        <table id="example" class="display" cellspacing="0" width="500" style="margin-top: 700px; margin-top: -12px">
            
             <thead style="margin-top: 40px;">
            <tr>
               
            <th>Codigo</th>
            <th>Valor</th>
            <th>Parametro</th> 
            <th>Editar</th>
                       
            </tr>
             </thead>
       <tbody>
            <?php
            //Select
            //echo json_encode ($datos);
       
            for ($d = 0; $d < count($valores); $d++) {
                ?>
        
                <tr>

                    
                   <td align="center"><input type="submit" name="elim" value="<?php echo $valores[$d]['idvalor']; ?>"></td>
                   <td align="center"><?php echo $valores[$d]['valor']; ?></td>
                   <td align="center"><?php echo $valores[$d]['parametro']; ?></td>
                   <td align="center"><a href="home.php?acceso=154&edit=<?php echo $valores[$d]['idvalor']; ?>"><img src="image/editar.png" width="25" height="25"></a></td>
                 
                    
                    
     
                       

                </tr>
                
                
          
            <?php } ?>
                
               
   </tbody>
    <tr>
                    
                    <td colspan="4">Para eliminar, presione el numero del codigo.</td>
                    
                </tr>
          
        </table>
        <p>&nbsp; </p>
    </div>
        </div>
    
</form>
    <script>
       $(document).ready(function() {
            $("#example").DataTable();
        } );
    </script>
</center>


