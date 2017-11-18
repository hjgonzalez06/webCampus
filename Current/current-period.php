<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: -hiramjgonzalez98@gmail.com
    		  -cfranklinmoreno@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<?php

    require_once '../Config/course/materia.php';
    require_once "../users/professor.php";

//    $secciones = $conexion->secciones("", "");
//    foreach ($secciones as $listaSeccion) {
//
//        $registro[]=$listaSeccion["cod_sec"];
//    }
//    $resultado = $conexion->buscar($registro, "26501690");
    
?>

<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>Período Actual - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="current-period-style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
                <link rel="stylesheet" type="text/css" href="../banner/banner.css">
        <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>

	</head>

	<body>
	   <?php require_once '../banner/banner.php';
                $fullName = $user->getApellido()." ".$user->getApellido2().
                        " ".$user->getNombre() ." ".$user->getNombre2();

           ?>
	    <main>
	    	<article>
	    		<h1>RESUMEN ACADÉMICO DEL ESTUDIANTE</h1>
	    		<hr></hr>
	    		<table id="Datos_G">
	    			<tr>
                        <td> <p>Cédula de Identidad: &nbsp</p>
                        </td>
                        <td>
                            <input type="text" name="CI" value="<?php echo $user->getCedula();?>" readonly="true">
                        </td>
	    			</tr>
	    			<tr>
                        <td><p>Apellidos y Nombres: &nbsp</p>
                        </td>
                        <td>
                            <input type="text" name="nombre" value="<?php echo $fullName;?>" readonly="true">
                        </td>
	    			</tr>
	    			<tr>
                        <td><p>Carrera: &nbsp</p>
                        </td>
                        <td>
                            <input type="text" name="carrera" value="<?php echo $user->getCodigoCa();?>" readonly="true">
                        </td>
	    			</tr>
	    			<tr>
                        <td><p>Período Activo: &nbsp</p>
                        </td>
                        <td>
                            <input type="text" name="CI" value="<?php echo $user->getLapso();?>" readonly="true">
                        </td>
	    			</tr>
	    		</table>
	    		<br>
	    		<table id="Datos_M">
	    			<p id="Titulo_M">
	    				MATERIAS CURSADAS PARA EL PERÍODO ACTIVO
	    			</p>
	    			<?php

                        foreach ($user->data_section() as $lista){

                            if (empty($lista)){
                                continue;
                            }

                            $materia = new materia($lista[COD_MAT]);
                            $profesor = new professor($lista[ID_PRO2],"");
                            $fullName = $profesor->getNombre() ." ".$profesor->getApellido();
                                        echo "<tr>
	    				<td>
	    					<input type='text' value='".$materia->getCodMat()."' readonly='true' class='Cod' title='Código de Materia'>
	    				</td>
	    				<td>
	    					<input type='text' value='".$materia->getName()."' readonly='true' class='Asig' title='Nombre de la Asignatura'>
	    				</td>
	    				<td>
	    					<input type='text' value='".$lista[TURN]."' readonly='true' class='Sec' title='Sección inscrita'>
	    				</td>
	    				<td>
	    					<input type='text' value='".$fullName."' readonly='true' class='Prof' title='Profesor de la asignatura'>
	    				</td>
	    				<td>
	    					<input type='text' value='".$materia->getUcCost()."' readonly='true' class='Uc' title='Unidades de Crédito de la asignatura'>
	    				</td>
	    				<td>
	    					<input type='text' value='Nah' readonly='true' class='Def' title='Calificación definitiva en la Asignatura'>
	    				</td>
	    			</tr>";
                                    }
                                ?>
	    			
	    		</table>
	    	</article>
	    </main>

	    <script src="../jquery.min.js"></script>
	    <script src="../Headroom/headroom.min.js"></script>
	    <script src="../Headroom/menu.js"></script>

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

	</body>
</html>