<?php

include ("controlador/conexion.php");

class mactividadex {

    var $arr;

    function mactividadex() {
        
    }

    function cons($c) {
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $conexionBD->ejeCon($c, 1);
    }

   function selcurso($idcurso){
		$sql = "select curso.idcurso, curso.nombre, persona.prinombre, persona.priapellido,persona.identificacion, nivel.nombre as niv from curso inner join persona on curso.idpersona = persona.identificacion
                         inner join nivel on curso.idnivel = nivel.idnivel  WHERE idcurso='" . $idcurso . "' ;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
		
	}
    function selnivel($codnivel) {
        $sql = "select * from nivel  WHERE idnivel='" . $codnivel . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    function seldocente($identificacion) {
        $sql = "select * from persona  WHERE identificacion='" . $identificacion . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function valor($val) {
        $sql = "SELECT idvalor,nombre FROM valor WHERE idparametro='" . $val . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function insactividadex($descripcion,$nombre,$tipoacti,$idcurso,$iduser,$perfil) {
        $sql = "INSERT INTO `actividadex`(`nombre`, `descripcion`, `idcurso`, `idpersona`, `tipo_acti`, `perfilid`) VALUES ('" . $nombre . "','" . $descripcion . "','" .$idcurso. "','" . $iduser . "','" .$tipoacti . "','" .$perfil. "');";
        $this->cons($sql);
    }

    function upactividadex( $idactividadex, $descripcion, $nombre, $tipoacti, $idcurso) {
        $sql = "UPDATE actividadex SET nombre='" . $nombre . "', descripcion='" . $descripcion . "', tipo_acti='" . $tipoacti . "', idcurso='" . $idcurso . "' WHERE idactividadex ='" . $idactividadex . "';";
        $this->cons($sql);
    }

    function selactividadex($idcurso) {
     $sql = "SELECT acti.idactividadex, acti.nombre,acti.descripcion,acti.fecha1 ,acti.idpersona,per.prinombre,per.priapellido,cur.nombre as curso ,val.nombre as tipo, perf.nombre as perfil from actividadex as acti inner join persona as per on acti.idpersona=per.identificacion inner join curso as cur on acti.idcurso=cur.idcurso inner join valor as val on acti.tipo_acti=val.idvalor inner join perfil as perf on acti.perfilid=perf.idperfil WHERE acti.idcurso='".$idcurso."' order by acti.idactividadex desc ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
     function selactividadex1($idactividadex) {
      $sql = "SELECT acti.nombre,acti.descripcion,acti.fecha1 ,acti.idpersona,per.prinombre,per.priapellido,cur.nombre as curso ,val.nombre as tipo, perf.nombre as perfil from actividadex as acti inner join persona as per on acti.idpersona=per.identificacion inner join curso as cur on acti.idcurso=cur.idcurso inner join valor as val on acti.tipo_acti=val.idvalor inner join perfil as perf on acti.perfilid=perf.idperfil WHERE acti.idactividadex='".$idactividadex."';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function selmarca() {
        $sql = "SELECT  * FROM marcaruta ;";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

  
   
    /* function selapre(){
      $sql = "SELECT aprendiz.ndocapre, valor.nomval , nomapre, apeapre, telapre, valor.nomval, nlmiapre, valor.nomval, dirapre, emaapre, ubicacion.nomubi, fenaapre, nfic, llamaapre, teleapre, pass, perfil.nomper FROM aprendiz,valor,perfil,ubicacion WHERE aprendiz.tdocapre=valor.codval AND aprendiz.genapre=valor.nomval AND aprendiz.estcapre=valor.nomval AND aprendiz.codubi=ubicacion.codubi AND aprendiz.idper=perfil.idper ;";
      $conexionBD = new conexion();
      $conexionBD->conectarBD();
      $data = $conexionBD->ejeCon($sql,0);
      return $data;
      } */

    function delactividad($idactivi) {
        $sql = "DELETE FROM actividadex WHERE idactividadex='" . $idactivi . "';";
        $this->cons($sql);
    }

}

?>