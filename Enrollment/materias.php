<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<script src="ajax.js"></script>
<?php
    require_once '../Config/Bd_conexion.php';
    require_once '../Config/check.php';
    $conexion = new Bd_Gestion();
    $user = unserialize($_SESSION["user"]);
    $user->__connect();

    $secciones = course::show_all_sections();


    $cedula=$_SESSION["usuario"]["cedula"];
    
    if (isset($_POST["codDel"])) {
        $tabla = "registro_".$_POST["codDel"];
        $conexion->borrar($tabla, $cedula , "id_cuenta");
    }
    
    foreach ($secciones as $listaSeccion) {

        $registro[]=$listaSeccion["cod_sec"];
    }
    $resultado = $conexion->buscar($registro, $cedula);
    
    if (isset($_POST["codigo"])) {
        $codigo = $_POST["codigo"];
        $seccion = $_POST["seccion"];
        $conexion->inscripcion($cedula, $seccion);
        $resultado = $conexion->buscar($registro, $cedula);
    }
    
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
                    
                    if (!empty($codigo) || !empty($_POST["codDel"])) {
                        foreach ($resultado as $lista) {
                            if (empty($lista["cod_sec"])) {
                                continue;
                            }else{
                                $codigo=$lista["cod_sec"];
                                $resultado = $conexion->materia($codigo);
                                echo "
                                    <from method='POST'>
                                    <tr>    
                                        <td>
                                            <input type='text' value='".$resultado["cod_mat"]."' readonly=''>
                                        </td>
                                        <td>
                                            <input type='button' id='".$resultado["cod_sec"]."' value='".$resultado["nombre"]."' readonly='' class='mate'>
                                        </td>
                                        <td>
                                            <input type='text' value='".$resultado["turno"]."' readonly='' class='U_C'>
                                        </td>
                                    </tr>
                                    <from>
                                ";  
                            }
                        }
                    }
                ?>
            </tr>
        </tbody>
</table>
<META HTTP-EQUIV="REFRESH" CONTENT="25;URL=enrollment.php">