<?php

include_once '../users/student.php';
include_once '../users/admin.php';
include_once './course/materia.php';

$test = new student("26501689", "hola12");

$prueba = new materia("TDP010203");

$resultado = $prueba->showSections();

foreach ($resultado as $datos) {

    foreach ($datos as $value) {
        
        echo $value . " ";
        
    }
    
    echo "<br>";
}
