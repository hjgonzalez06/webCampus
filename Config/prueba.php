<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';
include_once '../users/professor.php';
include_once '../Config/section/section.php';
include_once '../Enrollment/inscripcion.php';
include_once './career/career.php';

$carrera = new career("ING0809101");

echo $carrera->getName();