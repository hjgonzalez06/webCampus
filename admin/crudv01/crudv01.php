<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<?php
    require_once '../../Config/Bd_conexion.php';
    
    $conexion = new Bd_Gestion();
    $informacion;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD</title>
    </head>
    <body>
    <center>
        <label><h1>Panel de control</h1></label>
            <?php
                echo "<h3>Opciones</h3>";
                include_once 'accion.php';
                echo"<br><br>";
            ?>
    </body>
</html>
