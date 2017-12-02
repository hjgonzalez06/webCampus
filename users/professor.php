<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/Config/professor_options.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/webCampus/Config/Bd_conexion.php";
/**
 * Description of professor
 *
 */

class professor extends professor_options {

    public function __construct($idCuenta, $contraseña){

        parent::__construct($idCuenta, $contraseña);

    }

    /**
     * Create: metodo dedicado a la inserción del profesor dentro de la base de datos.
     */
    public function create () {

        $sql = "INSERT INTO ".TABLE_PROFESSOR." ( ".ID_PRO.") VALUES (:idPro)";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":idPro"=>$this->idCuenta));

    }

    /**
     * Show_all: retorna arreglo con todos los profesores listados en la base de datos.
     *
     * @return array
     */
    public static function show_all() {

        $sql = "SELECT * FROM ".TABLE_PROFESSOR;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }


}
