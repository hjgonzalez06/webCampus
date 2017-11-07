<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

<?php

require_once '../Config/course/course.php';
include_once '../Config/check.php';

$user = unserialize($_SESSION["user"]);
$user->__connect();

//documentar esto.

$listaIns = $user->data_section();

foreach ($listaIns as $lista){

    if (empty($lista)){
        continue;
    }

    $materias[] = $lista;

}

$horasImprimir = array
        (
            710755 =>"7:10-7:55",
            755840 =>"7:55-8:40",
            850935 =>"8:50-9:35",
            9351020 =>"9:35-10:20",
            10201105 =>"10:20-11:05",
            11051150 =>"11:05-11:50",
            11501235 =>"11:50-12:35",
            12501335 =>"12:50-13:35",
            13351420 =>"13:35-14:20",
            14201505 =>"14:20-15:05",
            15051550 =>"15:05-15:50",
            15501635 =>"15:50-16:35",
            16351720 =>"16:35-17:20",
            17201805 =>"17:20-18:05",
            18051850 =>"18:05-18:50",                      
            19001945 =>"19:00-19:45",
            19452030 =>"19:45-20:30",
            20302115 =>"20:30-21:15",
            21152200 =>"21:15-20:00 "
        );
$horas = array("07100755",
               "07550840",
               "08500935",
               "09351020",
               "10201105",
               "11051150",
               "11501235",
               "12501335",
               "13351420",
               "14201505",
               "15051550",
               "15501635", 
               "16351720",
               "17201805", 
               "18051850", 
               "19001945",
               "19452030",
               "20302115",
               "21152200");

$dias = array("Lunes", "Martes", "Mi&eacute", "Jueves", "Viernes", "Sabado");

function cmp_inical($materiaHora, $hora) {
    
    return materia_comienzo($materiaHora) == hora_comienzo($hora);
    
}

function cmp_final($materiaHora, $hora) {
    
    return materia_final($materiaHora) == hora_final($hora);
    
}

function ponerHora($horaTemporal,$horaOriginal, $diaMat, $dia) {
    
    $horaAux1 = materia_comienzo($horaOriginal);
    $horaAux2 = materia_final($horaOriginal);
    $horaTmp= hora_comienzo($horaTemporal);
    $horaTmp2 = hora_final($horaTemporal);
    
    return $horaAux1<=$horaTmp && $horaAux2>=$horaTmp2 && $dia==$diaMat;
    
}

function materia_comienzo($materiaHora) {
    
    return substr($materiaHora, 0, 4);
}

function materia_final($materiaHora) {
    
    return substr($materiaHora, 4, 9);
}
function hora_comienzo($hora) {
    
    return substr($hora, 0, 4);
}
function hora_final($hora) {
    
    return substr($hora, 4, 9);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1" width=100% align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="126" bgcolor="#C4D2E2"><div align="center"><strong>Hora </strong></div></td>
                  <td width="126" bgcolor="#C4D2E2"><div align="center"><strong>Lunes</strong></div></td>
                  <td width="126" bgcolor="#C4D2E2"><div align="center"><strong>Martes</strong></div></td>
                  <td width="126" bgcolor="#C4D2E2"><div align="center"><strong>Miercoles</strong></div></td>
                  <td width="126" bgcolor="#C4D2E2"><div align="center"><strong>Jueves</strong></div></td>
                  <td width="130" bgcolor="#C4D2E2"><div align="center"><strong>Viernes</strong></div></td>
                  <td width="130" bgcolor="#C4D2E2"><div align="center"><strong>Sabado</strong></div></td>
            </tr>
            <tr>
                
                <td height="13" bgcolor="#E1E1E1" class="letra8"><div align="center">07:10-07:55 </div></td>
                <td  height="35" colspan="6" rowspan="19" class="letra8">
                
                <?php
                
                if(empty($materias)){
                    echo "<center><h3>No hay materias inscritas</h3></center>";
                }else{
                    echo "<table width=100% border='1'align='center' cellpadding='0' cellspacing='0' bordercolor='#000000'id='tabla'>";
                    foreach ($horas as $hora) {
                        echo "<tr width='90' height='30'>";
                        foreach ($dias as $dia) {
                            echo "<td width='100'align='center' class='celda'>";
                                foreach ($materias as $seccion) {
                                    if (($seccion["dia_uno"]==$dia) || ($seccion["dia_dos"]==$dia)) {
                                        if ($seccion["dia_uno"]==$dia) {
                                            if (ponerHora($hora, $seccion["hora_uno"], $seccion["dia_uno"], $dia)) {
                                                echo $seccion["cod_mat"];
                                            }
                                        }elseif ($seccion["dia_dos"]==$dia) {
                                            if (ponerHora($hora, $seccion["hora_dos"], $seccion["dia_dos"], $dia)) {
                                                echo $seccion["cod_mat"];
                                            }
                                        }
                                    }
                            }             

                            echo"</td>";
                        }
                        echo"</tr>";
                    }

                    echo "</table>";
                }
        ?>
                  </td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#F8F8F8"><div align="center">07:55-8:40</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">8:50-9:35</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#FFFFE1"><div align="center">9:35-10:20</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">10:20-11:05</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">11:05-11:50</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#F8F8F8"><div align="center">11:50-12:35</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">12:50-13:35</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#F8F8F8"><div align="center">13:35-14:20</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">14:20-15:05</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#F8F8F8"><div align="center">15:05-15:50</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">15:50-16:35</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#F8F8F8"><div align="center">16:35-17:20</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">17:20-18:05</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#FFFFE1"><div align="center">18:05-18:50</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#FFFFE1"><div align="center">19:00-19:45</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">19:45-20:30</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#F8F8F8"><div align="center">20:30-21:15</div></td>
                </tr>
                <tr bgcolor="#66CCFF" class="letra8">
                  <td height="13" bgcolor="#E1E1E1"><div align="center">21:15-20:00 </div></td>
                </tr>
              </table>
        
    </body>
</html>
