<?php
	include ("modelo/mnivel.php");
        //include ("modelo/mpagina.php");
      
	$ins = new mnivel();
	//Eliminar
       
	$del = isset($_GET["del"]) ? $_GET["del"]:NULL;
	if ($del){
             $existea=$ins->selcursos($del);
             $countR = count($existea);
             if ($countR >=1){
                  ?>
            <script language="javascript">
            alert ("Este nivel de curso no se puede eliminar porque hay cursos creados con este nivel ");
               location.href='home.php?acceso=101';
            </script>
              <?php   
                 
                 
                 
             }else{
                   $ins->delnivel($del);         
            ?>
            <script language="javascript">
            alert ("Nivel de curso eliminado");
               location.href='home.php?acceso=101';
            </script>
              <?php   
             }
          
             
             
          
	
	
	}
        
        //$pac=107;
        //$filtro=isset($_GET["filtro"]) ? $_GET["filtro"]:NULL;
     $pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
        $idnivel=isset($_POST["idnivel"]) ? $_POST["idnivel"]:NULL;
	$nombre = isset($_POST["nombre"]) ? $_POST["nombre"]:NULL;
        $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"]:NULL;
	$actu= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
 
	if ($descripcion && $nombre &&!$actu) {
		$ins->insnivel($nombre,$descripcion);
                ?>
		<script language="javascript">
		 alert ("Nivel de curso creado con \u00e9xito");
                 //location.href='home.php?pac=107';
	
</script>
  
<?php
		
	}
        if ( $descripcion && $nombre && $idnivel && $actu ) {
           
		$ins->upnivel($nombre,$descripcion,$idnivel);
                ?>
		<script language="javascript">
		 alert ("Nivel de curso  actualizado ");
                 
	
</script>
<?php
        }

	$datos1=$ins->selnivel1($pr);
	
        $datos =$ins->selnivel();
     

       //Paginar
	   /*
	$bo = "";
	$nreg = 10;//numero de registros a mostrar
	$pag = new mpagina($nreg);
	$conp ="select count(ap.ndocapre) as Npe from aprendiz as ap inner join valor as va1 on 
ap.tdocapre=va1.codval inner join  valor as va2  on 
ap.genapre=va2.codval 
inner join valor as va3 on  ap.estcapre=va3.codval  inner join 
ubicacion as ubi on ap.codubi=ubi.codubi 
 inner join perfil as per on ap.idper=per.idper  and ap.idper=2 ";
	if($filtro) $conp.= " WHERE ap.ndocapre LIKE '%".$filtro."%'";
       
      */ 
	
?>
	
	




