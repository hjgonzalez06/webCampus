<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<?php
    require_once '../Config/Bd_conexion.php';
    require_once '../Config/check.php';
    require_once "../Config/course/materia.php";

    $user = unserialize($_SESSION["user"]);
    $user->__connect();

    $secciones = $user->data_section();

?>

<table>
    <p id="Titulo">ASIGNATURAS INSCRITAS</p>
    <thead>
        <tr>
            <th>
                <p>CÓDIGO</p>
            </th>
            <th>
                <p>ASIGNATURA</p>
            </th>
            <th>
                <p>SECCIÓN</p>
            </th>
        </tr>
    </thead>
        <tbody>
            <tr>

            <?php
                foreach ($secciones as $seccione) {

                    $materiaTemp = new materia($seccione[COD_MAT]);

                    echo "
                        
                        <tr id = ".$seccione[COD_MAT].">    
                            <td>
                                <input type='text' name = 'codigo' value='" . $seccione[COD_MAT] . "' readonly class='Cod'>
                            </td>
                            <td>
                                <input type='button' onclick='mostrarSec(\"".$seccione[COD_MAT]."\")' id='" . $seccione[COD_SEC] . "' value='" . $materiaTemp->getName(). "' readonly='' class='mate'>
                            </td>
                            <td>
                                <input type='text' value='" . $seccione["turno"] . "' readonly='' class='U_C'>
                            </td>
                        </tr>
                    ";

                }
            ?>
            </tr>
        </tbody>
</table>