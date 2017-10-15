<?php


/**
 * Clase abstracta user, proporciona todo el manejo con la base de datos,
 *  sirviendo como base para las clases hijas.
 * @author nookamb
 */

require_once '../Config/cuenta.php';

abstract class User extends cuenta {
    
//    private $nacionalidad;
//    private $cedula;
//    private $codigoCa;
//    private $codigoTri;
//    private $nombre;
//    private $nombre2;
//    private $apellido;
//    private $apellido2;
//    private $correo;
//    private $movil;
//    private $casa;
//    private $direccion;
//    private $turno;
//    private $lapso;
//    private $lapsoOld;
//    private $tri_aprob;
//    private $status;
//    private $uca;
//    private $ucc;
//    private $indiceAct;
//    private $indiceTol;
    
    public function getNacionalidad() {
        
        $sql = "SELECT ".NAOTY." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NAOTY];
        
    }

    public function getCedula() {
        
        $sql = "SELECT ".ID_STU." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[ID_STU];
        
    }

    public function getCodigoCa() {
        
        $sql = "SELECT ".CAREER." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[CAREER];
        
    }

    public function getCodigoTri() {
        
        $sql = "SELECT ".STU_TRI." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[STU_TRI];
        
    }

    public function getNombre() {
        
        $sql = "SELECT ".NAME_STU." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NAME_STU];
    }

    public function getNombre2() {
        
        $sql = "SELECT ".NAME_STU2." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NAME_STU2];
        
    }

    public function getApellido() {
        
        $sql = "SELECT ".LNAME_STU." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LNAME_STU];
        
    }

    public function getApellido2() {
        
        $sql = "SELECT ".LNAME_STU2." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LNAME_STU2];
    }

    public function getCorreo() {
        
        $sql = "SELECT ".EMAIL." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[EMAIL];
        
    }

    public function getMovil() {
        
        $sql = "SELECT ".CELL." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[CELL];
        
    }

    public function getCasa() {
        
        $sql = "SELECT ".PHONE." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[PHONE];
        
    }

    public function getDireccion() {
        
        $sql = "SELECT ".ADDRESS." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[ADDRESS];
        
    }
    
    public function getTurno(){
        
        $sql = "SELECT ".TURN_STU." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[TURN_STU];
        
    }
    
    public function getLapso() {
        
        $sql = "SELECT ".LAP_ACT." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LAP_ACT];
        
    }
    
    public function getLapsoOld() {
        
        $sql = "SELECT ".LAP_OLD." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LAP_OLD];
        
    }
    
    public function getTrimester() {
        
        $sql = "SELECT ".STU_TRI." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[STU_TRI];
        
    }
    
    public function getTriAprob(){
        
        $sql = "SELECT ".TRI_PASS." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[TRI_PASS];
        
    }
    
    public function getUca() {
        
        $sql = "SELECT ".UNIT_A." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[UNIT_A];
         
    }
    
    public function getIndiceAct() {
        
        $sql = "SELECT ".NOTES_LST." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NOTES_LST];
        
    }
    
    public function getIndiceOld() {
        
        $sql = "SELECT ".NOTES_ALL." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NOTES_ALL];
        
    }
    
    public function getUcc() {
        
        $sql = "SELECT ".UNIT_V." FROM ".TABLE_STUDENT." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[UNIT_V];
        
    }


    public function setNacionalidad($nacionalidad) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".NAOTY." = '".$nacionalidad.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCedula($cedula) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".ID_STU." = '".$cedula.
                "' WHERE ".ID_AC3." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
    }

    public function setCodigoCa($codigoCa) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".CAREER." = '".$codigoCa.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCodigoTri($codigoTri) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".STU_TRI." = '".$codigoTri.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setNombre($nombre) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".NAME_STU." = '".$nombre.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setNombre2($nombre2) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".NAME_STU2." = '".$nombre2.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setApellido($apellido) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".LNAME_STU." = '".$apellido.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setApellido2($apellido2) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".LNAME_STU2." = '".$apellido2.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCorreo($correo) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".EMAIL." = '".$correo.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setMovil($movil) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".CELL." = '".$movil.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCasa($casa) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".PHONE." = '".$casa.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setDireccion($direccion) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".ADDRESS." = '".$direccion.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setTurno($turno){
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".TURN_STU." = '".$turno.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setLapsoAct($LapsoAct) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".LAP_ACT." = '".$LapsoAct.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setLapsoOld($lapsoOld) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".LAP_OLD." = '".$lapsoOld.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setUca($uca) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".UNIT_A." = '".$uca.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setUcc($ucc){
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".UNIT_V." = '".$ucc.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setNotesLst($notesLst){
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".NOTES_LST." = '".$notesLst.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setNotesAll($notesAll) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".NOTES_ALL." = '".$notesAll.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setTriAprob($triAprob) {
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".TRI_PASS." = '".$triAprob.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setStatus($status){
        
        $sql = "UPDATE ".TABLE_STUDENT." SET ".STATUS_STU." = '".$status.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

}
