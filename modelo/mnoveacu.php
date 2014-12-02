<<?php
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

    function alumno($pr) {
        $sql = "SELECT * FROM alumno WHERE identificacion='" . $pr . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function selnov($idalumno) {

        $sql = "SELECT nov.idnovedad,nov.titulo,nov.descripcion,nov.fecha,per.prinombre,per.priapellido,val.nombre as tipon,perf.nombre as perfil from novedad as nov inner join persona as per on nov.iddocente=per.identificacion inner join valor as val on nov.tiponov=val.idvalor inner join perfil as perf on nov.perfilid=perf.idperfil WHERE nov.idalumno='" . $idalumno . "' ORDER BY nov.idnovedad  DESC;";

        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function selnov1($idnov) {

        $sql = "SELECT nov.idnovedad,nov.titulo,nov.descripcion,val.nombre as tipon from novedad as nov  inner join valor as val on nov.tiponov=val.idvalor where idnovedad='" . $idnov . "';";

        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

}
?>