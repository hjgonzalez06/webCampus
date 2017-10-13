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
    $informacion = $conexion->data($_GET["editar"], "alumnos");
    $lapso = array(date("Y")."-I",date("Y")."-II", date("Y")."-III" );
    $lapsoOLD = $lapso;
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Alumnos - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="editar-alumnos-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <div id="particles-js">
            <script src="../../Efecto-Particulas-Fondo/particles.js"></script>
            <script src="../../Efecto-Particulas-Fondo/particulas.js"></script>
        </div>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Editando datos de Alumno</h1>
            <div id="Cuadro">
                <form method="POST" action="editar_alumnos.php" autocomplete="off">
                   <table>
                        <tr>
                            <td class="izq">
                                CEDULA DE IDENTIDAD: </td><td class="der">
                                <input type="number" name="cedula" class="Input" value="<?php echo $informacion['cedula'];?>"></td></tr>            
                        <tr>
                            <td class="izq">
                                CODIGO CARRERA</td><td class="der">
                                <select name="carrera">
                                        <option value="0" >Carreras...</option>
                                        
                                        <?php
                                            $registro = $conexion->data("cod_ca","carreras");
                                            foreach ($registro as $registro){
                                                echo '<option value ="'.$registro["cod_ca"].'">'.$registro["cod_ca"]
                                                        .'--'.$registro["nombre"] .'</option>';
                                            }
                                        ?>
                        
                                    </select></td></tr>

                       <tr>
                            <td class="izq">
                                TRIMESTRE: </td><td class="der">
                                <select name="trimestre">
                                        <option value="0" >Trimestres...</option>
                                        
                                       <?php
                                            $registro = $conexion->data("cod_tri","trimestres");
                                            foreach ($registro as $registro){
                                                echo '<option value ="'.$registro["cod_tri"].'">'.$registro["cod_tri"]
                                                        .' TRIMESTE Nº: '.$registro["n_tri"] .'</option>';
                                            }
                                        ?>
                        
                                    </select></td></tr>
                        <tr>
                            <td class="izq">
                                NOMBRE: </td><td class="der">
                                <input type="text" name="nombre" class="Input" value="<?php echo $informacion['nombre'];?>"></td></tr>
                        
                        <tr>
                            <td class="izq">
                            SEGUNDO NOMBRE: </td><td class="der">
                                <input type="text" name="nombre2" class="Input" value="<?php echo $informacion['nombre_do'];?>"></td></tr>
                     
                      <tr>
                        <td class="izq">
                            APELLIDO: </td><td class="der">
                            <input type="text" name="apellido" class="Input" value="<?php echo $informacion['apellido'];?>"></td></tr>
                      <tr>
                            <td class="izq">
                            SEGUNDO APELLIDO: </td><td class="der">
                                <input type="text" name="apellido2" class="Input" value="<?php echo $informacion['apellido_do'];?>"></td></tr>
                       <tr>
                        <td class="izq">
                            CORREO ELECTRONICO: </td><td class="der">
                            <input type="email" name="correo" class="Input" value="<?php echo $informacion['correo'];?>"></td></tr>
                       <tr>
                            <td class="izq">
                            TELEFONO CELULAR: </td><td class="der">
                                <input type="text" name="movil" class="Input" value="<?php echo $informacion['movil'];?>"></td></tr>
                       <tr>
                            <td class="izq">
                            TELEFONO FIJO: </td><td class="der">
                                <input type="text" name="casa" class="Input" value="<?php echo $informacion['casa'];?>"></td></tr>
                       <tr>
                        <td class="izq">
                            TURNO: </td><td class="der">
                            <select name="turno">
                            <option value="0">Turno...</option>    
                            <option value="Mañana">Mañana</option>    
                            <option value="Tarde">Tarde</option>    
                            <option value="Noche">Noche</option>    
                            <option value="Mañana-Tarde">Mañana-Tarde</option>    
                            <option value="Tarde-Noche">Tarde-Noche</option>    
                            </select>
                        </td></tr>
                       <tr>
                        <td class="izq">
                            LAPSO ACTUAL </td><td class="der">
                            <select name="lapso_act">
                                <option value="0">Lapso...</option>
                                <?php
                                    foreach ($lapso as $lapso){
                                        echo '<option value ="'.$lapso.'">'.$lapso.'</option>';
                                    }
                                ?>
                                </select>
                        </td></tr>
                       <td class="izq">
                            LAPSO ANTERIOR </td><td class="der">
                            <select name="lapso_ant">
                                <option value="0">Lapso...</option>
                                <?php
                                    foreach ($lapsoOLD as $lapso2){
                                        echo '<option value ="'.$lapso2.'">'.$lapso2.'</option>';
                                    }
                                ?>
                                </select>
                        </td></tr>
                       <tr>
                            <td class="izq">
                            TRIMESTRES APROBADOS </td><td class="der">
                                <input type="text" name="triA" class="Input" value="<?php echo $informacion['tri_aprob'];?>"></td></tr>
                        <td class="izq">
                            ESTATUS: </td><td class="der">
                            <select name="status">
                            <option value="0">Estatus...</option>    
                            <option value="Regular">Regular</option>    
                            </select>
                        </td></tr>
                            <td class="izq">
                            UNIDADES DE CREDITO A. </td><td class="der">
                                <input type="text" name="uca" class="Input" value="<?php echo $informacion['uca'];?>"></td></tr>
                       <tr>
                            <td class="izq">
                            UNIDADES DE CREDITO C. </td><td class="der">
                                <input type="text" name="ucc" class="Input" value="<?php echo $informacion['ucc'];?>"></td></tr>
                       
                    <tr><td id="C_Bot" colspan="2"><p id="bot"><input type="submit" name="actAlumno" value="Actualizar" class="boton"></p></td></tr>
                </table>
            </form>
            <?php
                if (isset($_POST["actAlumno"])) {
                    $error= $conexion->actualizar_alumno($_POST["cedula"], $_POST["carrera"],
                            $_POST["trimestre"], $_POST["nombre"], $_POST["nombre2"],
                            $_POST["apellido"], $_POST["apellido2"], $_POST["correo"],
                            $_POST["movil"], $_POST["casa"], $_POST["turno"],
                            $_POST["lapso_act"], $_POST["lapso_ant"], $_POST["status"],
                            $_POST["triA"], $_POST["uca"], $_POST["ucc"]);
                    

                    echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=buscar.php'>";
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
