<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of materia
 *
 * @author Franklin Moreno
 */

require_once 'options_course.php';

class materia extends options_course {
    
    public function __construct($codMateria) {

        parent::__construct($codMateria);

    }

    /**
     * Create: metodo dedicado a la inserción de la materia dentro de la base de datos.
     *
     * @param $idCa
     */
    public function create($idCa) {

        $sql = "INSERT INTO ".TABLE_COURSE." ( ".COD_MAT.", ".FOREN_COD.") VALUES (:idMat, :idCa)";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":idMat"=>$this->codigoMat, ":idCa"=>$idCa));

    }
    
}
