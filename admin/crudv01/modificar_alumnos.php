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
        <title>Mostrar Alumnos - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="modificar-profalum-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../Banner_Admin/banner-admin-style.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Tabla de Estudiantes</h1>
            <div id="Cuadro">
                <table>
                    <?php
                        $informacion = $conexion->data("all", "alumnos");

                        foreach ($informacion as $profesores){
                    ?>
                    <tr>
                        <td title="Cédula del Estudiante">
                            <?php echo $profesores["cedula"]?>
                        </td>
                        <td title="Carrera que cursa">
                            <?php echo $profesores["carrera"]?>
                        </td>
                        <td title="Trimestre que cursa">
                            <?php echo $profesores["trimestre"]?>
                        </td>
                        <td title="Primer nombre del Estudiante">
                            <?php echo $profesores["nombre"]?>
                        </td>
                        <td title="Primer apellido del Estudiante">
                            <?php echo $profesores["apellido"]?>  
                        </td>
                        <td title="Correo electrónico del Estudiante">
                            <?php echo $profesores["correo"]?>
                        </td>
                        <td title="Número de teléfono celular del Estudiante">
                            <?php echo $profesores["movil"]?>
                        </td>
                        <td id="C_Bot">
                            <a href="editar_alumnos.php?editar=<?php echo $profesores['cedula']?>"><p id="bot"><input type="submit" name="editar" value="Editar" class="boton"></p></a>
                        </td>
                        <td id="C_Bot">
                            <a href="borrar.php?borrar=<?php echo $profesores['cedula']?>&tabla=alumnos&campo=id_cuenta"><p id="bot"><input type="submit" name="borrar" value="Borrar" class="boton"></p></a>
                        </td>
                    <?php }?>
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