<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<?php

    require_once "../Config/course/materia.php";

    $materia = new materia($_POST["codigo"]);
    $secciones = $materia->show_sections();

    foreach ($secciones as $seccione) {

        echo "<option value = ".$seccione[COD_SEC]." id = \"".$seccione[COD_SEC]."\" >".$seccione[TURN]."</option>";

    }
?>
