<!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <br>
        <h4>Modificar</h4>
        <form action="modificacion.php" method="POST">
            <table width="130" border="2" style="background-color: #00b2ee">
                <tr>
                    <th>
                        <input type="submit" name="Alumno"value="Alumno">
                    </th>
                    <th>
                        <input type="submit" name="Seccion"value="Sección">
                    </th>
                    <th>
                        <input type="submit" name="Profesor"value="Profesor">
                    </th>
                </tr>
                <tr>
                    <th>
                        <input type="submit" name="Materia"value="Materia">
                    </th> 
                    <th>
                        <input type="submit" name="Trimestre"value="Trimestre">
                    </th> 
                    <th>
                        <input type="submit" name="Carrera"value="Carrera">
                    </th> 
                </tr>
            </table>
            </form>
        <?php
        
            if (isset($_POST["Carrera"])) {
                
                
            }else if (isset ($_POST["Profesor"])) {
                
                include_once './modificar_profesor.php';
                
            }else if(isset ($_POST["Materia"])){
                
            }else if (isset ($_POST["Seccion"])) {
                
            }else if (isset ($_POST["Trimestre"])) {
                
            }else if (isset ($_POST["Alumno"])) {
                
                include_once './modificar_alumnos.php';
                
            }
        ?>   
    </body>
    </center>
</html>
