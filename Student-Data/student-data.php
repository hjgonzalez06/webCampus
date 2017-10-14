<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: -hiramjgonzalez98@gmail.com
              -cfranklinmoreno@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<?php
    require_once '../Config/Bd_conexion.php';
    require_once '../Config/check.php';
    
    $conexion = new Bd_Gestion();
    $informacion = $conexion->data($_SESSION["usuario"]["cedula"], "alumnos");
    $carrera = $conexion->data($informacion["carrera"], "carreras");
    $total = ($informacion["uca"]-$carrera["uc_tol"])*-1;
    
?>
<html>
	<head>

		<meta charset="UTF-8"/>
	    <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<title>Datos Generales - WebCampus UNIMAR</title>
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="student-data-style.css"/>
        <link rel="stylesheet" type="text/css" href="../banner/banner.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
	    <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>
            
            

	</head>

	<body>
            
            <?php include_once '../banner/banner.php';?>

	    <main>
	    	<article>
	    		<h1>DATOS ACADÉMICOS</h1>
	    		<hr>
		    		<table id="Datos_Est">
		    			<tr name="Datos 1">
		    				<td>
                                                    <p><label>Cédula de Identidad: &nbsp</label></p>
                                                    <input type="text" name="ci" id="ci"
                                                            value="<?php echo $informacion['cedula'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>Apellidos: &nbsp</label></p>
                                                    <input type="text" name="ape" id="ape" 
                                                        value="<?php echo $informacion['apellido'].' '. $informacion['apellido_do']; ?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>Nombres: &nbsp</label></p>
                                                    <input type="text" name="ape" id="ape" 
                                                        value="<?php echo $informacion['nombre'].' '. $informacion['nombre_do']; ?>" readonly="true"/>
		    				</td>
		    			</tr>
		    			<tr name="Datos 2">
		    				<td>
                                                    <p><label>Carrera: &nbsp</label></p>
                                                    <input type="text" name="ca" id="ca"
                                                        value="<?php echo $informacion['carrera'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>Turno: &nbsp</label></p>
                                                    <input type="text" name="tur" id="tur"
                                                        value="<?php echo $informacion['turno'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>Tipo de Ingreso: &nbsp</label></p>
                                                    <input type="text" name="ni" id="ni" readonly="true" placeholder="Nuevo Ingreso">
		    				</td>
		    			</tr>
		    			<tr name="Datos 3">
		    				<td>
                                                    <p><label>Lapso Inscrito: &nbsp</label></p>
                                                    <input type="text" name="lapa" id="lapa"
                                                        value="<?php echo $informacion['lapso_act'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>Último Cursado: &nbsp</label></p>
                                                    <input type="text" name="lapo" id="lapo"
                                                        value="<?php echo $informacion['lapso_old'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>Trimestres Aprobados: </label></p>
                                                    <input type="text" name="tria" id="tria"
                                                        value="<?php echo $informacion['tri_aprob'];?>" readonly="true"/>
		    				</td>
		    			</tr>
		    			<tr name="Datos 4">
		    				<td>
                                                    <p><label>Estatus Académico: &nbsp</label></p>
                                                    <input type="text" name="ea" id="ea"
                                                        value="<?php echo $informacion['status'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>U.C. Aprobadas: &nbsp</label></p>
                                                    <input type="text" name="ucc" id="ucc"
                                                        value="<?php echo $informacion['uca'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>U.C. por Cursar: &nbsp</label></p>
                                                    <input type="text" name="uca" id="uca"
                                                        value="<?php echo $total; ?>" readonly="true"/>
		    				</td>
		    			</tr>
		    			<tr name="Datos 5">
		    				<td>
                                                    <p><label>I.A. Trimestral: &nbsp</label></p>
                                                    <input type="text" name="ia" id="ia"
                                                        value="<?php echo $informacion['indice_act'];?>" readonly="true"/>
		    				</td>
		    				<td>
                                                    <p><label>I.A. General: &nbsp</label></p>
                                                    <input type="text" name="ia" id="ia"
                                                        value="<?php echo $informacion['indice_tol'];?>" readonly="true"/>
		    				</td>
		    			</tr>
		    		</table>
		    	</hr>
	    	</article>
	    	<br>
	    	<article>
	    		<h1>DATOS DE CONTACTO</h1>
	    		<hr>
		    		<form id="form-login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
	    				<table id="Datos_C">
	    					<tr>
                                                    <td>
                                                    <p><label >Teléfono Móvil: &nbsp</label></p>
		                        <input class="Tel_Mov" type="tel" id="Tel_Mov" name="mov" value="<?php echo $informacion['movil'];?>" required="true">
		                        </td>
	                        	<td>
		                        <p><label>Teléfono Domicilio: &nbsp</label></p>
		                        <input class="Tel_fij" type="tel" id="Tel_Mov" name="fij" value="<?php echo $informacion['casa'];?>" required="true">
		                        </td>
	                        	<td>
		                        <p><label>Correo Electónico: &nbsp</label></p>
		                        <input class="correo" type="tel" id="Tel_Mov" name="co" value="<?php echo $informacion['correo'];?>" required="true">
		                        </td>
	                        </tr>
                                <tr><td> 
                                    <?php
                                        if (isset($_GET["error"]) && $_GET["error"]==2) {
                                            echo "<input type='text' value='ERROR,"
                                            . " verifique la información proporcionada.'"
                                                    . " readonly='true'/>";
                                        }
                                    ?>
                                </td></tr>
                                
                        </table>
                		<p id="bot"><input type="submit" id="submit" name="act" value="Guardar" class="boton"></p>
                    </form>
		    	</hr>
	    	</article>
	    	<br>
	    	<article>
	    		<h1>ACTUALIZACIÓN DE CONTRASEÑA</h1>
	    		<hr>
	    			<form id="form-login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
	    				<table id="Cambio">
	    					<tr>
		    					<td>
		    					<p><label >Contraseña Actual: &nbsp</label></p>
		                        <input class="Act_Pass" type="password" id="Act_Cont" name="contra" placeholder="Ingrese la contraseña actual" required="true">
		                        </td>
	                        	<td>
		                        <p><label>Nueva Contraseña: &nbsp</label></p>
		                        <input class="New_Pass" type="password" id="New_Cont" name="newContra" placeholder="Ingrese la nueva contraseña" required="true">
		                        </td>
	                        	<td>
		                        <p><label>Verificar Contraseña: &nbsp</label></p>
                                     
		                        <input class="Vef_Pass" type="password" id="Vef_Cont" name="veContra" placeholder="Ingrese de nuevo la contraseña" required="true">
		                        </td>
	                        </tr>
                                <tr><td> 
                                    <?php
                                        if (isset($_GET["error"]) && $_GET["error"]==1) {
                                            echo "<script language='javascript'>"
                                            . "alert('Contraseñas incorrectas."
                                                    . " Intente de nuevo.')</script>";
                                            echo "<META HTTP-EQUIV='REFRESH' "
                                            . "CONTENT='0;URL=student-data.php'>";
                                        }
                                    ?>
                                    </td></tr>
                        </table>
                		<p id="bot"><input type="submit" id="submit" name="actContra" value="Guardar" class="boton"></p>
                    </form>
		    	</hr>
	    	</article>
	    </main>
            
            <?php
                if (isset($_POST["actContra"])) {
                    $resultado = $conexion->actContra($_POST["contra"], 
                                $_POST["newContra"], $_POST["veContra"], $informacion["cedula"]);
                    if ($resultado!=0) {
                        ob_start();
                        
                        echo "<META HTTP-EQUIV='REFRESH' "
                        . "CONTENT='0;URL=student-data.php?error=1'>";
  
                        ob_end_flush(); 

                    }
                }elseif(isset($_POST["act"])){
                    $resultado= $conexion->contacto_alumno($_POST["mov"], 
                            $_POST["fij"], $_POST["co"], $informacion["cedula"]);
                    
                    if ($resultado!=0) {
                        ob_start();
                        
                        echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=student-data.php?error=2'>";
  
                        ob_end_flush(); 

                    }
                }
            ?>

	    <script src="../jquery.min.js"></script>
	    <script src="../Headroom/headroom.min.js"></script>
	    <script src="../Headroom/menu.js"></script>

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

	</body>
</html>