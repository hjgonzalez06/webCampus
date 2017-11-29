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
        <title>Mostrar Profesores - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="modificar-profalum-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../Banner_Admin/banner-admin-style.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Tabla de Profesores</h1>
            <div id="Cuadro">
                <table>
                    <?php
                        $informacion = $conexion->data("all", "profesores");

                        foreach ($informacion as $profesores){
                    ?>
                    <tr>
                        <td title="Código del Profesor">
                            <?php echo $profesores["cod_pro"];?>
                        </td>
                        <td title="Cédula del Profesor">
                            <?php echo $profesores["cedula"];?>
                        </td>
                        <td title="Nombre del Profesor">
                            <?php echo $profesores["nombre"];?>
                        </td>
                        <td title="Apellido del Profesor">
                            <?php echo $profesores["apellido"];?>
                        </td>
                        <td id="C_Bot">
                            <a href="editar_profesores.php?editar=<?php echo $profesores['cod_pro'];?>">
                                <p id="bot">
                                    <input type="submit" name="editar" value="Editar" class="boton">
                                </p>
                            </a>
                        </td>
                        <td id="C_Bot">
                            <a href="borrar.php?borrar=<?php echo $profesores['cod_pro'];?>&tabla=profesores&campo=cod_pro">
                                <p id="bot">
                                    <input type="submit" name="borrar" value="Borrar" class="boton">
                                </p>
                            </a>
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