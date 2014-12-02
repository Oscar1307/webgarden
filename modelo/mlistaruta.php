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
        function selrutas($identificacion){
		$sql = "SELECT ru.idruta,ru.modelo,ru.placa, ru.npuesto, ru.idconductor, us.prinombre as nombre,us.priapellido as apellido , ru.modelo ,ma.nombre as marca

FROM ruta as ru inner join persona as us on  ru.idconductor=us.identificacion 
inner join marcaruta as ma  on ru.idmarca=ma.idmarca WHERE idconductor='".$identificacion."' ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
        function selalum($idruta) {
     $sql = "select alu.identificacion,alu.idruta,alu.acudiente,alu.idcurso,alu.foto,alu.direccion ,alu.prinombre,alu.priapellido,cur.nombre curso ,val1.nombre as rh ,val2.nombre as grupos from alumno as alu inner join curso as cur on alu.idcurso=cur.idcurso inner join valor as val1 on alu.rh=val1.idvalor inner join valor as val2 on alu.gruposan=val2.idvalor where alu.idruta='" .$idruta. "'; ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
      function seldocente($identificacion) {
     $sql = "select * from persona where identificacion='" .$identificacion. "'; ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
      function upalum($identificacion) {
        $sql = "UPDATE alumno SET idruta='1'WHERE identificacion ='" . $identificacion . "';";
        $this->cons($sql);
    }
     function selalumno($identificacion) {
     $sql = "select * from alumno where identificacion='" .$identificacion. "'; ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
     function selruta1($idruta){
		$sql = "SELECT ru.idruta,ru.modelo,ru.placa, ru.npuesto, ru.idconductor, us.prinombre as nombre,us.priapellido as apellido , ru.modelo ,ma.nombre as marca

FROM ruta as ru inner join persona as us on  ru.idconductor=us.identificacion 
inner join marcaruta as ma  on ru.idmarca=ma.idmarca WHERE idruta='".$idruta."' ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
       
       
}
        

