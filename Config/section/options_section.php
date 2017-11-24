<?php
/**
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
 */


class options_section extends conexion{

    private $idSeccion;

    public function __construct($idSeccion){

        parent::__connect();
        $this->idSeccion = $idSeccion;

    }

    public function getCodSec(){

        return $this->idSeccion;

    }

    public function getCodMat(){

        $sql = "SELECT ".COD_MAT2." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[COD_MAT2];

    }

    public function getCedulaPro(){


        $sql = "SELECT ".ID_PRO2." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[ID_PRO2];

    }

    public function getHora(){

        $sql = "SELECT ".HOUR." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[HOUR];

    }

    public function getHora2(){

        $sql = "SELECT ".HOUR2." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[HOUR2];

    }

    public function getDia(){

        $sql = "SELECT ".DAY." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[DAY];

    }

    public function getDia2(){

        $sql = "SELECT ".DAY2." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[DAY2];

    }

    public function getTurno(){

        $sql = "SELECT ".TURN." FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo ";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idSeccion));

        return $resultado->fetch()[TURN];

    }




}