<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<?php
    require_once '../../Config/Bd_Gestion.php';
    $conexion = new Bd_Gestion();
    if (isset($_GET["editar"])) {
        $informacion = $conexion->data($_GET["editar"], "profesores");
    }
    
    if (isset($_POST["actProfesor"])) {
        $resultado = $conexion->actualizar_profesor($_POST["codigo"],
            $_POST["nombre"], $_POST["apellido"]);
        
        if ($resultado!=0) {
                        
            echo "<script language='javascript'>alert('Cédula o "
            . "Contraseña incorrectas. Intente de nuevo.')</script>";
                        
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=editar_profesores.php'>";
        }else{
            
            echo "<script language='javascript'>alert('Operacion "
                        . "Exitoso')</script>";
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=buscar.php'>";
            
        }
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Profesor - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="editar-profesores-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
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
                                CÓDIGO PROFESOR:
                            </td>
                            <td class="der">
                                <input type="text" name="codigo" class="Input" value="<?php echo $informacion['cod_pro'];?>">
                            </td>
                        </tr>            
                        <tr>
                            <td class="izq">
                                CEDULA DE IDENTIDAD:
                            </td>
                            <td class="der">
                                <input type="text" name="cedula" class="Input" value="<?php echo $informacion['cedula'];?>">
                            </td>
                        </tr>            
                        <tr>
                            <td class="izq">
                                NOMBRE:
                            </td>
                            <td class="der">
                                <input type="text" name="nombre" class="Input" value="<?php echo $informacion['nombre'];?>">
                            </td>
                        </tr>            
                        <tr>
                            <td class="izq">
                                APELLIDO:
                            </td>
                            <td class="der">
                                <input type="text" name="apellido" class="Input" value="<?php echo $informacion['apellido'];?>">
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
