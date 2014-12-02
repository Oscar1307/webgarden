<?php

include ("controlador/conexion.php");

class mnove {

    var $arr;

    function mnove() {
        
    }

    function cons($c) {
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $conexionBD->ejeCon($c, 1);
    }

    function valor($val) {
        $sql = "SELECT idvalor,nombre FROM valor WHERE idparametro='" . $val . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    function alumno($pr) {
        $sql = "SELECT * FROM alumno WHERE identificacion='" . $pr . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    function insnove($titulo ,$descripcion , $iddocente , $idalumno ,$tiponov, $perfilid) {
        $sql = "INSERT INTO `novedad` (`titulo`, `descripcion`, `iddocente`, `idalumno`, `tiponov`, `perfilid`) VALUES ('" . $titulo . "','" . $descripcion . "','" . $iddocente . "','" . $idalumno . "','" . $tiponov. "','" . $perfilid . "');";
       $this->cons($sql);
    }
    function selnov($idalumno ) {
       
        $sql = "SELECT nov.idnovedad,nov.titulo,nov.descripcion,nov.fecha,per.prinombre,per.priapellido,val.nombre as tipon,perf.nombre as perfil from novedad as nov inner join persona as per on nov.iddocente=per.identificacion inner join valor as val on nov.tiponov=val.idvalor inner join perfil as perf on nov.perfilid=perf.idperfil WHERE nov.idalumno='".$idalumno."' ORDER BY nov.idnovedad  DESC;";
        
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    }
    function selnoves($idalumno,$iddocente ) {
       
        $sql = "SELECT nov.idnovedad,nov.titulo,nov.descripcion,nov.fecha,per.prinombre,per.priapellido,val.nombre as tipon,perf.nombre as perfil from novedad as nov inner join persona as per on nov.iddocente=per.identificacion inner join valor as val on nov.tiponov=val.idvalor inner join perfil as perf on nov.perfilid=perf.idperfil WHERE nov.idalumno='".$idalumno."' and nov.iddocente='".$iddocente."' ORDER BY nov.idnovedad  DESC;";
        
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    }
    function delnove($numnove){
		$sql =  "DELETE FROM novedad WHERE idnovedad='".$numnove."';";
		$this->cons($sql);
	}
     function selnov1($idnov) {
       
        $sql = "SELECT * from novedad where idnovedad='".$idnov."';";
        
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    } 
    
    
    function upnove($idnovedad , $titulo , $descripcion , $tiponov ){
		$sql = "UPDATE novedad SET titulo='".$titulo."', descripcion='".$descripcion."', tiponov='".$tiponov."' WHERE idnovedad ='".$idnovedad."';";
		$this->cons($sql);
	}

}

?>