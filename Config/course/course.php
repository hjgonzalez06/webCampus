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

abstract class course extends conexion {
    
    protected $codigoMat;

    public function __construct($codigoMat) {
        
        parent::__construct();
        
        $this->codigoMat = $codigoMat;
        
    }


    /**
     *show_sections: retorna las secciones disponibles de la materia.
     *
     * @return array
     */
    public function show_sections(){

        $sql = "SELECT * FROM ".TABLE_SECTION." WHERE ".COD_MAT2." = :codigo";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * show_information: retorna toda la información relacionada con la materia.
     *
     * @return mixed
     */
    public function show_information(){

        $sql = "SELECT * FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch(PDO::FETCH_ASSOC);

    }

    /**
     * show_all_sections: *STATIC, retorna toda la información de las secciones disponibles.
     * <br><td> -LOCACIÓN TEMPORAL.
     *
     * @return array
     */
    public static function show_all_sections(){

        $sql = "SELECT * FROM ".TABLE_SECTION;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }

}
