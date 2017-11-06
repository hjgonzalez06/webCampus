<?php


require_once './cuenta.php';
require_once './course/materia.php';
/**
 * Description of admin_option
 *
 * @author nookamb
 */
abstract class admin_option extends cuenta {

    private $materia;

    public function __construct($idCuenta, $contraseña){

        parent::__construct($idCuenta, $contraseña);

    }

    public function search_materia($codigoMateria){

        $this->materia = new materia($codigoMateria);

        return $this->materia->showInformation();

    }



}
