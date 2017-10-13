<?php

    session_start();
    
    session_destroy();
    setcookie("login", 1, time()-1, "/");
    
    ob_start();
    header("refresh: 3; url = ../Login/login.php");
  
    ob_end_flush();  
?>

<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>Cierre de Sesión - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="logout-admin-style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="Banner_Admin/banner-admin-style.css">
	    <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>

	</head>

	<body>

		<div id="particles-js">
	        <script src="../Efecto-Particulas-Fondo/particles.js"></script>
            <script src="../Efecto-Particulas-Fondo/particulas.js"></script>
	    </div>

	    <header id="Header">
		    <nav class="Menu">
		        <div class="Logo">
		            <div>
		                <span class="Span1">
		                        <img src="../Imagenes/Logo Unimar.png" alt=""><img src="../Imagenes/Encabezado2.png" id="Encabezado2">
		                </span>
		                <span class="Span2">
		                        <img src="../Imagenes/Encabezado3.png" id="Encabezado3">
		                </span>
		            </div>  
		        </div>		            
		    </nav>
		</header>

	    <main>
	    	<h1>Acceso para Administradores ha sido deshabilitado exitosamente</h1>
	    	<div id="envoltura">      
                <div id="cuerpo">
                    <p id="Despedida">Esperamos que haya tenido una grata experiencia.</p>
                    <p id="Despedida">Vuelva pronto.</p>
                </div>
            </div>
	    </main>

	    <script src="../jquery.min.js"></script>
	    <script src="../Headroom/headroom.min.js"></script>
	    <script src="../Headroom/menu.js"></script>

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

	</body>
</html>