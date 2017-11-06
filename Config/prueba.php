<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';

$test = new student("26501689", "hola12");

$prueba = new materia("TDP010203");

echo $prueba->getNroTri();