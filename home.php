<?php include("modelo/mseguridad.php");
?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="icon" type="image/png" href="image/logo-webgarden.png" />


        <link rel="stylesheet" href="css/menu-8.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" href="js/jquery.dataTables.css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <title> ..:::: webgarden ::::..</title>
    </head>
    <body>
    <center>
        <div id="contenedor">


            <?php
            include("vista/cabezote.php");
            $idper = $_SESSION["perfil"];
            $nomapre = $_SESSION["user"];
            ?>
            <div id="sesion" style="right:10%;">
            
                <table border="0" height="25" style=" width: 100%">
                    <tr>
                        <td  valign="top" class="Texticot" valign="top" >Bienvenido(a) <?php if($idper=='1'){ ?>Acudiente <?php echo ucfirst($nomapre);  }  if($idper=='3'){ ?>Docente <?php echo ucfirst($nomapre);  } if($idper=='4'){ ?>Conductor <?php echo ucfirst($nomapre);  } ?> <?php if($idper=='5'){ ?>Administrador <?php echo ucfirst($nomapre);  } ?>
                        </td>
                        <td width="200px" align="right" valign="top">
                            <nav id="colorNav">
                                <ul>

                                    <li class="green">
                                        <a href="#"><IMG SRC="image/edit.png" height="15" width="18"></a>

                                        <ul>
                                            <li><a href="home.php?acceso=130">Cambiar datos personales</a></li>
                                            <li><a href="home.php?acceso=133">Cambiar contrase&ntilde;a</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="green">
                                        <a href="vista/salir.php" ><IMG SRC="image/salir.png" height="15" width="18" title="Cerrar Sesion"></a>
                                    </li>
                                </ul>


                            </nav>
                        </td>
                    </tr>
                </table>
            </div>  
            





            <div id="index" class="bodytext">
                

<div id="menu">
           <?php
                    include("vista/menu.php");
                    ?>          
                </div>

                <br><br><br><br><br>

                <?php
                $perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : NULL;
                $acceso = isset($_GET["acceso"]) ? $_GET["acceso"] : NULL;
                $Up = isset($_GET["up"]) ? $_GET["up"] : NULL;
                if ($perusu == 4 && is_null($acceso)) {
                    include("vista/vlistaruta.php");
                }
                 if ($perusu == 3 && is_null($acceso)) {
                    include("vista/vlistaalumnopro.php");
                }
                if ($perusu == 1 && is_null($acceso)) {
                    include("vista/vlistaalumnoacuda.php");
                }
                if ($perusu == 5 && is_null($acceso)) {
                    include("vista/vactividadex.php");
                } else if ($acceso == "101") {
                    if (is_null($Up)) {
                        include("vista/vnivel.php");
                    } else {
                        include("vista/vnivel1.php");
                    }
                } else if ($acceso == "102") {
                    if (is_null($Up)) {
                        include("vista/vruta.php");
                    } else {
                        include("vista/vruta1.php");
                    }
                } else if ($acceso == "103") {
                    if (is_null($Up)) {
                        include("vista/vmarcaruta.php");
                    } else {
                        include("vista/vmarcaruta1.php");
                    }
                } else if ($acceso == "104") {
                    if (is_null($Up)) {
                        include("vista/vactividadex.php");
                    } else {
                        include("vista/vactividadex1.php");
                    }
                } else if ($acceso == "105") {
                    include("vista/vpersona.php");
                } else if ($acceso == "106") {
                    if (is_null($Up)) {
                        include("vista/vcurso.php");
                    } else {
                        include("vista/vcurso1.php");
                    }
                } else if ($acceso == "130") {
                    include("vista/vactua.php");
                } else if ($acceso == "131") {
                    include("vista/vcontra.php");
                } else if ($acceso == "133") {
                    include("vista/vcontrase.php");
                } else if ($acceso == "134") {
                    include("vista/vnove.php");
                } else if ($acceso == "135") {
                    include("vista/vperfiles.php");
                } else if ($acceso == "108") {
                    include("vista/vactivinoti.php");
                } else if ($acceso == "107") {
                    if (is_null($Up)) {
                        include("vista/valumno.php");
                    } else {
                        include("vista/valumno1.php");
                    }
                } else if ($acceso == "109") {
                    include("vista/vlistaalumno.php");
                } else if ($acceso == "110") {
                    include("vista/valumno1.php");
                } else if ($acceso == "111") {
                    include("vista/vcamfot.php");
                } else if ($acceso == "112") {
                    include("vista/vnove.php");
                } else if ($acceso == "113") {
                    include("vista/vlistapersona.php");
                } else if ($acceso == "114") {
                    include("vista/vcamfotperso.php");
                } else if ($acceso == "115") {
                    include("vista/vnove1.php");
                } else if ($acceso == "116") {
                    include("vista/vlistaalumnoacu.php");
                } else if ($acceso == "117") {
                    include("vista/vnoveacu.php");
                } else if ($acceso == "118") {
                    include("vista/vnoveacu1.php");
                } else if ($acceso == "119") {
                    include("vista/vlistaalumnoacuax.php");
                } else if ($acceso == "120") {
                    include("vista/vactividadexac.php");
                } else if ($acceso == "121") {
                    include("vista/vactividadexac1.php");
                } else if ($acceso == "122") {
                    include("vista/vcursoac.php");
                } else if ($acceso == "123") {
                    include("vista/vlistaalumnoacuda.php");
                } else if ($acceso == "124") {
                    include("vista/valumno1ac.php");
                } else if ($acceso == "125") {



                    include("vista/vcursoactivi.php");
                } else if ($acceso == "126") {
                    include("vista/vlistactivi.php");
                } else if ($acceso == "127") {
                    include("vista/vlistanovedad.php");
                } else if ($acceso == "128") {
                    include("vista/vrutaac.php");
                } else if ($acceso == "129") {
                    include("vista/vlistaruta.php");
                } else if ($acceso == "132") {
                    include("vista/valumruta.php");
                } else if ($acceso == "136") {
                    include("vista/vdadacu.php");
                } else if ($acceso == "137") {
                    include("vista/vlistaalumnonove.php");
                }else if ($acceso == "138") {
                    include("vista/vlistaalumnopro.php");
                }else if ($acceso == "139") {
                    include("vista/vdadacupro.php");
                }else if ($acceso == "140") {
                    include("vista/valumno1pro.php");
                }else if ($acceso == "141") {
                    include("vista/vrutapro.php");
                }






























                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////               
                else if ($acceso == "150") {
                    include("vista/vlistacursos.php");
                } else if ($acceso == "151") {
                    include("vista/vlistaalumnos.php");
                } else if ($acceso == "152") {
                    include("vista/vlistamicurso.php");
                } else if ($acceso == "153") {
                    include("vista/vmisalumnos.php");
                } else if ($acceso == "154") {
                    include("vista/vparyval.php");
                }    
                            
                ?>

            </div>
            <div id="piec">
                <?php
                include("vista/pie.php");
                ?>
            </div>
        </div>

    </center>
</body>
</html>
