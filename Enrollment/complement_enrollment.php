<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<script src="ajax.js"></script>
<tbody >
    
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


<form method="POST">
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
<form method="POST" id="todo">
    <?php
    foreach ($disponibles as $disponible) {

             echo "
                    <tr>
                        <td>
                            <input type='text' value='".$disponible["cod_mat"]."' readonly='' class='Cod'>
                        </td>
                        <td>
                            <input type='button' id='".$disponible["cod_mat"]."' value='".$disponible["nombre"]."' readonly='' class='mat'>
                        </td>
                        <td>
                            <input type='text' value='".$disponible["uc_cost"]."' readonly='' class='U_C'>
                        </td>
                    </tr>
                    ";  
        }
    ?>
        
    </form>
</tbody>
</table>
</form>
