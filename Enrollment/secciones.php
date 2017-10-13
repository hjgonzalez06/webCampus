<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<?php
    include_once '../Config/Bd_conexion.php';
    $datosBase= new Bd_Gestion();
    $id=$_POST["id"];
    $registro = $datosBase->secciones($id,"turno");
    foreach ($registro as $registro){
        echo "<option value =".$registro["cod_sec"].">".$registro["turno"]."</option>";
    }   
    $id=NULL;
?>
                                       