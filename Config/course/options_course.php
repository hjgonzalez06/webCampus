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


    public function getName(){

        $sql = "SELECT ".NAME_CRS." FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch()[NAME_CRS];

    }

    public function getPreCod(){

        $sql = "SELECT ".PRE_COD." FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch()[PRE_COD];

    }

    public function getUcPre(){

        $sql = "SELECT ".PRE_UNIT." FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch()[PRE_UNIT];

    }


    public function getNroTri(){

        $sql = "SELECT ".NRO_MAT." FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch()[NRO_MAT];

    }

    public function getCodFor(){

        $sql = "SELECT ".FOREN_COD." FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch()[FOREN_COD];

    }

    public function getUcCost(){

        $sql = "SELECT ".COST." FROM ".TABLE_COURSE." WHERE ".COD_MAT." = :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codigoMat));

        return $resultado->fetch()[COST];

    }

}
