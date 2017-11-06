<?php

/*
+ * Código fuente desarrollado por Franklin Moreno e Hiram González
+    Contacto:
+    hiramjgonzalez98@gmail.com
+    cfranklinmoreno@gmail.com
 */

/**
 * Clase abstracta usada para establecer las bases de la creación de una materia.
 *
 * @author Franklin Moreno
 */

require_once './Bd_conexion.php';

abstract class course extends conexion {
    
    protected $codigoMat;

    public function __construct($codigoMat) {
        
        parent::__construct();
        
        $this->codigoMat = $codigoMat;
        
    }
    
    public function showSections(){

        $sql = "SELECT * FROM ".TABLE_SECTION." WHERE ".COD_MAT2." = :codigo";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }

    public function showInformation(){

        $sql = "SELECT * FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch(PDO::FETCH_ASSOC);

    }

    public static function show_all_sections(){

        $sql = "SELECT * FROM ".TABLE_SECTION;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }


    
    
    
    
}
