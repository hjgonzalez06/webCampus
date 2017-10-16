<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: hiramjgonzalez98@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>Calendario Académico - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="calendar-style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
	    <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>

	</head>

	<body>

	    <?php include_once '../banner/banner.php';?>

	    <main>
	    	<article>
	    		<h1>Calendario Académico - UNIMAR</h1>
	    		<hr>
		    	<div id="Principal">
	    			<div id="Cal_Prin">
	    				<div id="Meses">
	    					<input type="button" value="Enero" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/enero.html';">
	    					<input type="button" value="Febrero" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/febrero.html';">
	    					<input type="button" value="Marzo" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/marzo.html';">
	    					<input type="button" value="Abril" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/abril.html';">
	    					<input type="button" value="Mayo" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/mayo.html';">
	    					<input type="button" value="Junio" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/junio.html';">
	    					<input type="button" value="Julio" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/julio.html';">
	    					<input type="button" value="Agosto" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/agosto.html';">
	    					<input type="button" value="Septiembre" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/septiembre.html';">
	    					<input type="button" value="Octubre" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/octubre.html';">
	    					<input type="button" value="Noviembre" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/noviembre.html';">
	    					<input type="button" value="Diciembre" id="BMes" onclick="document.getElementById('calendario').src = 'Meses/diciembre.html';">
	    				</div>
			    		<div id="Cal">
			    			<iframe id="calendario" src="" width="100%" height="50px" scrolling="none" frameborder="0" AllowTransparency="true" onload="<?php require_once 'calendar.js';?>"></iframe>
			    		</div>
			    	</div>
		    		<div class="Sig">
			    		<table id="Sig">
			    			<tr>
			    				<td class="Trim">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					Trimestre Regular
			    				</td>
			    			</tr>
			    			<tr>
			    				<td class="Ins">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					Inscripciones
			    				</td>
			    			</tr>
			    			<tr>
			    				<td class="Int">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					Intensivos
			    				</td>
			    			</tr>
			    			<tr>
			    				<td class="Emb">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					Emblemáticos UNIMAR
			    				</td>
			    			</tr>
			    			<tr>
			    				<td class="Vac">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					Vacaciones
			    				</td>
			    			</tr>
			    			<tr>
			    				<td class="No_Lab">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					No Laborables
			    				</td>
			    			</tr>
			    			<tr>
			    				<td class="Nav">
			    					<canvas width="30" height="15"></canvas>
			    				</td>
			    				<td>
			    					Asueto navideño
			    				</td>
			    			</tr>
			    		</table>
		    		</div>
		    	</div>
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