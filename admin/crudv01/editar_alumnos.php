    <!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<?php
    require_once '../../Config/Bd_Gestion.php';
    require_once "../../Config/career/career.php";
    require_once "../../Config/trimester/trimester.php";
    require_once "../../users/student.php";

    $carreras = career::show_all();
    $trimestres = trimester::show_all();
    $alumno = new student($_GET["editar"], "");

    $conexion = new Bd_Gestion();
    $informacion = $conexion->data($_GET["editar"], "alumnos");
    $lapso = array(date("Y")."-I",date("Y")."-II", date("Y")."-III" );
    $lapsoOLD = $lapso;
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Editar Alumnos - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="editar-alumnos-style.css">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>
    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Editando datos de Alumno</h1>
            <div id="Cuadro">
                <form method="POST" action="editar_alumnos.php" autocomplete="off">
                   <table>
                        <tr>
                            <td class="izq">
                                CEDULA DE IDENTIDAD: </td><td class="der">
                                <input type="number" name="cedula" class="Input" value="<?php echo $alumno->getCedula();?>"></td></tr>
                        <tr>
                            <td class="izq">
                                CODIGO CARRERA</td><td class="der">
                                <select name="carrera">
                                        <option value="0" >Carreras...</option>
                                        
                                        <?php
                                            foreach ($carreras as $carrera) {

                                                echo '<option value ="'.$carrera[COD_CA].'">'.$carrera[COD_CA]
                                                    .'--'.$carrera[NAME_CA] .'</option>';
                                            }
                                        ?>
                        
                                    </select></td></tr>

                       <tr>
                            <td class="izq">
                                TRIMESTRE: </td><td class="der">
                                <select name="trimestre">
                                        <option value="0" >Trimestres...</option>
                                        
                                       <?php
                                           foreach ($trimestres as $trimestre) {

                                               echo '<option value ="'.$trimestre[COD_TRI].'">'.$trimestre[COD_TRI]
                                                   .' TRIMESTE Nº: '.$trimestre[NRO_TRI] .'</option>';

                                           }
                                        ?>
                        
                                    </select></td></tr>
                        <tr>
                            <td class="izq">
                                NOMBRE: </td><td class="der">
                                <input type="text" name="nombre" class="Input" value="<?php echo $alumno->getNombre();?>"></td></tr>
                        
                        <tr>
                            <td class="izq">
                            SEGUNDO NOMBRE: </td><td class="der">
                                <input type="text" name="nombre2" class="Input" value="<?php echo $alumno->getNombre2();?>"></td></tr>
                     
                      <tr>
                        <td class="izq">
                            APELLIDO: </td><td class="der">
                            <input type="text" name="apellido" class="Input" value="<?php echo $alumno->getApellido();?>"></td></tr>
                      <tr>
                            <td class="izq">
                            SEGUNDO APELLIDO: </td><td class="der">
                                <input type="text" name="apellido2" class="Input" value="<?php echo $alumno->getApellido2();?>"></td></tr>
                       <tr>
                        <td class="izq">
                            CORREO ELECTRONICO: </td><td class="der">
                            <input type="email" name="correo" class="Input" value="<?php echo $alumno->getCorreo();?>"></td></tr>
                       <tr>
                            <td class="izq">
                            TELEFONO CELULAR: </td><td class="der">
                                <input type="text" name="movil" class="Input" value="<?php echo $alumno->getMovil();?>"></td></tr>
                       <tr>
                            <td class="izq">
                            TELEFONO FIJO: </td><td class="der">
                                <input type="text" name="casa" class="Input" value="<?php echo $alumno->getCasa();?>"></td></tr>
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
                                <input type="text" name="triA" class="Input" value="<?php echo $alumno->getTriAprob();?>"></td></tr>
                        <td class="izq">
                            ESTATUS: </td><td class="der">
                            <select name="status">
                            <option value="0">Estatus...</option>    
                            <option value="Regular">Regular</option>    
                            </select>
                        </td></tr>
                            <td class="izq">
                            UNIDADES DE CREDITO A. </td><td class="der">
                                <input type="text" name="uca" class="Input" value="<?php echo $alumno->getUca();?>"></td></tr>
                       <tr>
                            <td class="izq">
                            UNIDADES DE CREDITO C. </td><td class="der">
                                <input type="text" name="ucc" class="Input" value="<?php echo $alumno->getUcc();?>"></td></tr>
                       
                    <tr><td id="C_Bot" colspan="2"><p id="bot"><input type="submit" name="actAlumno" value="Actualizar" class="boton"></p></td></tr>
                </table>
            </form>
            <?php
                if (isset($_POST["actAlumno"])) {

                    $alumno = new student($_POST["cedula"], "");

                    $alumno->setCedula($_POST["cedula"]);
                    $alumno->setCodigoCa($_POST["carrera"]);
                    $alumno->setStuTri($_POST["trimestre"]);
                    $alumno->setNombre($_POST["nombre"]);
                    $alumno->setNombre2($_POST["nombre2"]);
                    $alumno->setApellido($_POST["apellido"]);
                    $alumno->setApellido2($_POST["apellido2"]);
                    $alumno->setCorreo($_POST["correo"]);
                    $alumno->setMovil($_POST["movil"]);
                    $alumno->setCasa($_POST["casa"]);
                    $alumno->setTurno($_POST["turno"]);
                    $alumno->setLapsoAct($_POST["lapso_act"]);
                    $alumno->setLapsoOld($_POST["lapso_ant"]);
                    $alumno->setTriAprob($_POST["triA"]);
                    $alumno->setStatus($_POST["status"]);
                    $alumno->setUca($_POST["uca"]);
                    $alumno->setUcc($_POST["ucc"]);

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
