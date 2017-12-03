<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';
include_once '../users/professor.php';
include_once '../Config/section/section.php';
include_once '../Enrollment/inscripcion.php';
include_once './career/career.php';


$arreglo = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);

for ($i=0; $i<count($arreglo); $i++) {

    $j = $arreglo[((count($arreglo)-1)-$i)];

    if(($i != $j) && ($i+1 != $j)) {

        echo $i+1 . "--" . $j . "<br>";

    }else{

        break;

    }

}