<?php
include ("../controlador/conexion.php");
session_start();
$usrForm = $_POST["username"];
$pswForm = $_POST["password"];
$perfil = $_POST["perfil"];

insper($usrForm, $pswForm, $perfil);
	
function insper($usrForm, $pswForm,$perfil){	
	$c = "SELECT * FROM  persona WHERE identificacion='".$usrForm."' AND pass ='".$pswForm."'";
	$conexionBD = new conexion();
	$conexionBD->conectarBD();
	$data=$conexionBD->ejeCon($c,0);
        
        $c = "SELECT * FROM  perxper WHERE identificacion='".$usrForm."' AND perfil ='".$perfil."' AND activo ='1'";
	$conexionBD = new conexion();
	$conexionBD->conectarBD();
	$datas=$conexionBD->ejeCon($c,0);
	
	$countR = count($data);
        $countR1 = count($datas);
	if ($countR == 1 && $countR1 == 1 ){
		$_SESSION["user"] = $data[0]['prinombre']." ".$data[0]['priapellido'];
		$_SESSION["idUser"] = $data[0]['identificacion'];
		$_SESSION["documento"] = isset($data[0]['identificacion']) ? $data[0]['identificacion']:NULL;
		$_SESSION["perfil"] = isset($datas[0]['perfil']) ? $datas[0]['perfil']:NULL;
		$_SESSION["autentificado"]= 10;
		echo "<script type='text/javascript'>window.location='../home.php';</script>";
	}else{
		echo "<script type='text/javascript'>window.location='../index.php?errorusuario=si';</script>";
	}
}
?>