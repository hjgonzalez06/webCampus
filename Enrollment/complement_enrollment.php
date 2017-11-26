<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<?php
    require_once '../Config/check.php';
    require_once '../Config/Bd_conexion.php';
    require_once 'inscripcion.php';

    $user = unserialize($_SESSION["user"]);
    $user->__connect();
    $inscripcion = new inscripcion($user);

    $registroMaterias = course::show_all_courses();
    $secciones = course::show_all_sections();
    $noMostrar = $user->data_section();
    $disponibles = $inscripcion->disponibles();

    ?>
<table>
<p id="Titulo">ASIGNATURAS A INSCRIBIR</p>
<thead>
    <tr>
        <th>
            <p>CÓDIGO</p>
        </th>
        <th>
            <p>ASIGNATURA</p>
        </th>
        <th>
            <p>U.C.</p>
        </th>
    </tr>
</thead>
    <tbody class = "matedescritas">
    <?php

    foreach ($disponibles as $disponible) {
        echo "
            <tr id = ".$disponible[COD_MAT].">
                <td>
                    <input  retype='text' name ='cod1' value='".$disponible[COD_MAT]."' readonly='' class='Cod'>
                </td>
                <td>
                    <input type='button' onclick='mostrarSec(\"".$disponible[COD_MAT]."\")' id='asg' value='".$disponible[NAME_CRS]."' readonly='' class='mat'>
                </td>
                <td>    
                    <input type='text' value='".$disponible[COST]."' readonly='' class='U_C'>
                </td>
            </tr>
            ";
    }
    ?>
    </tbody>
</table>
