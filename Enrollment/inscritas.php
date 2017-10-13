<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<?php
    
    require_once '../Config/Bd_conexion.php';
    $conexion = new Bd_Gestion();
    $secciones = $conexion->secciones("", "");
    foreach ($secciones as $listaSeccion) {

        $registro[]=$listaSeccion["cod_sec"];
    }
    $resultado = $conexion->buscar($registro, "26501690");
    
    foreach ($resultado as $value) {
    $codigo=$value["cod_sec"];
    $resultados = $conexion->materia($codigo);
    echo $resultados["cod_mat"];
    echo "<br>";
    }
?>