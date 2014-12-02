<?php

include("controlador/conexion.php");

class mparyval {

    function mparyval() {
        
    }

    function selparametro() {
        $sql = "select * from parametro";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function inspara($param) {
        $sql = "insert into parametro (nombre) values ('".$param ."')";
        $this->cons($sql);
    }
    
    
    function elimiparametro($delete){
        $sql = "delete from parametro where idparametro ='".$delete."' ";
        $this->cons($sql);
    }    
    
    
    
    function cons($c) {
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $conexionBD->ejeCon($c, 1);
    }
    
    function updparametro($param, $pr){
        $sql = "update parametro set nombre = '".$param."' where idparametro = '".$pr."' ";
        $this->cons($sql);
    }

    function selparaedit($edit){
        $sql = "select * from parametro where idparametro = '".$edit."';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
    function seleconfirm($eliminar){
        $sql="select * from valor where idparametro = '".$eliminar."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
    
    //Correccion para valores
    
    
    function parametros(){
        $sql = "select idparametro, nombre from parametro";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
      
    }
    
    
    function insertavalor($valor, $parameter){
        $sql = "insert into valor (nombre, idparametro) values ('".$valor."', '".$parameter."')";
        $this->cons($sql);
    }
   
    
    function selvalores(){
        $sql="select valor.idvalor, valor.nombre as valor, parametro.nombre as parametro from valor inner join parametro on valor.idparametro = parametro.idparametro";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
        
    }
    
    function selevalorpaeditar($edit){
        $sql="select valor.idvalor, valor.nombre as valor, parametro.nombre as parametro, parametro.idparametro as idpar from valor inner join parametro on valor.idparametro = parametro.idparametro where idvalor = '".$edit."'";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
    }
    
    
    function editarvalor($idval, $valor){
        $sql="update valor set nombre ='".$valor."' where idvalor = '".$idval."' ";
        $this->cons($sql);
    }
    
    function eliminavalor($elim){
        $sql = "delete from valor where idvalor ='".$elim."'";
        $this->cons($sql);
    }
    
    /*Validacion para eliminar o editar un valor*/
    
    function selvaloral($valor){
        $sql = "select * from alumno where genero = '".$valor."'   or rh = '".$valor."'     
        or tipodoc = '".$valor."' or gruposan = '".$valor."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
        
    }
    
    function selpersoval($valor){
        $sql = "select * from persona where genero = '".$valor."' or tipodoc = '".$valor."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
        
    }
    
    
    function selactivival($valor){
        $sql = "select * from actividadex where tipo_acti = '".$valor."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
        
        
    }
    
    
    function selnoveval($valor){
        $sql = "select * from novedad where tiponov ='".$valor."' ";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data; 
    }
    
}

?>
