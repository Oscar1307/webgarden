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
        function selalumno($val){
		$sql = "SELECT * FROM `alumno` WHERE idruta='".$val."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	
	function valor($val){
		$sql = "SELECT codval,nomval FROM valor WHERE codpar='".$val."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function insruta($placa,$npuesto,$idconductor,$modelo,$idmarca){
		$sql = "INSERT INTO  ruta (placa,npuesto,idconductor,modelo,idmarca) values ('".$placa."','".$npuesto."','". $idconductor."','". $modelo."','". $idmarca."');";
		$this->cons($sql);
		
	}
	function upruta($placa , $npuesto , $idconductor , $idruta ,$modelo ,$idmarca ){
		$sql = "UPDATE ruta SET placa='".$placa."', npuesto='".$npuesto."', idconductor='".$idconductor."' , modelo='".$modelo."', idmarca='".$idmarca."' WHERE idruta ='".$idruta."';";
		$this->cons($sql);
	}
	function selruta(){
		$sql = "SELECT ru.idruta, ru.placa, ru.npuesto, ru.idconductor, us.prinombre as nombre,us.priapellido as apellido , ru.modelo ,ma.nombre as marca

FROM ruta as ru inner join persona as us on  ru.idconductor=us.identificacion 
inner join marcaruta as ma  on ru.idmarca=ma.idmarca where idruta<>1 ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
        function selmarca(){
		$sql = "SELECT  * FROM marcaruta ;";
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
	function existe($ndocapre){
		$sql = "SELECT  * FROM aprendiz WHERE ndocapre='".$ndocapre."' ";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function selapren($filtro,$rvalini,$rvalfin){
		$sql = "select ap.ndocapre, va1.nomval as tdoc, ap.nomapre, 
ap.apeapre,ap.telapre ,va2.nomval as genero, 
ap.nlmiapre,ap.llamaapre,ap.dirapre,ap.teleapre,ap.emaapre,ap.fenaapre ,ap.nfic,va3.nomval as est_civil, ubi.nomubi as ubicacion 
,per.nomper as perfil

from aprendiz as ap inner join valor as va1 on 
ap.tdocapre=va1.codval inner join  valor as va2  on 
ap.genapre=va2.codval 
inner join valor as va3 on  ap.estcapre=va3.codval  inner join 
ubicacion as ubi on ap.codubi=ubi.codubi 
 inner join perfil as per on ap.idper=per.idper  and ap.idper=2 ";
                if($filtro)
			$sql.= " WHERE ap.ndocapre LIKE '%".$filtro."%'";
		$sql .= "  ORDER BY ap.ndocapre LIMIT ".$rvalini.", ".$rvalfin;
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
        
	function seladmin($filtro,$rvalini,$rvalfin){
		$sql = "select ap.ndocapre, va1.nomval as tdoc, ap.nomapre, 
ap.apeapre,ap.telapre ,va2.nomval as genero, 
ap.nlmiapre,ap.llamaapre,ap.dirapre,ap.teleapre,ap.emaapre,ap.fenaapre ,ap.nfic,va3.nomval as est_civil, ubi.nomubi as ubicacion 
,per.nomper as perfil

from aprendiz as ap inner join valor as va1 on 
ap.tdocapre=va1.codval inner join  valor as va2  on 
ap.genapre=va2.codval 
inner join valor as va3 on  ap.estcapre=va3.codval  inner join 
ubicacion as ubi on ap.codubi=ubi.codubi 
 inner join perfil as per on ap.idper=per.idper  and ap.idper=1 ";
                if($filtro)
			$sql.= " WHERE ap.ndocapre LIKE '%".$filtro."%'";
		$sql .= "  ORDER BY ap.ndocapre LIMIT ".$rvalini.", ".$rvalfin;
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	/*function selapre(){
		$sql = "SELECT aprendiz.ndocapre, valor.nomval , nomapre, apeapre, telapre, valor.nomval, nlmiapre, valor.nomval, dirapre, emaapre, ubicacion.nomubi, fenaapre, nfic, llamaapre, teleapre, pass, perfil.nomper FROM aprendiz,valor,perfil,ubicacion WHERE aprendiz.tdocapre=valor.codval AND aprendiz.genapre=valor.nomval AND aprendiz.estcapre=valor.nomval AND aprendiz.codubi=ubicacion.codubi AND aprendiz.idper=perfil.idper ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}*/
	function delruta($nruta){
		$sql =  "DELETE FROM ruta WHERE idruta='".$nruta."';";
		$this->cons($sql);
	}
        function lista($ndocapre){
		$sql = "SELECT  * FROM aprendiz WHERE ndocapre='".$ndocapre."' ";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
        function ubicacion($ndocapre){
		$sql = "SELECT  * FROM ubicacion WHERE codubi='".$ndocapre."' ";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
       
}
?>