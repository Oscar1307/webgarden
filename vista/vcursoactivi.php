<?php
include("controlador/ccursoactivi.php");
?>


<form name="listacurso" method="get" action="">
    <table border="1" width="400">
        
        <label><h3>CURSOS CON ACTIVIDADES</h3></label>
        
        
        <br>
        <br>
        
        <tr>
            <th>Nombre</th>
            <th>Nivel</th>            
            <th>Info. Actividades</th>
        </tr>
        
        
        <?php for($a=0;$a<count($cursosprof);$a++){ ?>
        <tr>
            <td align="center"><?php echo $cursosprof[$a]['curso']; ?></td>
            <td align="center"><?php echo $cursosprof[$a]['nivel']; ?></td>
            <td align="center"><a href="home.php?acceso=126&curso=<?php echo $cursosprof[$a]['numcurso']; ?>"><img src="image/lupa.png" width="25" height="25"></a></td>
        </tr>
        <?php } ?>
       
        
    </table>
</form>

<center>
    <table>
        
            <tr>
    <td colspan="3"><input type="button" value="VOLVER" onclick="location.href='home.php'"></button></td>
        </tr>
    </table>
    
    
</center>