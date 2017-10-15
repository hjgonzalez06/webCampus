<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: -hiramjgonzalez98@gmail.com
              -cfranklinmoreno@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->
<?php
    require_once '../Config/Bd_Gestion.php';
    $datosBase = new Bd_Gestion();
?>
<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>e-Inscripción - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="enrollment-style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
	    <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>
            <script src="../jquery.min.js"></script>
            <script src="ajax.js"></script>

            
            
	</head>

	<body>

	    <?php include_once '../banner/banner.php';?>

	    <main>
	    	<article>
                    <h1>INSCRIPCIONES ON-LINE</h1>
                    <hr>
                    <div id="Cuadros">
                        <div class="Asig" id="act">
                            
                                    <?php
                                        
                                        require_once './complement_enrollment.php';
                                    
                                    ?>
                            </table>
                            </form>
                            
                        </div>
                            <div class="Desp_Opc">
                                
                                <select id="secciones">
                                </select>
                                
                                
                                <p id="bot1"><input type="submit" name="inscribir" value="Inscribir" class="boton"></p>
                                <p id="bot2"><input type="reset" name="retirar" value="Retirar" class="boton"></p>
                            </div>
			    	<div class="Ins">
                                    <?php
                                        require_once './materias.php';
                                    ?>
			    	</div>
			    </div>
		    	<footer id="Can_Fin">
		    		<p id="inscribir"><input type="submit" name="cancelar" value="Cancelar" class="boton"></p>
	    			<p id="borrar"><input type="submit" name="finalizar" value="Finalizar" class="boton"></p>
		    	</footer>
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