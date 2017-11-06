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

require_once 'course.php';

abstract class options_course extends course {
    
public function __construct($codigoMat) {
    parent::__construct($codigoMat);
}


public function getCodMat(){
        
        $sql = "SELECT ".COD_MAT." FROM".TABLE_COURSE." WHERE ".COD_MAT." = ".$id;
        
        
    }
    
}
