<?php

require_once '../Config/cuenta.php';
require_once '../Config/admin_option.php';

class admin extends admin_option {
    
    private $segundaContraseña; //Espera
    
    public function __construct($idCuenta, $contraseña) {
        
        parent::__construct($idCuenta, $contraseña);

    }

    /**
     * Permite verificación del usuario y la contraseña.<br>
     *   -Devuelve 0 si logra comprobar ambos campos.<br>
     *   -Devuelve 1 en caso contrario.
     * @return int
     */
    public function login(){
        
         if ($this->comprobar_admin()==1 && $this->comprobar_contra()==0) {
             
            return 0; 
            
        }
        
        return 1;
        
    } 
    
    /**
     * Verifiación del usuario y la contraseña a nivel de usuario -ADMIN-
     * 
     * @return type
     */
    private function comprobar_admin(){
        
        $sql = "SELECT ".ID_ADMIN." FROM admin WHERE ".ID_ADMIN." = :usuario"
                . " AND ".PASSWRD_A."= :contra";
        
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":usuario"=> $this->idCuenta, 
            ":contra"=> $this->contraseña));
        
        return $resultado->rowCount();
        
    }
    
    /**
     * Comprobación de contraseña, modificado para el nivel de usuario -ADMIN-
     * 
     * @return type
     */
    public function comprobar_contra() {
        
        $sql = "SELECT contrasenha FROM admin WHERE id_cuenta = :id";
        $sentencia = $this->conexionBase->prepare($sql);
        $sentencia->execute(array("id"=> $this->idCuenta));
        
        return strcmp($sentencia->fetch()["contrasenha"], $this->contraseña);
    }
    
}
