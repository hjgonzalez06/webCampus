<?php

/*
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto cfranklinmoreno@gmail.com
 */

//data of admin's table
define("TABLE_ADMIN", "admin");
    define("ID_ADMIN", "id_cuenta");
    define("PASSWRD_A", "contrasenha");
    define("PASSWRD_A2", "sda_contra");
    
//data of account's table    
define("TABLE_ACCOUNT", "cuenta");
    define("ID_ACCOUNT", "id_cuenta");
    define("PASSWRD_AC", "contrasenha");
    define("STATUS", "estado");

//data of career's table
define("TABLE_CAREER", "carreras");
    define("COD_CA", "cod_ca");
    define("UNIT_ALL", "uc_tol");
    define("NRO_TRI_CA", "nro_tri_ca");
    define("NRO_STU", "nro_est");
    define("NAME_CA", "nombre");
    
//data of course´s table    
define("TABLE_COURSE", "materias");
    define("COD_MAT", "cod_mat");
    define("NAME_CRS", "nombre");
    define("PRE_COD", "pre_cod");
    define("PRE_UNIT", "uc_pre");
    define("NRO_MAT", "nro_tri");
    define("FOREN_COD", "cod_for");
    define("COST", "uc_cost");
    
//data of profesor's table
define("TABLE_PROFESSOR", "profesores");
    define("COD_PRO", "cod_pro");
    define("ID_PRO", "cedula");
    define("NAME_PRO", "nombre");
    define("LNAME_PRO", "apellido");

//data of trimester's table
define("TABLE_TRIMESTER", "trimestres");
    define("COD_TRI", "cod_tri");
    define("COD_CA2", "cod_ca");
    define("NRO_TRI", "n_tri");
    define("UNIT_MIN", "uc_nec");
    define("NRO_STU_TRI", "n_est_tri");

//data of section's table
define("TABLE_SECTION", "secccion");
    define("COD_SEC", "cod_sec");
    define("COD_MAT2", "cod_mat");
    define("COD_PRO2", "cod_pro");
    define("HOUR", "hora_uno");
    define("HOUR2", "hora_dos");
    define("DAY", "dia_uno");
    define("DAY2", "dia_dos");
    define("TURN", "turno");
    
//data of registry's table
define("TABLE_REGISTRY_", "registro_");
    define("COD_SEC2", "cod_sec");
    define("ID_ACC2", "id_cuenta");
    
//data of student's table
define("TABLE_STUDENT", "alumnos");
    define("ID_STU", "cedula");
    define("NAOTY", "nacionalidad");
    define("CAREER", "carrera");
    define("STU_TRI", "trimestre");
    define("ID_AC3", "id_cuenta");
    define("NAME_STU", "nombre");
    define("NAME_STU2", "nombre_do");
    define("LNAME_STU", "apellido");
    define("LNAME_STU2", "apellido_do");
    define("EMAIL", "correo");
    define("CELL", "movil");
    define("PHONE", "casa");
    define("ADDRESS", "direccion");
    define("TURN_STU", "turno");
    define("LAP_ACT", "lapso_act");
    define("LAP_OLD", "lapso_old");
    define("TRI_PASS", "tri_aprob");
    define("STATUS_STU", "status");
    define("UNIT_A", "uca");
    define("UNIT_V", "ucc");
    define("NOTES_LST", "indice_act");
    define("NOTES_ALL", "indice_tol");