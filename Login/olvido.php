<!DOCTYPE html>

<!--
    CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: hiramjgonzalez98@gmail.com
    TODOS LOS DERECHOS RESERVADOS
-->

<?php
    require_once 'logic_login.php';
?>




<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página oficial del WebCampus de la Universidad de Margarita: Alma Mater del Caribe."/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
        <title>Recuperación Cuenta - WebCampus UNIMAR</title>
        <link rel="stylesheet" type="text/css" href="login-style.css"/>
        <link rel="shortcut icon" type="image/ico" href="../Imagenes/Logo Unimar.png"/>

    </head>

    <body>

        <div id="particles-js">
            <script src="../Efecto-Particulas-Fondo/particles.js"></script>
            <script src="../Efecto-Particulas-Fondo/particulas.js"></script>
        </div>

        <figure id="Encabezado">
            <img src="../Imagenes/Encabezado WC.png"/>
        </figure>
        
        <section>
            <div id="envoltura">      
                    <div id="cuerpo">
                        <form id="form-login" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">

                            <p><label >Cédula de Identidad</label></p>
                            <input class="User" type="text" id="usuario" name="usuario" placeholder="Introduzca su cédula" autofocus="" required=""></p>
                            <p><label>Correo</label></p>
                            <input class="Pass" type="text" id="email" name="email" placeholder="Introduzca correo" required=""></p>
                            <p id="bot"><input type="submit" id="recuperar" name="recuperar" value="Enviar Correo" class="boton"></p>
                        </form>
                        <?php if (isset($_POST["recuperar"])) {

                                $login = new logic_login();
                                echo "<br>";
                                echo $login->forgot();
                                echo "<br>";
                            }?>
                    </div>
            </div>
        </section>
        
        

		<footer>
			<p><small><em>© 2017 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</em></small></p>
		</footer>

    </body>

</html>