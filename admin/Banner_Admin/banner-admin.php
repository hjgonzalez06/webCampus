<!--
 Código fuente desarrollado por Franklin Moreno e Hiram González
  Contacto:
   hiramjgonzalez98@gmail.com
   cfranklinmoreno@gmail.com
 -->
<?php
require_once '../../Config/chechadmin.php';


?>
 
<header id="Header">
  <nav class="Menu">
    <div class="Logo">
      <div>
      <span class="Span1">
        <img src="../../Imagenes/Logo Unimar.png" alt=""><img src="../../Imagenes/Encabezado2.png" id="Encabezado2">
      </span>
      <span class="Span2">
        <img src="../../Imagenes/Encabezado3.png" id="Encabezado3">
      </span>
      </div>
      <a href="#" class="btn-Menu" id="btn-Menu">
        <i class="icono fa fa-bars" aria-hidden="true"></i>
      </a>
    </div>
    <div class="Ident_Fecha">
      <p>
        <?php                   
          echo "Bienvenido, Administrador";
        ?>
      </p>
      <span>
      <script src="../../miscelaneo.js" ></script>
      </span>
    </div>
    <div class="Enlaces" id="Enlaces">
      <a href="../crudv01/accion.php">
        <i class="fa fa-cog" aria-hidden="true"><span> Panel</span></i>
      </a>
      <a href="../crudv01/creacion.php">
        <i class="fa fa-plus" aria-hidden="true"><span> Habilitar</span></i>
      </a>
      <a href="../crudv01/buscar.php">
        <i class="fa fa-search" aria-hidden="true"><span> Búsqueda+</span></i>
      </a>
      <a href="../logout-admin.php">
        <i class="fa fa-power-off" aria-hidden="true"><span> Cerrar Sesión</span></i>
      </a>
    </div>
  </nav>
</header>

