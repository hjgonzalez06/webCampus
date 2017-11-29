<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto cfranklinmoreno@gmail.com
-->
<?php
    require_once '../Config/chechadmin.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Envío de Formularios - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="datos-style.css">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

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
            <div id="envoltura">
                <div id="cuerpo">
                    <?php 
                
                        require_once '../Config/Bd_Gestion.php';
                        
                        $webCampus = new Bd_Gestion();
                        
                        if (isset($_POST["newCarrera"])) {

                            $webCampus ->agregar_carrera($_POST["codigo"],$_POST["unidades"],
                                $_POST["numero"],$_POST["nombre"]);
                            echo '<p id="Despedida">Carrera añadida exitosamente.</p>';
                            
                        }else if (isset ($_POST["newProfesor"])) {

                            $webCampus->agregar_profesor($_POST["codigo"], $_POST["cedula"],
                                    $_POST["nombre"], $_POST["apellido"]);
                            echo '<p id="Despedida">Profesor añadido exitosamente.</p>';

                        }else if(isset ($_POST["newMateria"])){

                            $webCampus->agregar_materia($_POST["carrera"], $_POST["materia"],
                                    $_POST["nombre"], $_POST["prelacion"], $_POST["uc"],
                                    $_POST["trimestre"], $_POST["cost"]);
                            echo '<p id="Despedida">Materia añadida exitosamente.</p>';
                            
                        }else if (isset ($_POST["newSeccion"])) {
                            
                            $webCampus->agregar_seccion($_POST["seccion"],$_POST["materias"],
                                    $_POST["profesor"], $_POST["horario1"], $_POST["horario2"],
                                    $_POST["dia1"], $_POST["dia2"], $_POST["turno"]);
                            echo '<p id="Despedida">Sección creada exitosamente.</p>';
                            
                        }else if (isset ($_POST["newTrimestre"])) {
                            
                            $webCampus->agregar_trimestre($_POST["trimestre"],
                                    $_POST["carrera"], $_POST["numero"], $_POST["uc"]);
                            echo '<p id="Despedida">Trimestre agregado exitosamente.</p>';
                            
                        }else if (isset ($_POST["newAlumno"])) {
                            $webCampus->agregar_alumno($_POST["cedula"], $_POST["nacionalidad"], 
                                    $_POST["carrera"], $_POST["trimestre"], $_POST["nombre"],
                                    $_POST["nombre2"], $_POST["apellido"], $_POST["apellido2"],
                                    $_POST["correo"], $_POST["movil"], $_POST["casa"],
                                    $_POST["direccion"]);
                            echo '<p id="Despedida">Alumno agregado exitosamente.</p>';
                        }

                         ob_start();
                            header("refresh: 3; url = crudv01/accion.php");
              
                        ob_end_flush(); 
                    ?>
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
