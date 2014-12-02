<?php
include ("controlador/conexion.php");
class mnivel{
	var $arr;
	function  mnivel(){}
	
	
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
        
        function selcursos($codnivel){
		$sql = "select * from curso  WHERE idnivel='".$codnivel."';";
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
	function insnivel($nombre,$descripcion){
		$sql = "INSERT INTO  nivel (nombre,descripcion) values ('".$nombre."','".$descripcion."');";
		$this->cons($sql);
		
	}
	function upnivel($nombre ,$descripcion,$idnivel ){
		$sql = "UPDATE nivel SET nombre='".$nombre."', descripcion='".$descripcion."' WHERE idnivel ='".$idnivel."';";
		$this->cons($sql);
	}
	function selnivel(){
		$sql = "select * from nivel";
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
	function selnivel1($idnivel){
		$sql = "SELECT * FROM nivel where idnivel='".$idnivel."';";
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
	function delnivel($numnivel){
		$sql =  "DELETE FROM nivel WHERE idnivel='".$numnivel."';";
		$this->cons($sql);
	}
       
      
       
}
?>