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
			    		<div id="Cal">
			    			<div class="Header">
			    				<span class="Left Button" id="Prev">&lang;</span>
			    				<span class="Left Hook"></span>
			    				<span class="Month-year" id="label"> Julio 2017</span>
			    				<span class="Right Hook"></span>
			    				<span class="Right Button" id="Next">&rang;</span>
			    			</div>
			    			<table id="Days">
			    				<td>D</td> 
								<td>L</td> 
								<td>M</td> 
								<td>Mi</td> 
								<td>J</td> 
								<td>V</td> 
								<td>S</td>
			    			</table>
			    			<div id="Cal-frame">
			    				<table class="Curr"> 
								    <tbody>
								        <tr><td class="nil"></td><td class="nil"></td><td class="nil"></td><td class="nil"></td><td class="nil"></td><td class="nil"></td><td>1</td></tr>
								        <tr><td>2</td><td class="Trim">3</td><td class="Trim">4</td><td class="No_Lab">5</td><td class="Trim">6</td><td class="today">7</td><td>8</td></tr>
								        <tr><td>9</td><td class="Trim">10</td><td class="Trim">11</td><td class="Trim">12</td><td class="Trim">13</td><td class="Trim">14</td><td>15</td></tr>
								        <tr><td>16</td><td class="Trim">17</td><td class="Trim">18</td><td class="Trim">19</td><td>20</td><td>21</td><td>22</td></tr>
								        <tr><td>23</td><td class="No_Lab">24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td></tr>
								        <tr><td>30</td><td class="No_Lab">31</td><td class="nil"></td><td class="nil"></td><td class="nil"></td><td class="nil"></td><td class="nil"></td></tr>
								    </tbody>
								</table>
			    			</div>
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
	    <script src="calendar.js"></script>
	    <script type="text/javascript">
	    	var cal = CALENDAR(); 
			cal.init();
	    </script>

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

	</body>
</html>