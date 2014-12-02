<?php
	include ("modelo/mmarcaruta.php");
        //include ("modelo/mpagina.php");
      
	$ins = new mmarcaruta();
	//Eliminar
       
	$del = isset($_GET["del"]) ? $_GET["del"]:NULL;
	if ($del){
             $existea=$ins->selrutatrans($del);
             $countR = count($existea);
             if ($countR >=1){
                  ?>
            <script language="javascript">
            alert ("Para poder eliminar esta Marca de veh\u00edculo, primero debe  asignar otra marca de veh\u00edculo a las  rutas de transporte  creadas que tienen esta marca asociada   ");
               location.href='home.php?acceso=103';
            </script>
              <?php   
                 
                 
                 
             }else{
                   $ins->delmarca($del);         
            ?>
            <script language="javascript">
            alert ("Marca de veh\u00edculo eliminada ");
               location.href='home.php?acceso=103';
            </script>
              <?php   
             }
          
             
             
          
	
	
	}
        
        //$pac=107;
        //$filtro=isset($_GET["filtro"]) ? $_GET["filtro"]:NULL;
     $pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
        $idmarca=isset($_POST["idmarca"]) ? $_POST["idmarca"]:NULL;
	$nombre = isset($_POST["nomarca"]) ? $_POST["nomarca"]:NULL;
	$actu= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
 
	if ($nombre &&!$actu) {
		$ins->insnombre($nombre);
                ?>
		<script language="javascript">
		 alert ("Marca de veh\u00edculo creada con \u00e9xito");
                 //location.href='home.php?pac=107';
	
</script>
  
<?php
		
	}
        if ($idmarca && $nombre && $actu ) {
           
		$ins->upmarca($nombre,$idmarca);
                ?>
		<script language="javascript">
		 alert ("Marca de veh\u00edculo actualizada ");
                 
	
</script>
<?php
        }

	$datos1=$ins->selmarca1($pr);
	
        $datos =$ins->selmarca();
     

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
	
	




