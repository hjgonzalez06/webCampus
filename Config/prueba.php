<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';
include_once '../users/professor.php';
include_once '../Config/section/section.php';
include_once '../Enrollment/inscripcion.php';


$secciones = array("P301", "MATV01", "LABF01");
$alumno = new student("26501690", "malta1");

$_POST["codigo"] = "EDD0504380";

$codigoMa = $_POST["codigo"];

$materia = new materia($_POST["codigo"]);


$secciones = $materia->show_sections();

foreach ($secciones as $seccione) {
    echo $seccione[COD_SEC];
}
