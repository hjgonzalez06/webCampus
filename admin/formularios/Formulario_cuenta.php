<!DOCTYPE html>

<?php
    require_once '../../Config/Bd_conexion.php';
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title> WEB CAMPUS</title>
</head>
<h1>NUEVO ALUMNO</h1>
<form action="../datos.php" method="POST">
        <table>
            <tr>
                <td class="izq">
                    CEDULA DE IDENTIDAD: </td><td class="der"><input type="number" name="cedula"></td></tr>
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
                    NOMBRE: </td><td class="der"><input type="text" name="nombre"></td></tr>
             
              <tr>
                <td class="izq">
                    APELLIDO: </td><td class="der"><input type="text" name="apellido"></td></tr>
               <tr>
                <td class="izq">
                    CORREO ELECTRONICO: </td><td class="der"><input type="email" name="correo"></td></tr>
            <tr><td colspan="2"><input type="submit" name="newAlumno"value="ENVIAR"></td></tr>
        </table>
    </form>
</html>
