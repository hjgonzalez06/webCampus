<?php
/**
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
 */


class options_section extends conexion{

    private $idSeccion;

    public function __construct($idSeccion){

        parent::__construct();
        $this->idSeccion = $idSeccion;

    }

    public function create() {

        //Codigo

    }

    /*
     * Inicio de los metodos GET.
     */

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

    /*
     * Inicio de los metodos GET.
     */

    public function setCodMat($codMat) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".COD_MAT2." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$codMat, ":id"=>$this->idSeccion));

    }

    public function setCedulaPro($cedulaPro) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".ID_PRO2." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$cedulaPro, ":id"=>$this->idSeccion));

    }

    public function setHora1($hora1) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".HOUR." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$hora1, ":id"=>$this->idSeccion));

    }

    public function setHora2($hora2) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".HOUR2." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$hora2, ":id"=>$this->idSeccion));

    }

    public function setDia($dia) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".DAY." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$dia, ":id"=>$this->idSeccion));

    }

    public function setDia2($dia2) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".DAY2." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$dia2, ":id"=>$this->idSeccion));

    }

    public function setTurn($turn) {

        $sql = "UPDATE ".TABLE_SECTION. " SET ".TURN." = :campo WHERE ".COD_SEC." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$turn, ":id"=>$this->idSeccion));

    }

}