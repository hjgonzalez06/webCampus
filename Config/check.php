<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */
    session_start();
    
    $url = $_SERVER["REQUEST_URI"];
    $login = "/webCampus/Login/login.php";
    
    
    if (!isset($_SESSION["user"])) {
        
        if ($login != $url){
            
            header("Location: ../Login/login.php"); 
            
        }

    }elseif ($url==$login){
        
        header("Location: ../Index/index.php");
        
    }

?>

