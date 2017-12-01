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

    public static function show_all() {

        $sql = "SELECT * FROM ".TABLE_TRIMESTER;

        $resultado = (new conexion())->__conexion()->prepare($sql);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    }


}