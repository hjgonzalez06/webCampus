<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<?php
    require_once '../../Config/Bd_conexion.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Habilitar - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="buscar-crear-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../Banner_Admin/banner-admin-style.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    </head>
    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Módulo de Creación</h1>
            <div id="envoltura">
                <p id="Titulo">Escoja una opción</p>
                <table id="BusCre">
                    <tr>
                        <td>
                            <a href="../formularios/Formulario_alumno.php"><p id="bot"><input type="submit" name="newAlumno" value="Nuevo Alumno" class="boton"></p></a>
                        </td>
                        <td>
                            <a href="../formularios/Formulario_seccion.php"><p id="bot"><input type="submit" name="newSeccion" value="Nueva Sección" class="boton"></p></a>
                        </td>
                        <td>
                            <a href="../formularios/Formulario_Profesor.php"><p id="bot"><input type="submit" name="newProfesor" value="Nuevo Profesor" class="boton"></p></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="../formularios/Formulario_materia.php"><p id="bot"><input type="submit" name="newMateria" value="Nueva Materia" class="boton"></p></a>
                        </td> 
                        <td>
                            <a href="../formularios/Formulario_trimestre.php"><p id="bot"><input type="submit" name="newTrimestre" value="Nuevo Trimestre" class="boton"></p></a>
                        </td> 
                        <td>
                            <a href="../formularios/Formulario_carrera.php"><p id="bot"><input type="submit" name="newCarrera" value="Nueva Carrera" class="boton"></p></a>
                        </td> 
                    </tr>
                </table>
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