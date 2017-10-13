<?php

require_once 'User.php';

class student extends user {
    
    
    /**
     * Constructor de la clase student 
     *  -1er parametro = cedula 
     *  -2do parametro = contraseña 
     * 
     *  #NOTA: Un parametro indica el registro de un nuevo alumno.
     * @param type $idCuenta
     * @param type $contraseña
     */
    public function __construct() {
        
        $datos = func_get_args();
        
        if (count(func_get_args())==2) {
        
            parent::__construct($datos[0], $datos[1]);
            
        }else{
            
             parent::__construct($datos[0], "");
             
             $this->agregar_alumno();
        }
        
    }
    
    private function agregar_alumno() {
        
        $sql  = "INSERT INTO ".TABLE_STUDENT." (".ID_STU.", ".ID_AC3.") VALUES"
                . "(:cedula, :id_cuenta)";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":cedula"=>$this->idCuenta, 
            ":id_cuenta"=>$this->idCuenta));
        
        //Aqui debe sumar
        
        $this->establecer_id();
        
        $resultado->closeCursor();
        
    }
    
}
