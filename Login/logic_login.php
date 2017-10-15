<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */

/**
 * Description of logic_login
 *
 * @author nookamb
 */

require_once '../users/student.php';
require_once '../users/admin.php';
require_once '../Config/cuenta.php';
require_once '../Config/Bd_conexion.php';

class logic_login {
    
    private $user;
    private $idUser;
    private $password;
    
    public function __construct() {
        
        $this->idUser = htmlentities(addslashes(filter_input(INPUT_POST, "usuario")));
        $this->password = htmlentities(addslashes(filter_input(INPUT_POST, "pass")));
        
    }

    /**
     * __student: en caso de cumplir la verificación, 
     * devuelve un objeto de tipo estudiante. <br>
     * -En caso contrario, devuelve null.
     * @return type
     */
    public function __student(){
        
        if ($this->__verify() == 0) {
            
            return $this->user = new student($this->idUser, $this->password);
            
        }
        
        return null;
        
    }
    
    /**
     * __student: en caso de cumplir la verificación, 
     * devuelve un objeto de tipo admin. <br>
     * -En caso contrario, devuelve null.
     * @return type
     */
    public function __admin(){
        
        if ($this->__verify() == 0) {
            
            return $this->user = new admin($this->idUser, $this->password);
            
        }
        
        return null;
    }
    
    private function __verify(){
        
        return ($this->idUser == null || $this->password == null ) ? 1 : 0;
        
    }
    
    
     /**
     * recuperar: reestablece la contraseña del usuario, asignando un numero
     * aletorio, el cual es envia al correo del usuario.<br>
     * <tr>-En caso de existir similitud, manda correo con la nueva contraseña. <br>
     * <tr>-En caso contrario, solo muestra error.
     * @return string
     */
    public function forgot(){
        
        return cuenta::recuperar();
        
    }
    
}
