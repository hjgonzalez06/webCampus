<?php   

require_once './Bd_conexion.php';
require_once './configUsers.php';

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
        $this->contraseña = $contra;
        
        $sql = "INSERT INTO".TABLE_ACCOUNT." (".ID_ACCOUNT.", ".PASSWRD_A.")"
                . " VALUES (':cedula', '$contra') ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":cedula"=> $this->idCuenta));
        
        $resultado->closeCursor();
        
    } //Funcional
    
    public function login(){
        
        if ($this->comprobar_usuario()==1 
                && $this->comprobar_contra($this->contraseña, $this->idCuenta)){
            
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
    
    public function actContra($nueva, $repeticion) {
        
        $sql = "UPDATE ".TABLE_ACCOUNT." SET ".PASSWRD_AC." = :contra, estado = 1"
                . " WHERE ".ID_ACCOUNT." = :id";
        $tmpContraseña = $this->contraseña;
        
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
    
    public function comprobar_contra() {
        
        $sql = "SELECT ".PASSWRD_AC." FROM ".TABLE_ACCOUNT." "
                . "WHERE ".ID_ACCOUNT."= :id";
        
        $sentencia = $this->conexionBase->prepare($sql);
        $sentencia->execute(array(":id"=> $this->idCuenta));
        $contraOriginal = $sentencia->fetch();
        
        return password_verify($this->contraseña, $contraOriginal["contrasenha"]);
        
    } //Funcional
    
    public function sumar($numero, $tabla, $codigo, $referencia){
        
        $sql = "UPDATE $tabla SET $numero = $numero+1 WHERE $referencia = '$codigo'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        $resultado->closeCursor();
                
    } //?

}
