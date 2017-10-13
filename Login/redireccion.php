<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */
    
require_once '../Config/Bd_Gestion.php';

    $comprobacion = new Bd_Gestion();
    $informacion;
    
    if($comprobacion->login($_POST["usuario"], $_POST["pass"])==0){
        
        session_start();
        
        $_SESSION["usuario"] = $comprobacion->data($_POST["usuario"], "alumnos");
        
        if (isset($_POST["remember"])) {
            setcookie("login", $_SESSION["usuario"]["id_cuenta"], time()+86400, "/");
        }
        
        
        header ("location: ../Index/index.php" );
        
    }elseif($comprobacion->comprobar_admin($_POST["usuario"], $_POST["pass"])!=0){
        
        session_start();
        
        $_SESSION["admin"]=1;
        
        header("location: ../admin/area_admin.php");
    } else {
        session_start();
    
        $_SESSION["error"] = 1;
    
        header("location: ../Login/login.php");

    }
    
    
?>

