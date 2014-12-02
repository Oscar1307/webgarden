<?php
$perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"] : NULL;
?>


<?php if ($perusu == 5) { ?>
    <div id="principal">MENU &raquo;
        <div id="menu66">
            <ul>
                <li class="nivel1 primera"><a  class="nivel1">Alumnos</a>
                    <ul>
                        <li class="primera"><a href="home.php?acceso=107">Crear</a></li>
                        <li><a href="home.php?acceso=109">Listar</a></li>
                    </ul>
                </li>
                <li class="nivel1"><a href="home.php?acceso=104" class="nivel1">Act. Extracurriculares</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=106" class="nivel1">Cursos</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=101" class="nivel1">Niveles Curso</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=137" class="nivel1">Novedades</a>
                </li>
                <li  class="nivel1"><a  class="nivel1">Persona</a>
                    <ul>
                        <li class="primera"><a href="home.php?acceso=105">Crear</a></li>
                        <li><a href="home.php?acceso=113">Listar</a></li>
                    </ul>
                </li>
                <li class="nivel1"><a href="home.php?acceso=102" class="nivel1">Ruta</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=103" class="nivel1">Marca ruta</a>
                </li>
                  <li class="nivel1"><a href="home.php?acceso=154" class="nivel1">Parametro</a>
                </li>
            </ul>
        </div>
    </div>
<?php } ?>
<?php if ($perusu == 1) { ?>
    <div id="principal">Menu &raquo;
        <div id="menu66">
            <ul>
                <li class="nivel1 primera"><a  href="home.php?acceso=116"  class="nivel1">Novedades</a>

                </li>
                <li class="nivel1"><a href="home.php?acceso=119" class="nivel1">Act. Extracurriculares</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=123" class="nivel1">Datos alumnos</a>
                </li>

            </ul>
        </div>
    </div>
<?php } ?>
<?php if ($perusu == 3) { ?>
    <div id="principal">MENU &raquo;
        <div id="menu66">
            <ul>
                
                 <li class="nivel1"><a href="home.php?acceso=138" class="nivel1">Alumnos</a>
                </li>
               
                <li class="nivel1"><a href="home.php?acceso=152" class="nivel1">Mis cursos</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=104" class="nivel1">Act. Extracurriculares</a>
                </li>
                <li class="nivel1"><a href="home.php?acceso=137" class="nivel1">Novedades</a>
                </li>
               
            </ul>
        </div>
    </div>
<?php } ?>
         






