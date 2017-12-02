<?php

/*
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
 */

require_once "option_trimester.php";
/**
 * Clase abstracta, con todas las opciones para la gestion de los datos
 * de TABLE_CAREER
 * <br>
 * @author nookamb
 */

class trimester extends option_trimester {

    public function __construct($codTrimestre) {

        parent::__construct($codTrimestre);


    }

    /**
     * Create: metodo dedicado a la inserción del trimestre dentro de la base de datos.
     *
     * @param $idCa
     */
    public function create($idCa) {

        $sql = "INSERT INTO ".TABLE_TRIMESTER." ( ".COD_TRI.", ".COD_CA2.") VALUES (:idTri, :idCa)";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":idTri"=>$this->codTrimestre, ":idCa"=>$idCa));

    }

    /**
     * show_all: retorna toda la información de los trimestres registrados en la base de datos.
     *
     * @return array
     */
    public static function show_all() {

        $sql = "SELECT * FROM ".TABLE_TRIMESTER;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }


}