<?php

require_once "../../Config/Bd_conexion.php";
abstract class option_trimester extends conexion {

    private $codTrimestre;

    public function __construct($codTrimestre) {

        parent::__construct();
        $this->codTrimestre = $codTrimestre;

    }

    /*
     * Inicio de los metodos GET
     */

    public function getCodTrimestre() {

        return $this->codTrimestre;

    }

    public function getCodCa() {

        $sql = "SELECT ".COD_CA2. " FROM ".TABLE_TRIMESTER. " WHERE ".COD_TRI. " =  :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codTrimestre));

        return $resultado->fetch()[COD_CA2];

    }

    public function getNTri() {

        $sql = "SELECT ".NRO_TRI. " FROM ".TABLE_TRIMESTER. " WHERE ".COD_TRI. " =  :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codTrimestre));

        return $resultado->fetch()[NRO_TRI];

    }

    public function getUcNec() {

        $sql = "SELECT ".UNIT_MIN. " FROM ".TABLE_TRIMESTER. " WHERE ".COD_TRI. " =  :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codTrimestre));

        return $resultado->fetch()[UNIT_MIN];

    }

    public function getNroEstTri() {

        $sql = "SELECT ".NRO_STU_TRI. " FROM ".TABLE_TRIMESTER. " WHERE ".COD_TRI. " =  :codigo";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->codTrimestre));

        return $resultado->fetch()[NRO_STU_TRI];

    }

    /*
     * Inicio de los metodos SET.
     */

    public function setNroTri($NroTri) {

        $sql = "UPDATE ".TABLE_TRIMESTER." SET ".NRO_TRI." = :parametro1 WHERE ".COD_TRI." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$NroTri, ":parametro2"=>$this->codTrimestre));

    }

    public function setCodCa($codCa) {

        $sql = "UPDATE ".TABLE_TRIMESTER." SET ".COD_CA2." = :parametro1 WHERE ".COD_TRI." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$codCa, ":parametro2"=>$this->codTrimestre));

    }

    public function setNroEstTri($nroEstTri) {

        $sql = "UPDATE ".TABLE_TRIMESTER." SET ".NRO_STU_TRI." = :parametro1 WHERE ".COD_TRI." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$nroEstTri, ":parametro2"=>$this->codTrimestre));

    }

    public function setUCNec($ucNec) {

        $sql = "UPDATE ".TABLE_TRIMESTER." SET ".UNIT_MIN." = :parametro1 WHERE ".COD_TRI." = :parametro2";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":parametro1"=>$ucNec, ":parametro2"=>$this->codTrimestre));

    }


}
