<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
include './conexion.php';
    
    extract($_REQUEST);
    
    var_dump($yearService);
    var_dump($mothService);
    var_dump($weekService);
    var_dump($idService);
    $count = count($idEmp);
    $countTurno = count($turno);
    $days = cal_days_in_month(CAL_GREGORIAN, $mothService, $yearService);
    //echo $days[$j];
 
    //var_dump($count);
    //echo '='.$count;
    if($weekService == 1){
    $j=0;
    for ($i = 0; $i < $count; $i++) {
        
        $contadori =  (15 * $i);
        $contadorj =  (15 * ($i+1))-1;
//         if($i>0){
//            $contadori=$contadori+1;
//            //$contadorj=$contadorj+$i;
//         }
         //echo '='.$contadori.'='.$contadorj;
        for ($j = $contadori; $j <= $contadorj; $j++){
            //echo '='.$j.'=/';
            
                //echo $days[$i].'<br>';
//                        echo $idEmp[$i].'--'.$turno[$j].'---'.$dias[$j].'<br>';

            
           //echo $i;
            
            if($turno[$j] == 0){
                $turno[$j]="null";
            }
               $query = "insert into asistencias (id_emp,id_ser,id_turn,date_turn,comentarios) values ($idEmp[$i],$idService,$turno[$j],'$yearService-$mothService-$dias[$j]',null); ";
               echo $query.'<br>';
//            $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
            
            
        }
        //echo $turno[$i];
        
    }
    }elseif($weekService == 2){
        $j=0;
    for ($i = 0; $i <= $count; $i++) {
//        if($days == 28){
//        $contadori =  (12 * $i);
//        $contadorj =  (12 * $i)+12;    
//        }elseif($days == 29){
//        $contadori =  (13 * $i);
//        $contadorj =  (13 * $i)+13;    
//        }elseif($days == 30){
//        $contadori =  (14 * $i);
//        $contadorj =  (14 * $i)+14;    
//        }elseif($days == 31){
//        $contadori =  (15 * $i);
//        $contadorj =  (15 * $i)+15;    
//        }
        
         $contadori =  (15 * $i);
        $contadorj =  (15 * ($i+1))-1;
//         if($i>0){
//            $contadori=$contadori+1;
//            
//         }
         
        for ($j = $contadori; $j <= $contadorj; $j++){
            
            echo $idEmp[$i].'--'.$turno[$j].'---'.$dias[$j].'<br>';
            
           //echo $i;
              echo $query = "insert into asistencias (id_emp,id_ser,id_turn,date_turn,comentarios) values ($idEmp[$i],$idService,$turno[$j],'$yearService-$mothService-$dias[$j]',null); ";
            $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
            
            
        }
        //echo $turno[$i];
    }
    

    }
    

?>
