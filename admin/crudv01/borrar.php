<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */

require_once '../../Config/Bd_Gestion.php';
    $tabla = $_GET["tabla"];
    $borrar = $_GET["borrar"];
    $campo = $_GET["campo"];
    $conexion = new Bd_Gestion();
   
    $borrar = $conexion->borrar($tabla, $borrar, $campo);   
    
    echo "<script language='javascript'>alert('Operación "
                        . "Exitosa')</script>";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=buscar.php'>";
    
?>

