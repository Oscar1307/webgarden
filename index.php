<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="icon" type="image/png" href="image/logo-webgarden.png" />
<link rel="stylesheet" href="css/style.css" type="text/css" />

<title>..::::Webgarden::::..</title>
</head>
<body style="background:#89B0E6;">
<center>
<div id="contenedor">
	<div id="encabe">
    <?php
		include("vista/cabezote.php");
	?>
    </div>
 
    
	<div id="index" class="bodytext">
        <?php 
			$Pac = isset($_GET["pac"]) ? $_GET["pac"]:NULL;
			if (is_null($Pac)){
				include ("vista/vingreso.php");
			}else if ($Pac=="131"){
				include ("vista/vcontra.php");
			}
        ?>
	</div>
    
	<div id="piec">
	<?php
    include("vista/pie.php");
    ?>
    </div>
</div>
</center>
</body>
</html>