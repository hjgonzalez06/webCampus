<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/Config/professor_options.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/Config/Bd_conexion.php";
/**
 * Description of professor
 *
 * @author nookamb
 */

class professor extends professor_options {

    public function __construct($idCuenta, $contraseña){

        parent::__construct($idCuenta, $contraseña);

    }

    public static function show_all() {

        $sql = "SELECT * FROM ".TABLE_PROFESSOR;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }


}
