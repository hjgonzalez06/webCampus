<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';

$test = new student("26501689", "hola12");


$informacionSecciones =  course::show_all_sections();

foreach ($informacionSecciones as $materia){


    echo $materia["cod_sec"];

}
