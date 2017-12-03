<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<?php
    require_once '../../Config/Bd_Gestion.php';
    require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/users/professor.php";
    if (isset($_GET["editar"])) {
        $profesor = new professor($_GET["editar"],"");
    }
    
    if (isset($_POST["actProfesor"])) {

        $profesor = new professor($_POST["cedula"],"");
        $profesor->setNombre($_POST["nombre"]);
        $profesor->setApellido($_POST["apellido"]);
        
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Editar Profesor - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="editar-profesores-style.css">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Editando datos de Profesor</h1>
            <div id="Cuadro">
                <form method="POST" action="editar_profesores.php" autocomplete="off">
                   <table>
                        <tr>
                            <td class="izq">
                                CEDULA DE IDENTIDAD:
                            </td>
                            <td class="der">
                                <input type="text" name="cedula" class="Input" value="<?php echo $profesor->getCedula();?>">
                            </td>
                        </tr>            
                        <tr>
                            <td class="izq">
                                NOMBRE:
                            </td>
                            <td class="der">
                                <input type="text" name="nombre" class="Input" value="<?php echo $profesor->getNombre();?>">
                            </td>
                        </tr>            
                        <tr>
                            <td class="izq">
                                APELLIDO:
                            </td>
                            <td class="der">
                                <input type="text" name="apellido" class="Input" value="<?php echo $profesor->getApellido();?>">
                            </td>
                        </tr>
                        <tr><td id="C_Bot" colspan="2"><p id="bot"><input type="submit" name="actProfesor" value="Actualizar" class="boton"></p></td></tr>
                    </table>
                </form>
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
