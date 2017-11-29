<!DOCTYPE html>

<?php
    require_once '../../Config/Bd_conexion.php';
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Nueva Sección - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="seccion-style.css">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Nueva Sección</h1>
            <div id="Cuadro">

            <?php

                if (!isset($_POST["seleccion"])) {

                    echo'<form action="../formularios/complemento_seccion.php" method="POST" autocomplete="off">
                        <table>
                        <tr>
                        <td class="izq">
                        CODIGO CARRERA: </td><td class="der">
                        <select name="carrera">
                        <option value="0" >Carreras...</option>';
                    $registro = $datosBase->data("all","carreras");
                    foreach ($registro as $registro){
                    echo "<option value =".$registro["cod_ca"].">".$registro["cod_ca"]
                            ."--".$registro["nombre"] ."</option>";
                    } 

                    echo '</select></td></tr>';
                    
                    echo '<tr><td id="C_Bot" colspan="2"><p id="bot"><input type="submit" name="seleccion"value="Enviar" class="boton"></p></td></tr>';
                }
            ?>
            </div>
        </main>

        <script src="../../jquery.min.js"></script>
        <script src="../../Headroom/headroom.min.js"></script>
        <script src="../../Headroom/menu.js"></script>

        <footer>
            <p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
        </footer>

    </body>
</html>



          
