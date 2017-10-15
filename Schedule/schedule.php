<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: hiramjgonzalez98@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<?php
    require_once '../Config/Bd_conexion.php';
    require_once '../Config/check.php';
    
    require_once './Horas.php';
    
    
?>

<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>Horario de Clases - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="schedule-style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="../banner/banner.css">
        <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>

	</head>

	<body>

	   <?php require_once '../banner/banner.php'; ?>

	    <main>
	    	<article>
                    <?php require_once './Horario.php';?>
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