<?php
/**
 * Created by IntelliJ IDEA.
 * User: nookamb
 * Date: 19/11/17
 * Time: 03:50 PM
 */

require_once 'options_section.php';

class section extends options_section {


    public function __construct($idSeccion){

        parent::__construct($idSeccion);

    }

    /**
     * Create: metodo dedicado a la inserción de la sección dentro de la base de datos. <br><tr>
     * Por lo cual se requieren parametros adicionales.
     */
    public function create ($codigoMat, $idPro) {

        $sql = "INSERT INTO ".TABLE_SECTION." ( ".COD_SEC.", ".COD_MAT2." , ".ID_PRO2.") 
        VALUES (:idSeccion, :idMat ,:idPro)";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":idSeccion"=>$this->idSeccion, ":idMat"=>$codigoMat, ":idPro"=>$idPro));

    }

}