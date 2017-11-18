<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
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

    /*
     * Inicio de los metodos gets, tabla materia
     */

    public function getCodMat(){

        return $this->codigoMat;

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

    /*
     * Inicio de los metodos sets, tabla materia
     */

    public function setName($nombreMateria){


        $sql = "UPDATE ".TABLE_COURSE." SET ".NAME_CRS." = :parametro1 WHERE ".COD_MAT." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$nombreMateria, ":parametro2"=>$this->codigoMat));

    }

    public function setPreCod($preCod){

        $sql = "UPDATE ".TABLE_COURSE." SET ".PRE_COD." = :parametro1 WHERE ".COD_MAT." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$preCod, ":parametro2"=>$this->codigoMat));

    }

    public function setUcPre($ucPre){

        $sql = "UPDATE ".TABLE_COURSE." SET ".PRE_COD." = :parametro1 WHERE ".COD_MAT." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$ucPre, ":parametro2"=>$this->codigoMat));

    }

    public function setNroTri($nroTri){

        $sql = "UPDATE ".TABLE_COURSE." SET ".NRO_MAT." = :parametro1 WHERE ".COD_MAT." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$nroTri, ":parametro2"=>$this->codigoMat));

    }

    public function setCodFor($codFor){

        $sql = "UPDATE ".TABLE_COURSE." SET ".FOREN_COD." = :parametro1 WHERE ".COD_MAT." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$codFor, ":parametro2"=>$this->codigoMat));

    }

    public function setUcCost($ucCost){

        $sql = "UPDATE ".TABLE_COURSE." SET ".COST." = :parametro1 WHERE ".COD_MAT." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$ucCost, ":parametro2"=>$this->codigoMat));

    }

}
