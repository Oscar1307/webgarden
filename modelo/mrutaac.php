<?php
include ("controlador/conexion.php");
class mruta{
	var $arr;
	function mruta(){}
	
	
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
        
	
	
	
	function selruta($idruta){
		$sql = "SELECT ru.idruta, ru.placa, ru.npuesto, ru.idconductor, us.prinombre as nombre,us.priapellido as apellido , ru.modelo ,ma.nombre as marca

FROM ruta as ru inner join persona as us on  ru.idconductor=us.identificacion 
inner join marcaruta as ma  on ru.idmarca=ma.idmarca WHERE idruta='".$idruta."' ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
       
	function selruta1($idruta){
		$sql = "SELECT * FROM ruta where idruta='".$idruta."' ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function selper(){
		$sql = "SELECT per.identificacion,per.prinombre,per.priapellido,perf.activo,perf.perfil,perf.identificacion as identidad FROM persona as per inner join perxper as perf on per.identificacion=perf.identificacion where perf.perfil=4 AND perf.activo=1";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function selconduc($identificacion){
		$sql = "SELECT  * FROM persona WHERE identificacion='".$identificacion."' ";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	
	
	
       
}
?>