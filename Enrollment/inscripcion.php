<?php
/**
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto -cfranklinmoreno@gmail.com
 *          -hiramjgonzalez98@gmai.com
 */

require_once "../Config/Bd_conexion.php";

class inscripcion extends conexion {

    private $alumno;

    public function __construct($alumno){

        parent::__construct();

        $this->alumno = $alumno;
    }


    public function inscripcion($secciones){

        $sql = "START TRANSACTION; ";
        $id = $this->alumno->getCedula();

        foreach ($secciones as $seccione) {

            $sql .= "\nINSERT INTO ".TABLE_REGISTRY_.$seccione." (".COD_SEC2.", ".ID_ACC2.") 
            VALUES ( '".$seccione."', '".$id."'); ";

        }

        $sql .= "\nCOMMIT;";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();

    }

    public function desinscribir($secciones){

        $sql = "START TRANSACTION; ";
        $id = $this->alumno->getCedula();

        foreach ($secciones as $seccione) {

            $sql .= "\nDELETE FROM ".TABLE_REGISTRY_.$seccione." WHERE ".ID_ACC2." = '".$id."';";
        }

        $sql .= "\nCOMMIT;";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();


    }

    public function disponibles(){

        $registroMaterias = course::show_all_courses();
        $registroInscritas = $this->alumno->data_section();
        $skip = false;


        foreach ($registroMaterias as $registroMateria) {

            foreach ($registroInscritas as $registroInscrita) {

                if ($registroInscrita[COD_MAT] == $registroMateria[COD_MAT]){

                    $skip = true;
                    break;

                }

            }

            if ($skip == true){

                $skip = false;
                continue;

            }

            $disponibles[] = $registroMateria;

        }

        return $disponibles;

    }

}