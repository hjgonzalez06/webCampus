<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto cfranklinmoreno@gmail.com
-->
<?php
    require_once '../../Config/Bd_conexion.php';
    require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/Config/course/materia.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/users/professor.php";
    $materias = materia::show_all_courses();
    $profesores = professor::show_all();

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Nueva Sección - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="complemento-seccion-style.css">
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../banner/banner.css">
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css"/>
        <link rel="shortcut icon" type="image/ico" href="../../Imagenes/Logo Unimar.png"/>
    </head>

    <body>

        <?php include_once '../Banner_Admin/banner-admin.php';?>

        <main>
            <h1>Nueva Sección</h1>
            <div id="Cuadro">
                <form action="../datos.php" method="POST" autocomplete="off">
                    <table>
                        <tr>
                            <td class="izq">
                                CARRERA: </td><td class='der' > 
                                <input type="text" name="carrera" id="carrera" 
                                       value="<?php echo $_POST['carrera'];?>" readonly="readonly" class="Input"></td></tr>
                                
                        <tr>
                            <td class="izq">
                                CODIGO SECCIÓN: </td><td class="der"><input type="text" name="seccion" class="Input"></td></tr>
                        <tr>
                            <td class="izq">
                            CODIGO MATERIAS: </td><td class="der">
                                <select name="materias">
                                <option value="0" >Materias...</option>

                                    <?php
                                        foreach ($materias as $materia) {

                                            echo '<option value ="'.$materia[COD_MAT].'">'.
                                            $materia[COD_MAT].'--'.$materia[NAME_CRS]
                                                .'</option>';

                                            }
                                    ?>

                                </select></td></tr>

                        <tr>
                            <td class="izq">
                            CODIGO PROFESOR: </td><td class="der">
                                <select name="profesor">
                                <option value="0" >Profesores...</option>

                                    <?php
                                        foreach ($profesores as $profesore){
                                            echo '<option value ="'.$profesore[ID_PRO].'">'.
                                            $profesore[ID_PRO].'--'.$profesore[NAME_PRO]
                                                .' '. $profesore[LNAME_PRO] .'</option>';
                                            }
                                    ?>

                                </select></td></tr>
                        
                        <tr>
                            <td class="izq">
                            HORARIO 1: </td><td class="der"><input type="number" name="horario1" class="Input"></td></tr>

                        <tr>
                            <td class="izq">
                            DIA 1: </td><td class="der">
                                <select name="dia1">
                                <option value="0" >Dias...</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sábado">Sábado</option>
                                </select></td></tr>
                        
                        <tr>
                            <td class="izq">
                            HORARIO 2: </td><td class="der"><input type="number" name="horario2" class="Input"></td></tr>

                        <tr>
                            <td class="izq">
                            DIA 2:</td><td class="der">
                                <select name="dia2">
                                <option value="0" >Dias...</option>
                                    <option value="">-</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sábado">Sábado</option>
                                </select></td></tr>
                        
                        
                        <tr>
                            <td class="izq">
                            TURNO</td><td class="der">
                                <select name="turno">
                                <option value="0" >Turnos...</option>
                                    <option value="M01">M01</option>
                                    <option value="M02">M02</option>
                                    <option value="M03">M03</option>
                                    <option value="M04">M04</option>
                                    <option value="M05">M05</option>
                                    <option value="T01">T01</option>
                                    <option value="T02">T02</option>
                                    <option value="T03">T03</option>
                                    <option value="T04">T04</option>
                                    <option value="T05">T05</option>
                                    <option value="N01">N01</option>
                                    <option value="N02">N02</option>
                                    <option value="N03">N03</option>
                                    <option value="N04">N04</option>
                                    <option value="N05">N05</option>
                                </select></td></tr>
                        
                        <tr><td id="C_Bot" colspan="2"><p id="bot"><input type="submit" name="newSeccion" value="Crear" class="boton"></p></td></tr>
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
