<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */

    session_start();
    $url = $_SERVER["REQUEST_URI"];
    $area = "/WebCampus/admin/area_admin.php";
    $datos = "/WebCampus/admin/datos.php";
    $out = "/WebCampus/admin/logout-admin.php";
    
    if(!isset($_SESSION["admin"])){
            if ($url==$area || $url==$datos || $url==$out) {
                header("Location: ../Login/login.php"); 
            }else{
                header("Location: ../Login/login.php");
            }
            
    } 
    