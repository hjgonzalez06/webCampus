<?php


require_once 'cuenta.php';
require_once 'course/materia.php';
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

    /**
     * materia_search: retorna la información relacionada con la materia buscada.
     *
     * @param $codigoMateria
     * @return mixed
     */
    public function materia_search($codigoMateria){

        $this->materia = new materia($codigoMateria);

        return $this->materia->show_information();

    }

    public function new_student($datos) {





    }


    /**
     * EN PROCESO
     */
    public function usuario_search(){

    }

}
