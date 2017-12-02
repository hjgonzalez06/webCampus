<?php


require_once 'cuenta.php';
require_once 'course/materia.php';
require_once $_SERVER['DOCUMENT_ROOT']."/webCampus/users/student.php";
require_once $_SERVER['DOCUMENT_ROOT']."/webCampus/users/professor.php";
require_once $_SERVER['DOCUMENT_ROOT']."/webCampus/Config/section/section.php";
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

        try{

            $this->conexionBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexionBase->beginTransaction();

            $student = new student($datos["cedula"]);
            $student->setNacionalidad($datos["nacionalidad"]);
            $student->setCodigoCa($datos["carrera"]);
            $student->setStuTri($datos["trimestre"]);
            $student->setNombre($datos["nombre"]);
            $student->setNombre2($datos["nombre2"]);
            $student->setApellido($datos["apellido"]);
            $student->setApellido2($datos["apellido2"]);
            $student->setCorreo($datos["correo"]);
            $student->setMovil($datos["movil"]);
            $student->setCasa($datos["casa"]);
            $student->setDireccion($datos["direccion"]);

            $this->conexionBase->commit();

            echo '<p id="Despedida">Alumno agregado exitosamente.</p>';


        }catch (Exception $e){

            echo '<p id="Despedida">ERROR: '.$e->getMessage().'.</p>';

            $this->conexionBase->rollBack();

        }


    }

    public function new_section($datos) {

        try{
            $this->conexionBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexionBase->beginTransaction();

            $section = new section($datos["seccion"]);
            $section->setCodMat($datos["materias"]);
            $section->setCedulaPro($datos["profesor"]);
            $section->setHora1($datos["horario1"]);
            $section->setHora2($datos["horario2"]);
            $section->setDia($datos["dia1"]);
            $section->setDia2($datos["dia2"]);
            $section->setTurn($datos["turno"]);

            echo "aqii";

            $this->conexionBase->commit();

            echo '<p id="Despedida">Sección creada exitosamente.</p>';

        }catch (Exception $e){

            $this->conexionBase->rollBack();

            echo '<p id="Despedida">ERROR: '.$e->getMessage().'.</p>';

        }


    }

    public function new_profesor($datos) {

        try{

            $this->conexionBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexionBase->beginTransaction();

            $profesor = new professor($datos["cedula"],"");
            $profesor->setNombre($datos["nombre"]);
            $profesor->setApellido($datos["apellido"]);

            $this->conexionBase->commit();
            echo '<p id="Despedida">Profesor añadido exitosamente.</p>';

        }catch (Exception $e){

            $this->conexionBase->rollBack();

            echo '<p id="Despedida">ERROR: '.$e->getMessage().'.</p>';


        }

    }


    /**
     * EN PROCESO
     */
    public function usuario_search(){

    }

}
