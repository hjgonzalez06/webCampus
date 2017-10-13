<?php


/**
 * Description of professor
 *
 * @author nookamb
 */
abstract class professor extends cuenta {
    
    
    
    
    public function getCodigo(){
        
         $sql = "SELECT ".COD_PRO." FROM ".TABLE_PROFESSOR." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[ID_STU];
        
        
    }


    public function actualizar_profesor($codigo, $nombre, $apellido) {
        
        $apellido = $this->limpiar($apellido);
        
        $sql = "UPDATE profesores SET nombre = :nombre,"
                . " apellido = :apellido WHERE cod_pro = :codigo";
        $sentencia = $this->baseDeDatos->prepare($sql);
        $sentencia->execute(array(":codigo"=>$codigo,":nombre"=>$nombre, 
            ":apellido"=>$apellido));
        
        if (!$sentencia) {
            $sentencia->closeCursor();
            return 1;
        }
        $sentencia->closeCursor();
        return 0;
    }
    
}
