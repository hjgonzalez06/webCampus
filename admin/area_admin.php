<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto cfranklinmoreno@gmail.com
-->

<?php
        
    require_once '../Config/chechadmin.php';
    
    ob_start();
        header("refresh: 3; url = crudv01/accion.php");
    ob_end_flush(); 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceso para Admins - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="area-admin-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <div id="particles-js">
            <script src="../Efecto-Particulas-Fondo/particles.js"></script>
            <script src="../Efecto-Particulas-Fondo/particulas.js"></script>
        </div>

        <header id="Header">
            <nav class="Menu">
                <div class="Logo">
                    <div>
                        <span class="Span1">
                                <img src="../Imagenes/Logo Unimar.png" alt=""><img src="../Imagenes/Encabezado2.png" id="Encabezado2">
                        </span>
                        <span class="Span2">
                                <img src="../Imagenes/Encabezado3.png" id="Encabezado3">
                        </span>
                    </div>  
                </div>                  
            </nav>
        </header>

        <main>
            <h1>Habilitando el Acceso para Administradores</h1>
            <div id="envoltura">      
                <div id="cuerpo">
                    <p id="Despedida">Espere un momento mientras es redirigido al Panel de Control...</p>
                </div>
            </div>
        </main>

        <footer>
            <p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
        </footer>

    </body>
</html>
