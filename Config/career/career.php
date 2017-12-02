<?php

/*
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
 */


require_once "options_career.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/Config/configUsers.php";
/**
 * @author nookamb
 */

class career extends options_career {

    public function __construct($codigoMateria) {

        parent::__construct($codigoMateria);

    }

    /**
     * show_all: retorna toda la información de las carreras registradas en la base de datos.
     *
     * @return array
     */

    public static function show_all(){

        $sql = "SELECT * FROM ". TABLE_CAREER;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }


}