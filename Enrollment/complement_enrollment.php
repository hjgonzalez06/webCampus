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
    $conexionBase = new Bd_Gestion();
    $registroMaterias = $conexionBase->data("all", "materias");
    
    $secciones = $conexionBase->secciones("", "");
    foreach ($secciones as $listaSeccion) {
        $registro[]=$listaSeccion["cod_sec"];
    }
    $resultado = $conexionBase->buscar($registro, $_SESSION["usuario"]["cedula"]);
    foreach ($resultado as $resul) {
        if (!empty($resul)) {
            $noMostrar[] = $conexionBase->materia($resul["cod_sec"]);
        }
    }
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
    $saltar = false;
        foreach ($registroMaterias as $materia) {      
            if (!empty($noMostrar)) {
                foreach ($noMostrar as $lista) {
                    if ($lista["cod_mat"] == $materia["cod_mat"]) {
                        $saltar=true;
                        break;
                    }
                }
            }
            if ($saltar) {
                $saltar=false;
                continue;
            }
             echo "
                    <tr>
                        <td>
                            <input type='text' value='".$materia["cod_mat"]."' readonly='' class='Cod'>
                        </td>
                        <td>
                            <input type='button' id='".$materia["cod_mat"]."' value='".$materia["nombre"]."' readonly='' class='mat'>
                        </td>
                        <td>
                            <input type='text' value='".$materia["uc_cost"]."' readonly='' class='U_C'>
                        </td>
                    </tr>
                    ";  
        }
    ?>
        
    </form>
</tbody>
</table>
</form>
