<?php

include("controlador/conexion.php");

class malumno {

    var $arr;

    function malumno() {
        
    }
    function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}

    

    //usuada 
    function valor($idvalor) {
        $sql = "select idvalor, nombre from valor where idparametro='" . $idvalor . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    //usuada 
    function selruta() {
        $sql = "SELECT ru.idruta, ru.placa, ru.npuesto, ru.idconductor, us.prinombre as nombre,us.priapellido as apellido , ru.modelo ,ma.nombre as marca

FROM ruta as ru inner join persona as us on  ru.idconductor=us.identificacion 
inner join marcaruta as ma  on ru.idmarca=ma.idmarca;";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    //usuada 
    function seldoc() {
        $sql = "SELECT per.identificacion,per.prinombre,per.priapellido,perf.activo,perf.perfil,perf.identificacion as identidad FROM persona as per inner join perxper as perf on per.identificacion=perf.identificacion where perf.perfil=1 AND perf.activo=1";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    //usuada 
    function selniveled() {
        $sql = "SELECT * from nivel";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    //usuada 
    function insalumno($ndocapre, $prinombre, $segnombre, $priape, $segape, $direc, $descripcion, $restri, $idruta, $idacudiente, $rutaDestino, $genero, $nivel, $factorrh, $tipdocu, $fechanaci, $gruposan) {
        $sql = "INSERT INTO `alumno` VALUES ('" . $ndocapre . "','" . $prinombre . "','" . $segnombre . "','" . $priape . "','" . $segape . "','" . $direc . "','" . $descripcion . "','" . $restri . "','" . $idruta . "','" . $idacudiente . "','" . $rutaDestino . "','" . $genero . "','" . $nivel . "','" . $factorrh . "','" . $tipdocu . "','" . $fechanaci . "','" . $gruposan . "')";
        $this->cons($sql);
    }
    //usuada 
    function selexit($iddocumento) {
        $sql = "SELECT * from alumno where identificacion='" .$iddocumento. "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    //usuada 
    function selalum($idacudiente) {
     $sql = "select alu.identificacion,alu.idcurso,alu.foto,alu.direccion ,alu.prinombre,alu.priapellido,cur.nombre curso ,val1.nombre as rh ,val2.nombre as grupos from alumno as alu inner join curso as cur on alu.idcurso=cur.idcurso inner join valor as val1 on alu.rh=val1.idvalor inner join valor as val2 on alu.gruposan=val2.idvalor where acudiente='" .$idacudiente. "'; ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
  
     //usuada 
    function selnovedad($iddocumento) {
        $sql = "SELECT * from novedad where idalumno='" .$iddocumento. "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
      //usuada 
    function delalumno($iddocumento) {
        $sql = "delete from alumno where identificacion='" .$iddocumento. "';";
         $this->cons($sql);
      
    }
     //usuada 
    function selalum1($iddocumento) {
        $sql = "SELECT * from alumno where identificacion='" .$iddocumento. "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    //usada 
    function selcurso($codcurso) {
        $sql = "select * from curso  WHERE idcurso='" . $codcurso . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
     
    
     //usada
     function selnivel($codnivel) {
        $sql = "select * from nivel  WHERE idnivel='" . $codnivel . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
     //usada
     function upalumno($idalumno, $prinombre, $segnombre, $priape, $segape, $direc, $descripcion, $restri, $idruta, $idacudiente, $genero, $nivel, $factorrh, $tipdocu, $fechanaci, $gruposan) {
        $sql = "UPDATE alumno SET prinombre='".$prinombre."', segnombre='".$segnombre."', priapellido='".$priape."' , segapellido='".$segape."', direccion='".$direc."', desenf='".$descripcion."', retri='".$restri."', idruta='".$idruta."', acudiente='".$idacudiente."', genero='".$genero."', idcurso='".$nivel."', rh='".$factorrh."', tipodoc='".$tipdocu."', fecha_naci='".$fechanaci."', gruposan='".$gruposan."' WHERE identificacion ='".$idalumno."';";
        $this->cons($sql);
    }
    

}
