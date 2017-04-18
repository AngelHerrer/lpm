<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
 $servidor = "localhost";
$usuario = "root";
$password = "";

    if (!$liga = mysqli_connect($servidor,$usuario,$password)) {
        echo "No se encuentra el Servidor";
        
    }
    else {

        if (!mysqli_select_db($liga,"prisma_bd")) {
            
            echo "No se encuentra la Base de datos";
            
        }
        
        else {
            
            //echo 'conectado';
            
        }
        
        
    }
 
    
    extract($_REQUEST);
    
    
    $count = count($idEmp);
    $countTurno = count($turno);
    //var_dump($count);
    //echo '='.$count;
    $j=0;
    for ($i = 0; $i <= $count; $i++) {
        
        $contadori =  (14 * $i);
        $contadorj =  (14 * $i)+14;
         if($i>0){
            $contadori=$contadori+1;
            //$contadorj=$contadorj+1;
         }
         //echo '='.$contadori.'='.$contadorj;
        for ($j = $contadori; $j <= $contadorj; $j++){
            echo '='.$j.'=/';
            
            
            echo $idEmp[$i].'--'.$turno[$j].'<br>';
            
            
             $query = "insert into asistencias (id_emp,id_turn,date_turn,comentarios) values ($idEmp[$i],$turno[$j],'2017-03-01',null); ";
            $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
        }
        //echo $turno[$i];
        
    }
    
//    for ($i = 0; $i < $count; $i++){
//        for ($j = 0; $j < $countTurno; $j++){
//            echo $idEmp[$i];
//            echo $
//        }
//    }

    

?>

