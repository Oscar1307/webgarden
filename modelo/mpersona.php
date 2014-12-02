<?php

include("controlador/conexion.php");

class mpersona {

    var $arr;

    function mpersona() {
        
    }

    function inspersona($tipdocu, $nomdocu, $prinomb, $segnomb, $priapellido, $segapellido, $genero, $direcc, $telef, $email, $pass, $rutaDestino) {

        $sql = "insert into persona(identificacion, prinombre, segnombre, priapellido, segapellido, telefono, direccion, foto, pass, genero, email, tipodoc) values('" . $nomdocu . "','" . $prinomb . "', '" . $segnomb . "', '" . $priapellido . "', '" . $segapellido . "', '" . $telef . "', '" . $direcc . "', '" . $rutaDestino . "', '" . $pass . "','" . $genero . "' ,'" . $email . "', '" . $tipdocu . "');";
        $this->cons($sql);
    }
    
    function insperdesact($nomdocu, $perfil, $activo){
        $sql = "insert into perxper (identificacion, perfil, activo) values ('".$nomdocu."','".$perfil."', '".$activo."');";
        $this->cons($sql);
    }

    function selcoddocu() {
        $sql = "select idvalor, nombre from valor where idparametro=5";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function selgene() {
        $sql = "select idvalor, nombre from valor where idparametro=1";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function cons($c) {
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $conexionBD->ejeCon($c, 1);
    }

    function seliperso() {
        $sql = "select identificacion,prinombre, priapellido,telefono,direccion,email, foto from persona where identificacion <> 1 order by priapellido;";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
    function inforperfiles(){
        $sql = "select perxper.identificacion, perfil.nombre, persona.priapellido from perfil inner join perxper on perfil.idperfil = perxper.perfil inner join persona on perxper.identificacion = persona.identificacion  where perxper.activo = 1 order by persona.priapellido";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }
    
    
    
    
    

    function selpersototal($pr) {
        $sql = "select persona.identificacion, persona.prinombre, persona.segnombre, persona.priapellido, persona.segapellido, persona.telefono, persona.direccion, persona.foto, persona.genero, persona.email, persona.tipodoc, persona.pass,valor.idvalor, valor.nombre from persona inner join valor on persona.genero = valor.idvalor where identificacion='" . $pr . "';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

  
    function updpersona($tipdocu, $prinomb, $segnomb, $priapellido, $segapellido, $genero, $direcc, $telef, $email, $codi) {
        $sql = "UPDATE persona SET prinombre='" . $prinomb . "', segnombre='" . $segnomb . "', priapellido='" . $priapellido . "', segapellido ='" . $segapellido . "', telefono ='" . telef . "', direccion = '" . $direcc . "', genero = '" . $genero . "', email = '" . $email . "', tipodoc = '" . $tipdocu . "' WHERE
		      identificacion = '" . $codi . "';";
        $this->cons($sql);
    }

    function selepersperfil($cedula) {
        $sql = "select perfil.nombre, persona.prinombre, persona.priapellido, perxper.activo, perxper.idperxper from persona inner join perxper on persona.identificacion = perxper.identificacion 
inner join perfil on perxper.perfil = perfil.idperfil
where perxper.identificacion='".$cedula."';";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
    }

    function insperfil($cedula, $perfil) {
        $sql = "insert into perxper (identificacion, perfil, activo) values('" . $cedula . "','" . $perfil . "',1)";
        $this->cons($sql);
    }
    
    
   function insperfildos($cedula, $perfil) {
        $sql = "insert into perxper (identificacion, perfil, activo) values('" . $cedula . "','" . $perfil . "',2)";
        $this->cons($sql);
     }
    
    
  
    
    
    
    

    function seleperxper($perfil, $cedula){
        $sql = "select perfil from perxper where identificacion='".$cedula."' and perfil ='".$perfil."'";
        $conexionBD = new conexion();
        $conexionBD->conectarBD();
        $data = $conexionBD->ejeCon($sql, 0);
        return $data;
        
    }
    
    
  function actuperf($codigo, $perfil){   
      $sql ="update perxper set activo ='".$perfil."' where idperxper ='".$codigo."'; ";
      $this->cons($sql);
  }
    
  
  function perfilesactiva(){
      $sql = "select * from perxper where identificacion = '".$cedula."';";
      $conexionBD = new conexion();
      $conexionBD->conectarBD();
      $data = $conexionBD->ejeCon($sql, 0);
      return $data;
  }
    
  
  //funciones para seleccionar si de las personas dependen otras tabla
  
  
  function validaporalumno($cedula){
      $sql = "select * from alumno where acudiente = '".$cedula."' ";
      $conexionBD = new conexion();
      $conexionBD->conectarBD();
      $data = $conexionBD->ejeCon($sql, 0);
      return $data;
      
  }
  
  function validaporuta($cedula){
      $sql = "select * from ruta where idconductor = '".$cedula."' ";
      $conexionBD = new conexion();
      $conexionBD->conectarBD();
      $data = $conexionBD->ejeCon($sql, 0);
      return $data;  
  }
  
  
  function validaporcurso($cedula){
      $sql = "select * from curso where idpersona = '".$cedula."' ";
      $conexionBD = new conexion();
      $conexionBD->conectarBD();
      $data = $conexionBD->ejeCon($sql, 0);
      return $data;  
      
  }
  
  
}

?>
