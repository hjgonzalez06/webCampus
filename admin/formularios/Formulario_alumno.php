<!DOCTYPE html>

<?php
    require_once '../../Config/Bd_conexion.php';
?>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Nuevo Alumno - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="alumnos-style.css">
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
            <h1>Nuevo Alumno</h1>
            <div id="Cuadro">
                <form action="../../admin/datos.php" method="POST" autocomplete="off">
                    <table>
                        <tr>
                            <td class="izq">
                                CEDULA DE IDENTIDAD: </td><td class="der"><input type="number" name="cedula" placeholder="cedula" class="Input"></td></tr>
                        <tr>
                            <td class="izq">
                                NACIONALIDAD: </td><td class="der">
                                <select name="nacionalidad">
                                <option value="0">Nacionalidad</option>    
                                <option value="V">Venezolano</option>    
                                <option value="E">Extranjero</option>    
                                </select>
                            </td></tr>
                        
                        <tr>
                            <td class="izq">
                                CODIGO CARRERA</td><td class="der">
                                <select name="carrera">
                                        <option value="0" >Carreras...</option>
                                        
                                        <?php
                                            $registro = $datosBase->data("all","carreras");
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
                                            $registro = $datosBase->data("cod_tri","trimestres");
                                            foreach ($registro as $registro){
                                                echo '<option value ="'.$registro["cod_tri"].'">'.$registro["cod_tri"]
                                                        .' TRIMESTE Nº: '.$registro["n_tri"] .'</option>';
                                            }
                                        ?>
                        
                                    </select></td></tr>
                        <tr>
                            <td class="izq">
                                NOMBRE: </td><td class="der"><input type="text" name="nombre" placeholder="nombre" class="Input"></td></tr>
                        
                        <tr>
                                <td class="izq">
                                SEGUNDO NOMBRE: </td><td class="der"><input type="text" name="nombre2" placeholder="2doº nombre" class="Input"></td></tr>
                         
                          <tr>
                            <td class="izq">
                                APELLIDO: </td><td class="der"><input type="text" name="apellido" placeholder="apellido" class="Input"></td></tr>
                          <tr>
                                <td class="izq">
                                SEGUNDO APELLIDO: </td><td class="der"><input type="text" name="apellido2" placeholder="2doº apellido" class="Input"></td></tr>
                           <tr>
                            <td class="izq">
                                CORREO ELECTRONICO: </td><td class="der"><input type="email" name="correo" placeholder="correo electronico" class="Input"></td></tr>
                           <tr>
                                <td class="izq">
                                TELEFONO CELULAR: </td><td class="der"><input type="text" name="movil" placeholder="numero movil" class="Input"></td></tr>
                           <tr>
                                <td class="izq">
                                TELEFONO FIJO: </td><td class="der"><input type="text" name="casa" placeholder="numero fijo" class="Input"></td></tr>
                           <tr>
                                <td class="izq">
                                DIRECCIÓN: </td><td class="der"><input type="text" name="direccion" placeholder="dirección" class="Input"></td></tr>
                            <tr><td id="C_Bot" colspan="2"><p id="bot"><input type="submit" name="newAlumno" value="Enviar" class="boton"></p></td></tr>
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
