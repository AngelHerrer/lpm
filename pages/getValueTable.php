<?php

error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
include './conexion.php';

extract($_REQUEST);

$count = count($idEmp);
$countTurno = count($turno);
$days = cal_days_in_month(CAL_GREGORIAN, $mothService, $yearService);
if ($weekService == 1) {
    $j = 0;
    for ($i = 0; $i < $count; $i++) {
        $contadori = (15 * $i);
        $contadorj = (15 * ($i + 1)) - 1;
        for ($j = $contadori; $j <= $contadorj; $j++) {
            if ($turno[$j] == 0) {
                $turno[$j] = "null";
            }
            $query = "insert into asistencias (id_emp,id_ser,id_turn,date_turn,comentarios) values ($idEmp[$i],$idService,$turno[$j],'$yearService-$mothService-$dias[$j]',null); ";
            $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
        }
    }
} elseif ($weekService == 2) {
    $j = 0;
    for ($i = 0; $i <= $count; $i++) {
        $contadori = (15 * $i);
        $contadorj = (15 * ($i + 1)) - 1;
        for ($j = $contadori; $j <= $contadorj; $j++) {
            echo $i;

            if ($turno[$j] == 0) {
                $turno[$j] = "null";
            }
            $query = "insert into asistencias (id_emp,id_ser,id_turn,date_turn,comentarios) values ($idEmp[$i],$idService,$turno[$j],'$yearService-$mothService-$dias[$j]',null); ";
            echo $query . ':::' . $idEmp[$i] . '--' . $turno[$j] . '---' . $dias[$j] . '<br>';
            $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
        }
    }
}
?>

