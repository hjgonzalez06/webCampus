<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */


    include_once '../Config/Bd_conexion.php';
    $datosBase= new Bd_Gestion();
    $id=$_POST["id"];
    $registro = $datosBase->secciones($id);
    foreach ($registro as $registro){
        echo "<option>".$registro["turno"]."</option>";
    }   
?>
             