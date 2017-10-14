<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */
    session_start();
    
    $url = $_SERVER["REQUEST_URI"];
    $login = "/WebCampus/Login/login.php";

    if(!isset($_SESSION["usuario"])){
        
        if (isset($_COOKIE["login"])) {
            $conexionDirecta = new Bd_Gestion();
            $idTemporal=$_COOKIE["login"];
            $_SESSION["usuario"] = $conexionDirecta->data($idTemporal, "alumnos");
        }elseif($login != $url){
            header("Location: ../Login/login.php"); 
        }
    } elseif ($url==$login) {
        header("Location: ../Index/index.php");
    }

?>
