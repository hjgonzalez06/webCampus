<?php

require_once 'Bd_conexion.php';
require_once 'configUsers.php';

abstract class cuenta extends conexion {
    
    protected $idCuenta;
    protected $contraseña;
    
    function __construct($idCuenta, $contraseña) {
        
        parent::__construct();
        $this->idCuenta = $idCuenta;
        $this->contraseña = $contraseña;
        
    } //Funcional
    
    public function establecer_id(){
        
        $contra = password_hash($this->idCuenta, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO ".TABLE_ACCOUNT." (".ID_ACCOUNT.", ".PASSWRD_AC.")"
                . " VALUES (:id, '$contra') ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array("id"=> $this->idCuenta));
        
        $resultado->closeCursor();
        
    } //Funcional
    
    public function login(){
        
        if ($this->comprobar_usuario() == 1 &&  $this->comprobar_contra()){
            
            return 0;
            
        }
        
        return 1;
        
    } //Funcional
    
    private function comprobar_usuario(){
        
        $sql = "SELECT ".ID_ACCOUNT." FROM ".TABLE_ACCOUNT.
                " WHERE ".ID_ACCOUNT." = :usuario";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":usuario"=> $this->idCuenta));
            
        return $resultado->rowCount();
        
    } //Funcional
    
    public function actContra() {
        
        $nueva = htmlentities(addslashes(filter_input(INPUT_POST, "newContra")));
        $repeticion = htmlentities(addslashes(filter_input(INPUT_POST, "veContra")));
        $candidato = htmlentities(addslashes(filter_input(INPUT_POST, "contra")));
        
        $sql = "UPDATE ".TABLE_ACCOUNT." SET ".PASSWRD_AC." = :contra, estado = 1"
                . " WHERE ".ID_ACCOUNT." = :id";
        $tmpContraseña = $this->contraseña;
        $this->contraseña = $candidato;
        
        if ($this->verficar_nueva($nueva, $repeticion)==0 
                && $this->comprobar_contra()) {
               
            $intruccion = $this->conexionBase->prepare($sql);
            $hash = password_hash($nueva, PASSWORD_DEFAULT);
            $intruccion->execute(array(":contra"=>$hash, ":id"=> $this->idCuenta));

            $intruccion->closeCursor();

            return 0;
            
        }
        
        $this->contraseña = $tmpContraseña;
        
        return 1;
        
    } //Funcional
    
    private function verficar_nueva($nueva, $repeticion) {
        
        return strcmp($nueva, $repeticion);
        
    } //Funcional
    
    public static function recuperar(){
        
        $cnx = (new conexion())->__conexion();
        
        $cedula = htmlentities(addslashes(filter_input(INPUT_POST, "usuario")));
        $email= htmlentities(addslashes(filter_input(INPUT_POST, "email")));
        
        $sentencia = "SELECT * FROM ".TABLE_ACCOUNT." INNER JOIN ".TABLE_STUDENT
                . " WHERE ".TABLE_ACCOUNT.".".ID_ACCOUNT." = :cedula AND "
                . " ".TABLE_STUDENT.".".EMAIL." = :correo";
        $conexion = $cnx->prepare($sentencia);
        $conexion->execute(array(":cedula"=>$cedula, ":correo"=>$email));
        
        $resultado = $conexion->rowCount();
        if ($resultado==1) {
            
            return cuenta::nueva_contra($cnx, $cedula);
            
        }
        
        return  "Usuario o contraseña incorrectos. ";
    }
    
    private static function nueva_contra($cnx, $cedula) {
        
        $contraseña = rand(100000, 900000);
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);
        
        $sql = "UPDATE ".TABLE_ACCOUNT." SET ".PASSWRD_AC." "
                . "= :contra WHERE ".ID_ACCOUNT." = :cedula";
        $resultado = $cnx->prepare($sql);
        $resultado->execute(array(":contra"=>$hash, ":cedula"=>$cedula));
        $resultado->closeCursor();
        
        return $contraseña;
        
    }
    
    public function comprobar_contra() {
        
        $sql = "SELECT ".PASSWRD_AC." FROM ".TABLE_ACCOUNT." "
                . "WHERE ".ID_ACCOUNT."= :id";
        
        $sentencia = $this->conexionBase->prepare($sql);
        $sentencia->execute(array(":id"=> $this->idCuenta));
        $contraOriginal = $sentencia->fetch();
        
        return password_verify($this->contraseña, $contraOriginal["contrasenha"]);
        
    } //Funcional

    public function delete () {

        $sql = "DELET FROM".TABLE_ACCOUNT." WHERE ".ID_ACCOUNT. " = :id";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":id"=>$this->idCuenta));


    }
    
    public function sumar($numero, $tabla, $codigo, $referencia){
        
        $sql = "UPDATE $tabla SET $numero = $numero+1 WHERE $referencia = '$codigo'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        $resultado->closeCursor();
                
    } //?

}
