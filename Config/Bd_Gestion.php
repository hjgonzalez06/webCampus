<?php

/*
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto cfranklinmoreno@gmail.com
 */

//
include_once 'config.php';

class Bd_Gestion  {
   
    private $baseDeDatos;


    public function __construct() {
        try {
            $this->baseDeDatos = new PDO(bd_name, bd_user, bd_pass);
        } catch (Exception $e) {
            echo "No se ha podido conectar con la base de datos. "
            . "ERROR " + $e->getMessage();
        }
    }
    
    public function recuperar($cedula, $correo){
        $cedula= $this->limpiar($cedula);
        $correo= $this->limpiar($correo);
        
        $sentencia = "SELECT * FROM cuenta INNER JOIN alumnos "
                . "WHERE cuenta.id_cuenta = :cedula AND alumnos.correo = :correo";
        $conexion = $this->baseDeDatos->prepare($sentencia);
        $conexion->execute(array(":cedula"=>$cedula, ":correo"=>$correo));
        
        $resultado = $conexion->rowCount();
        if ($resultado==1) {
            return $this->nueva_contra($cedula);
        }
        
    }

    private function nueva_contra($cedula) {
        
        $contraseña = rand(100000, 900000);
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);
        
        $sql = "UPDATE cuenta SET contrasenha = :contra WHERE id_cuenta = :cedula";
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute(array(":contra"=>$hash, ":cedula"=>$cedula));
        $recuperacion = "Recuperacion para: ".$cedula." Contraseña: ".$contraseña;
        $resultado->closeCursor();
        
        return $recuperacion;
        
    }
    
    public function agregar_profesor($codigo, $cedula, $nombre, $apellido) {
        
        $sql;
        $resultado;
        
        $sql = "INSERT INTO profesores (cod_pro, cedula, nombre, apellido) VALUES"
                . "(:codigo, :cedula, :nombre, :apellido)";
        $resultado = $this-> baseDeDatos->prepare($sql);
        $codigo = $this->limpiar($codigo);
        $nombre = $this->limpiar($nombre);
        $cedula = $this->limpiar($cedula);
        $apellido = $this->limpiar($apellido);

        $resultado->execute(array(":codigo"=>$codigo, ":cedula"=>$cedula,
            ":nombre"=>$nombre, ":apellido"=>$apellido));
        $resultado->closeCursor();
        
    }
    
    public function agregar_carrera($codigo, $unidades, $numero, $nombre) {
        
        $sql;
        $resultado;
        
        $sql = "INSERT INTO carreras (cod_ca, uc_tol, nro_tri_ca, nombre)
            VALUES (:codigo, :uc, :numero, :nombre)";
        $resultado = $this-> baseDeDatos->prepare($sql);
        $codigo = $this->limpiar($codigo);
        $unidades = $this->limpiar($unidades);
        $numero = $this->limpiar($numero);
        $nombre = $this->limpiar($nombre);

        $resultado->execute(array(":codigo"=>$codigo,":uc"=>$unidades,
            ":numero"=>$numero, ":nombre"=>$nombre));
        $resultado->closeCursor();
        
    }
    
    public function agregar_materia($codigo_for,$codigo_mat, $nombre, $prelacion,
            $uc, $nro_tri, $ucCost ) {

        $sql;
        $resultado;
        
        $sql = "INSERT INTO materias "
                . "values (:codmat, :nombre, :pre, :uc, :nrotri, :codfor, :cost)";
        $resultado = $this->baseDeDatos->prepare($sql);
        $codigo_for = $this->limpiar($codigo_for);
        $codigo_mat = $this->limpiar($codigo_mat);
        $nombre = $this->limpiar($nombre);
        $prelacion = $this->limpiar($prelacion);
        $uc = $this->limpiar($uc);
        $nro_tri = $this->limpiar($nro_tri);
        
        $resultado->execute(array(":codmat"=>$codigo_mat,
                ":nombre"=>$nombre, ":pre"=>$prelacion,
                ":uc"=>$uc, ":nrotri"=>$nro_tri,":codfor"=>$codigo_for, ":cost"=>$ucCost));
        $resultado->closeCursor();
    } 
    
    public function agregar_seccion($codigosec, $codigomat, $codigopro, $hora1, 
            $hora2, $dia1, $dia2, $turno) {
        
        $sql;
        $resultado;
        
        $sql = "INSERT INTO seccion VALUES ( :codsec, :codmat, :codpro, :hora1,
                :hora2, :dia1, :dia2, :turno)";
        $resultado = $this->baseDeDatos->prepare($sql);
        $codigosec = $this->limpiar($codigosec);
        $codigomat = $this->limpiar($codigomat);
        $codigopro = $this->limpiar($codigopro);
        $hora1 = $this->limpiar($hora1);
        $hora2 = $this->limpiar($hora2);
        $dia1 = $this->limpiar($dia1);
        $dia2 = $this->limpiar($dia2);
        $turno = $this->limpiar($turno);
        
        $resultado->execute(array(":codsec"=>$codigosec, ":codmat"=>$codigomat,
            ":codpro"=>$codigopro, ":hora1"=>$hora1, ":hora2"=>$hora2, 
            ":dia1"=>$dia1, ":dia2"=>$dia2, ":turno"=>$turno));
        
        if (!$resultado) {
            $resultado->closeCursor();
            return 1;
        }elseif (($this->crear_tabla($codigosec))!=0) {
            $resultado->closeCursor();
            return 1;
        }
        
        $resultado->closeCursor();
        
        return 0;
        
    }
    
    private function crear_tabla($nombre){
        
       $nombre = "registro_".$nombre;
       
       $sentenciaSecundaria;
       $sql = "CREATE TABLE IF NOT EXISTS $nombre (cod_sec VARCHAR(10), "
                . "id_cuenta VARCHAR(8), INDEX(cod_sec), FOREIGN KEY(cod_sec) "
                . "REFERENCES seccion(cod_sec), INDEX(id_cuenta),"
                . " FOREIGN KEY(id_cuenta) REFERENCES cuenta(id_cuenta))";
       $sentenciaSecundaria = $this->baseDeDatos->prepare($sql);
       $sentenciaSecundaria->execute();
       
       if (!$sentenciaSecundaria) {
           $sentenciaSecundaria->closeCursor();
           return 1;
       }
       $sql = "ALTER IGNORE TABLE $nombre ADD UNIQUE INDEX(id_cuenta)";
       $sentenciaSecundaria = $this->baseDeDatos->prepare($sql);
       $sentenciaSecundaria->execute();
       $sentenciaSecundaria->closeCursor();
       return 0;
    }
    
    public function agregar_trimestre($codigoTri, $codigoCa, $numero, $uc){
        
        $sql;
        $resultado;
        
        $sql =  "INSERT INTO trimestres (cod_tri, cod_ca, n_tri, uc_nec)"
                . "VALUES (:codtri, :codca,:numero, :uc)";
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute(array(":codtri"=>$codigoTri, ":codca"=>$codigoCa,
            ":numero"=>$numero, ":uc"=>$uc));
        $resultado->closeCursor();
        
    }
    
    public function agregar_alumno($cedula, $nacionalidad, $codigoCa, $codigoTri,
            $nombre, $nombre2, $apellido, $apellido2, $correo, $movil, $casa,
            $direccion) {
        
        $sql;
        $resultado;
        
        $sql = "INSERT INTO alumnos (cedula, nacionalidad, carrera, trimestre,"
                . " id_cuenta, nombre, nombre_do, apellido, apellido_do, correo,"
                . "movil, casa, direccion) VALUES (:cedula, :nacionalidad,  "
                . ":carrera, :trimestre, :id, :nombre, :nombre2 ,:apellido,"
                . " :apellido2, :correo, :movil, :casa, :direccion)";
        $resultado = $this->baseDeDatos->prepare($sql);
        $cedula = $this->limpiar($cedula);
        $nombre = $this->limpiar($nombre);
        $nombre2 = $this->limpiar($nombre2);
        $apellido = $this->limpiar($apellido);
        $apellido2 = $this->limpiar($apellido2);
        $correo = $this->limpiar($correo);
        $movil = $this->limpiar($movil);
        $casa = $this->limpiar($casa);
        $direccion = $this->limpiar($direccion);
        
        $resultado->execute(array(":cedula"=>$cedula,":nacionalidad"=>$nacionalidad,
            ":carrera"=>$codigoCa,":trimestre"=>$codigoTri, ":id"=>$cedula,
            ":nombre"=>$nombre, ":nombre2"=>$nombre2, ":apellido"=>$apellido,
            ":apellido2"=>$apellido2,":correo"=>$correo, ":movil"=>$movil,
            ":casa"=>$casa, ":direccion"=>$direccion    ));
        $this->sumar_estudiante("n_est_tri", "trimestres", $codigoTri, "cod_tri");
        $this->sumar_estudiante("n_est", "carreras", $codigoCa, "cod_ca");
        $this->establecer_id($cedula);
        
        $resultado->closeCursor();
        
    }
    
    public function actualizar_alumno($cedula, $carrera, $trimestre, $nombre, 
            $nombre_do, $apellido, $apellido_do, $correo, $movil, $fijo, $turno,
            $lapso_a, $lapso_o, $status, $triA, $uca, $ucc) {
            
        $cedula = $this->limpiar($cedula);
        $carrera = $this->limpiar($carrera);
        $trimestre = $this->limpiar($trimestre);
        $nombre = $this->limpiar($nombre);
        $nombre_do = $this->limpiar($nombre_do);
        $apellido = $this->limpiar($apellido);
        $apellido_do = $this->limpiar($apellido_do);
        $correo = $this->limpiar($correo);
        $movil = $this->limpiar($movil);
        $fijo = $this->limpiar($fijo);
        $turno = $this->limpiar($turno);
        $lapso_a = $this->limpiar($lapso_a);
        $lapso_o = $this->limpiar($lapso_o);
        $status = $this->limpiar($status);
        $triA = $this ->limpiar($triA);
        $uca = $this->limpiar($uca);
        $ucc = $this->limpiar($ucc);
        
        $sql = "UPDATE alumnos SET cedula = :cedula, carrera = :carrera,"
                . " trimestre = :tri, nombre = :nombre1, nombre_do = :nombre2, "
                . "apellido = :apellido, apellido_do = :apellido2, correo = :correo,"
                . "movil = :movil, casa = :casa, turno = :turno, lapso_act = :lapsoA,"
                . "lapso_old = :lapsoO, status = :status, tri_aprob = :triA,     uca = :uca, ucc = :ucc"
                . " WHERE id_cuenta = :cedula";
        $conexion = $this->baseDeDatos->prepare($sql);
        $conexion->execute(array(":cedula"=>$cedula, ":carrera"=>$carrera,
            ":tri"=>$trimestre, ":nombre1"=>$nombre, ":nombre2"=>$nombre_do,
            ":apellido"=>$apellido, ":apellido2"=>$apellido_do, ":correo"=>$correo,
            ":movil"=>$movil, ":casa"=>$fijo, ":turno"=>$turno, ":lapsoA"=>$lapso_a,
            ":lapsoO"=>$lapso_o, ":status"=>$status,":triA"=>$triA,
            ":uca"=>$uca, ":ucc"=>$ucc));
        
        if (!$conexion) {
            $conexion->closeCursor();
            return 1;
        }
        $conexion->closeCursor();
        return 0;
    }
    
    public function actualizar_profesor($codigo, $nombre, $apellido) {
        
        $codigo=$this->limpiar($codigo);
        $nombre = $this->limpiar($nombre);
        $apellido = $this->limpiar($apellido);
        
        $sql = "UPDATE profesores SET nombre = :nombre,"
                . " apellido = :apellido WHERE cod_pro = :codigo";
        $sentencia = $this->baseDeDatos->prepare($sql);
        $sentencia->execute(array(":codigo"=>$codigo,":nombre"=>$nombre, 
            ":apellido"=>$apellido));
        
        if (!$sentencia) {
            $sentencia->closeCursor();
            return 1;
        }
        $sentencia->closeCursor();
        return 0;
    }
    
    public function contacto_alumno($movil, $fijo, $correo, $id){
        
        $movil = $this->limpiar($movil);
        $fijo = $this->limpiar($fijo);
        $correo = $this->limpiar($correo);
         
        $sql = "UPDATE alumnos SET correo = :correo,"
                . "movil = :movil, casa = :casa WHERE id_cuenta = :id";
        $sentencia = $this->baseDeDatos->prepare($sql);
        $sentencia->execute(array(":correo"=>$correo, ":movil"=>$movil, 
            ":casa"=>$fijo, ":id"=>$id));
        if (!$sentencia) {
            $sentencia->closeCursor();
            return 1;
        }
        
        $sentencia->closeCursor();
        return 0;
        
    }
    
    public function actContra($contra, $nueva, $repeticion, $cedula) {
        
        $contra = $this->limpiar($contra);
        $nueva = $this->limpiar($nueva);
        $repeticion = $this->limpiar($repeticion);
        $cedula = $this->limpiar($cedula);
        
        if ($this->verficar_nueva($nueva, $repeticion)==0 
                 && $this->comprobar_contra($contra, $cedula)==1) {
               
            $sql = "UPDATE cuenta SET contrasenha = :contra, estado = 1 WHERE id_cuenta = :id";
            $intruccion = $this->baseDeDatos->prepare($sql);
            $hash = password_hash($nueva, PASSWORD_DEFAULT);
            $intruccion->execute(array(":contra"=>$hash, ":id"=>$cedula));

            $intruccion->closeCursor();

            return 0;
        }
        
        return 1;
        
    }
    
    private function verficar_nueva($nueva, $repeticion) {
        return strcmp($nueva, $repeticion);
    }
    
    public function comprobar_contra($contra, $cedula) {
        
        $sql = "SELECT contrasenha FROM cuenta WHERE id_cuenta = :id";
        $sentencia = $this->baseDeDatos->prepare($sql);
        $sentencia->execute(array(":id"=>$cedula));
        $contraOriginal = $sentencia->fetch();
        
        return password_verify($contra, $contraOriginal["contrasenha"]);
    } 


//    private function establecer_id($cedula){
//        
//        $sql;
//        $numeroAleatorio;
//        $resultado;
//        $contra = password_hash($cedula, PASSWORD_DEFAULT);
//        
//        $sql = "INSERT INTO cuenta (id_cuenta, contrasenha) VALUES "
//                . "('$cedula', '$contra') ";
//        $resultado = $this->baseDeDatos->prepare($sql);
//        $resultado->execute();
//        
//        $resultado->closeCursor();
//    }


    public function sumar_estudiante($numero, $tabla, $codigo, $referencia){
        
        $sql;
        $resultado;
        
        $sql = "UPDATE $tabla SET $numero = $numero+1 WHERE $referencia = '$codigo'";
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute();
        
        $resultado->closeCursor();
                
    }

    private function limpiar($dato){
        return htmlentities(addslashes($dato));
    }
    
    public function login($usuario, $contra){
        
        if ($this->comprobar_usuario($usuario, $contra)==1 
                && $this->comprobar_contra($contra, $usuario)==1) {
            
            return 0;
            
        }
        return 1;
    }
    
    public function login_admin($usuario, $contra){
        
         if ($this->comprobar_admin($usuario, $contra)==1 
                && $this->comprobar_contra($contra, $usuario)==1) {
            return 0;
            
        }
        return 1;
    }
    
    private function comprobar_usuario($usuario, $contra){
        
        $sql = "SELECT id_cuenta FROM cuenta WHERE id_cuenta = :usuario";
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute(array(":usuario"=>$usuario));
            
        return $resultado->rowCount();
    }
    
    public function comprobar_admin($id, $contra){
        
        $sql;
        $resultado;
        
        $sql = "SELECT id_cuenta FROM admin WHERE id_cuenta = :usuario"
                . " AND contrasenha = :contra";
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute(array(":usuario"=>$id, ":contra"=>$contra));
        
        return $resultado->rowCount();
    }


    public function data($codigo, $tabla){
        
        $resultado;
        $sql;
        
        $sql = "SELECT * FROM $tabla";
        $codigo = $this->limpiar($codigo);
        
        if ($tabla=="alumnos" && $codigo != "all") {
            
            $sql ="SELECT * FROM $tabla WHERE id_cuenta = :codigo";
            
            $resultado = $this->baseDeDatos->prepare($sql);
            $resultado->execute(array(":codigo"=>$codigo));
            
            return $resultado->fetch(PDO::FETCH_ASSOC);
            
        }elseif($codigo!="all" && $tabla=="carreras"){
            
            $sql ="SELECT * FROM $tabla WHERE cod_ca = :codigo";
            
            $resultado = $this->baseDeDatos->prepare($sql);
            $resultado->execute(array(":codigo"=>$codigo));
            
            return $res
            ultado->fetch(PDO::FETCH_ASSOC);
        }elseif($codigo!="all" && $tabla=="materias"){
            
            $sql ="SELECT * FROM $tabla WHERE cod_mat = :codigo";
            
            $resultado = $this->baseDeDatos->prepare($sql);
            $resultado->execute(array(":codigo"=>$codigo));
            
            return $resultado->fetch(PDO::FETCH_ASSOC);
        }elseif($codigo!="all" && $tabla=="materias"){
            
            $sql ="SELECT * FROM $tabla WHERE cod_mat = :codigo";
            
            $resultado = $this->baseDeDatos->prepare($sql);
            $resultado->execute(array(":codigo"=>$codigo));
            
            return $resultado->fetch(PDO::FETCH_ASSOC);
            
        }elseif ($codigo!="all" && $tabla=="seccion") {
            
            $sql ="SELECT * FROM $tabla WHERE cod_sec = :codigo";
            
            $resultado = $this->baseDeDatos->prepare($sql);
            $resultado->execute(array(":codigo"=>$codigo));
            
            return $resultado->fetch(PDO::FETCH_ASSOC);
            
        }elseif($codigo != "all" && $tabla=="profesores"){
            return $this->obtener_profesor($codigo);
        }   
        
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute();
        
        
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
    
    private function obtener_profesor($codigo){
        
        $sql = "SELECT * FROM profesores WHERE cod_pro = :codigo";
        $sentencia = $this->baseDeDatos->prepare($sql);
        $sentencia->execute(array(":codigo"=>$codigo));
        
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    
    public function secciones($codigoMat, $accion) {
        
        $codigo = $this->limpiar($codigoMat);
        
        if ($accion=="all") {
            
            $sql = "SELECT * FROM seccion WHERE cod_mat = :codigo";
            $conexion = $this->baseDeDatos->prepare($sql);
            $conexion->execute(array(":codigo"=>$codigoMat));
            return $conexion->fetch();
            
        }elseif($accion=="turno"){
            $sql = "SELECT turno, cod_sec FROM seccion WHERE cod_mat = :codigo";
            $conexion = $this->baseDeDatos->prepare($sql);
            $conexion->execute(array(":codigo"=>$codigoMat));
            return $conexion->fetchAll();
        } elseif ($accion=="profe") {
            $sql="SELECT * FROM profesores INNER JOIN seccion "
                    . "WHERE seccion.cod_pro = profesores.cod_pro "
                    . "AND seccion.cod_sec = :codigo";
             $conexion = $this->baseDeDatos->prepare($sql);
            $conexion->execute(array(":codigo"=>$codigoMat));
            return $conexion->fetch();
       }

        $sql = "SELECT * FROM seccion";
        $conexion = $this->baseDeDatos->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();
            
    }
    
    public function inscripcion($cedula, $codigo){
        $codigo = $this->limpiar($codigo);
        $cedula  =$this->limpiar($cedula);
        
        $sql = "INSERT INTO registro_".$codigo." VALUES (:cod, :id)";
        $base = $this->baseDeDatos->prepare($sql);
        $base->execute(array(":cod"=>$codigo, ":id"=>$cedula));
        if (!$base) {
            $base->closeCursor();
            return 1;
        }
        $base->closeCursor();
        return 0;
    }
    
    public function buscar($listaCodigos, $cedula){
        
        $cedula= $this->limpiar($cedula);
        $listaMaterias;
        
        foreach ($listaCodigos as $codigo){
            $sql = "SELECT cod_sec FROM registro_".$codigo." WHERE id_cuenta = :id";
            $instrucion = $this->baseDeDatos->prepare($sql);
            $instrucion->execute(array(":id"=>$cedula));
            $listaMaterias[]=$instrucion->fetch();
        }
        
        return $listaMaterias;
        
    }
    
    public function materia($codigoSec){
        
        $codigoSec = $this->limpiar($codigoSec);
        $sql = "SELECT * FROM materias INNER JOIN seccion "
                . "WHERE materias.cod_mat = seccion.cod_mat"
                . " AND :codigo = seccion.cod_sec";
        $instruccion = $this->baseDeDatos->prepare($sql);
        $instruccion->execute(array(":codigo"=>$codigoSec));
        
        if (!$instruccion) {
            $instruccion->closeCursor();
            return 1;
        }
        
        return $instruccion->fetch(PDO::FETCH_ASSOC);
                
    }

    public function exist($tabla){
        
        $resultado;
        $sql;
        
        $sql="SELECT * FROM $tabla";
        
        $resultado = $this->baseDeDatos->prepare($sql);
        $resultado->execute();
        
        return $resultado->rowCount();
    }
    
    public function borrar($tabla, $id, $campo) {
        
        $tabla = $this->limpiar($tabla);
        $id = $this->limpiar($id);
        $campo = $this->limpiar($campo);
        
        $sql = "DELETE FROM $tabla WHERE $campo = :id";
        $ejecucion= $this->baseDeDatos->prepare($sql);
        $ejecucion->execute(array(":id"=>$id));
        
        $ejecucion->closeCursor();
    }
    
    public function getBaseDeDatos() {
        return $this->baseDeDatos;
    }
    
}
