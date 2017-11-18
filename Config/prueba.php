<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';
include_once '../users/professor.php';


$profesor = new professor("16546624", "");
$alumno = new student("26501690", "malta1");
$amigos = $alumno->courses_alumn_search();
$numero = 1;




