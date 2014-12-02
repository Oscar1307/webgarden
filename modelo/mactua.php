<?php
    include("controlador/conexion.php");
	
	
class mactua{
	var $arr;
	
	function mactua(){}
	



function selcoddocu(){
		$sql ="select idvalor, nombre from valor where idparametro=5";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
		
	}


function selgene(){
		$sql ="select idvalor, nombre from valor where idparametro=1";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
		
	}
	
	
	function cons($c){
	        $conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
			
		
	}
        
        
		
		function updpersona($tipdocu, $prinomb, $segnomb, $priapellido, $segapellido, $genero, $direcc, $telef, $email, $codusu){
		      $sql = "UPDATE persona SET prinombre='".$prinomb."', segnombre='".$segnomb."', priapellido='".$priapellido."', segapellido ='".$segapellido."', telefono ='".$telef."', direccion = '".$direcc."', genero = '".$genero."', email = '".$email."', tipodoc = '".$tipdocu."' WHERE
		      identificacion = '".$codusu."';";
		      $this->cons($sql);
		
		}
                
                
            function selpersototal($idusuario){
            $sql = "select persona.identificacion, persona.prinombre, persona.segnombre, persona.priapellido, persona.segapellido, persona.telefono, persona.direccion, persona.genero, persona.email, persona.tipodoc, persona.pass,valor.idvalor, valor.nombre from persona inner join valor on persona.genero = valor.idvalor where identificacion='".$idusuario."';";
            $conexionBD = new conexion();
            $conexionBD->conectarBD();
            $data = $conexionBD->ejeCon($sql,0);
            return $data;
        }

}

?>
