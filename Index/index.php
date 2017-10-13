<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: -hiramjgonzalez98@gmail.com
              -cfranklinmoreno@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>Inicio - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="index-style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
	    <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>
	    <link rel="stylesheet" type="text/css" href="fonts.css">

	</head>

	<body>
                
		<div id="ventanaModal">
			<script src="modal.js"></script>
			<img src="../Imagenes/Logo Unimar.png" id="contenido" onclick="cerrarVentana()">
		</div>

	    <?php require_once '../banner/banner.php';?>

	    <main>
	    	<aside id="Noticias">
		    	<iframe src="noticias.html" width="100%" height="295" scrolling="auto" frameborder="0" AllowTransparency="true"></iframe>
	    	</aside>
	    	<article>
	    		<div id="E_Paginas">
	    			<div id="E_1">
		    			<figure>
		    				<a href="http://mail.unimar.edu.ve/" target="_blank"><img src="Slides/Inicio 1.png"></a>
		    				<figcaption>UNIMAIL</figcaption>
		    			</figure>
		    			<figure>
		    				<a href="http://www.unimar.edu.ve/unimarportal/bibliot_virt/index.htm" target="_blank"><img src="Slides/Inicio 2.png"></a>
		    				<figcaption>BIBLIOTECA</figcaption>
		    			</figure>
		    		</div>
		    		<div id="E_2">
		    			<figure>
		    				<a href="http://unimar.edu.ve/unimarportal/documentos/revista-unimarista-digital.html" target="_blank"><img src="Slides/Inicio 3.png"></a>
		    				<figcaption>REVISTA</figcaption>
		    			</figure>
		    			<figure>
		    				<a href="http://www.unimar.edu.ve/moodle25/" target="_blank"><img src="Slides/Inicio 4.png"></a>
		    				<figcaption>AULA VIRTUAL</figcaption>
		    			</figure>
		    		</div>
		    		<div id="E_3">
		    			<figure>
		    				<a href="http://www.lorini.net/streaming/clientes/uniradio.htm" target="_blank"><img src="Slides/Inicio 5.png"></a>
		    				<figcaption>UNIRADIO</figcaption>
		    			</figure>
		    		</div>
	    		</div>
	    	</article>
	    	<aside id="Flexslider">
	    		<div class="Slides">
	    			<img src="Slides/Unimar 1.png">
	    			<img src="Slides/Unimar 2.png">
	    			<img src="Slides/Unimar 3.png">
	    			<img src="Slides/Unimar 4.png">
	    			<img src="Slides/Unimar 5.png">
	    			<img src="Slides/Unimar 6.png">
	    			<img src="Slides/Unimar 7.png">
	    		</div>
	    	</aside>
	    	<footer id="Opciones">
	    		<a href="#"><em><u>Sobre Unimar</u></em></a>
	    		<p>/</p>
	    		<a href="#"><em><u>Preguntas Frecuentes</u></em></a>
	    		<p>/</p>
	    		<a href="#"><em><u>Manual de Usuario</u></em></a>
	    		<p>/</p>
	    		<a href="#"><em><u>Opiniones y Sugerencias</u></em></a>
	    		<p>/</p>
	    		<a href="#"><em><u>Contáctanos</u></em></a>
	    	</footer>
	    </main>

	    <script src="../jquery.min.js"></script>
	    <script src="../Headroom/headroom.min.js"></script>
	    <script src="../Headroom/menu.js"></script>
	    <script src="js/jquery.slides.js"></script>
	    <script>
	    	$(function(){
			  	$(".Slides").slidesjs({
				    play: {
					    active: true,
					      // [booleano] Genera el botón de Iniciar y Detener.
					    effect: "slide",
					      // [cadena] Puede ser "slide" o "fade".
					    interval: 2500,
					      // [número] Tiempo de espera antes de cambiar de diapositiva (en milisegundos).
					    auto: true,
					      // [booleano] Iniciar reproducción al cargar página.
					    swap: true,
					      // [booleano] Muestra/Oculta los botones de Inicio y Pausa.
					    pauseOnHover: false,
					      // [booleano] Detiene la reproducción al posar el mouse sobre las diapositivas.
					    restartDelay: 2500
				    }
				});
			});
	    </script>

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

	</body>
</html>