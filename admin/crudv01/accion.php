<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel de Control - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="accion-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>

    <body>

        <header id="Header">
            <nav class="Menu">
                <div class="Logo">
                    <div>
                        <span class="Span1">
                                <img src="../../Imagenes/Logo Unimar.png" alt=""><img src="../../Imagenes/Encabezado2.png" id="Encabezado2">
                        </span>
                        <span class="Span2">
                                <img src="../../Imagenes/Encabezado3.png" id="Encabezado3">
                        </span>
                    </div>  
                </div> 
                <div class="Ident_Fecha">
                    <p>
                        <?php                   
                            echo "Bienvenido, Administrador";
                        ?>  
                    </p>
                    <span>
                        <script src="../../miscelaneo.js" ></script>
                    </span>
                </div>                 
            </nav>
        </header>

        <main>
        <h1>Panel de Control - Administrador</h1>
            <div id="envoltura">
                <p id="Titulo">Escoja una opción</p>
                <div id="cuerpo">
                    <a href="creacion.php" id="bot"><input type="submit" name="habilitar" value="Habilitar" class="boton"></p>
                    <a href="buscar.php" id="bot"><input type="submit" name="buscar" value="Búsqueda+" class="boton"></p>
                    <a href="../logout-admin.php" id="bot"><input type="submit" name="logout" value="Cerrar Sesión" class="boton"></p>
                </div>
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