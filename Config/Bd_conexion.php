<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto cfranklinmoreno@gmail.com
 */

require_once 'config.php';

class conexion {
    
    protected $conexionBase;
    
    public function __construct() {

        try {
            $this->conexionBase = new PDO(bd_name, bd_user, bd_pass);
        } catch (Exception $e) {
            echo "No se ha podido conectar con la base de datos. "
            . "ERROR " + $e->getMessage();
        }
        
    }
    
    public function __destruct() {
        
        $this->conexionBase=NULL;
        
    }
    
    public function __connect() {
        
        try {
            $this->conexionBase = new PDO(bd_name, bd_user, bd_pass);
        } catch (Exception $e) {
            echo "No se ha podido conectar con la base de datos. "
            . "ERROR " + $e->getMessage();
        }
        
        
    }
    
    public function __conected(){
        
        return $this->conexionBase != NULL;
        
    }
    
    public function __conexion(){
        
        return $this->conexionBase;
        
    }
}
