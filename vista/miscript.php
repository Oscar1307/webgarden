<?php

include_once("../controlador/conexion_sqlserver.php");
if ($_REQUEST["valor"] == 0) {
    echo"<select name='idcurso' id='id_estado'>";
    echo"<option value='0'>Cursos</option>";
    echo "</select>";
} else {

    $valor = $_REQUEST["valor"];
    $sql2 = "SELECT idcurso,nombre FROM `curso` WHERE idnivel=" . $valor . " order by nombre";
    $conexionBD = new conexion_sqlserver();
    $conexionBD->conectarBD();
    $estados = $conexionBD->ejecutarConsulta($sql2, 0);
    $result = array();
    $i = 0;
    if ($estados <> NULL) {

        foreach ($estados as $estado) {
            $result[$i]["value"] = $estado["idcurso"];
            $result[$i]["nombre"] = $estado["nombre"];
            $i++;
        }

        $html = '<select name="idcurso" id="reloadMunicipio" required>';
        $html.='<option value>Seleccione</option>';
        foreach ($result as $res) {
            $html.='<option value="' . $res["value"] . '">' . $res["nombre"] . '</option>';
        }
        $html.='</select>';
        echo $html;
    } else {
        $html = '<select name="idcurso" id="reloadMunicipio" required>';
        $html.='<option value>Sin datos</option>';
        foreach ($result as $res) {
            $html.='<option value="' . $res["value"] . '">' . $res["nombre"] . '</option>';
        }
        $html.='</select>';
        echo $html;
    }
}
?>