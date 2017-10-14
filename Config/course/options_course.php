<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto cfranklinmoreno@gmail.com
 */


/**
 * Clase abstracta, con todas las opciones para la visualización de los datos 
 * de TABLE_COURSE
 * <br>
 * @author nookamb
 */

require_once '../Bd_conexion.php';

abstract class options_course extends conexion {
    
    protected $courseName;

    public function __construct() {
        
        parent::__construct();
        
    }
    
    public function getCodMat(){
        
        
    }
    
}
