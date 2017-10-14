

<!--
 Código fuente desarrollado por Franklin Moreno e Hiram González
  Contacto:
   hiramjgonzalez98@gmail.com
   cfranklinmoreno@gmail.com
 -->
<?php
    
    include_once '../Config/check.php';
    require_once '../users/student.php';
    require_once '../users/admin.php';
    $user = unserialize($_SESSION["user"]);
    $user->__connect();

?>
 <link rel="stylesheet" type="text/css" href="../banner/banner.css">

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
            <a href="#" class="btn-Menu" id="btn-Menu">
                    <i class="icono fa fa-bars" aria-hidden="true"></i>
            </a>
        </div>
        <div class="Ident_Fecha">
        <p>
        <?php                   
            echo "Bienvenido, ";
            echo  $user->getNombre(). " " . $user->getApellido();
        ?>
            
        </p>
            <span>
                    <script src="../miscelaneo.js" ></script>
            </span>
        </div>
            <div class="Enlaces" id="Enlaces">
                   <a href="../Index/index.php">
                           <i class="fa fa-university" aria-hidden="true"><span> Inicio</span></i>
                   </a>
                   <a href="../Student-Data/student-data.php">
                           <i class="fa fa-user-circle" aria-hidden="true"><span> Datos</span></i>
                   </a>
                   <a href="../Schedule/schedule.php">
                           <i class="fa fa-calendar-o" aria-hidden="true"><span> Horario</span></i>
                   </a>
                   <a href="../Current/current-period.php">
                           <i class="fa fa-graduation-cap" aria-hidden="true"><span> Período Actual</span></i>
                   </a>
                   <a href="../Calendar/calendar.php">
                           <i class="fa fa-calendar" aria-hidden="true"><span> Calendario</span></i>
                   </a>
                   <a href="../Enrollment/enrollment.php">
                           <i class="fa fa-pencil-square-o" aria-hidden="true"><span> e-Inscripciones</span></i>
                   </a>
                   <a href="../Logout/logout.php">
                           <i class="fa fa-power-off" aria-hidden="true"><span> Cerrar Sesión</span></i>
                   </a>
            </div>
            
    </nav>
</header>

