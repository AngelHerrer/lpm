<?php
echo 'hola';
//    date_default_timezone_set("America/Los Angeles"); //Defines la zona horaria

//function UltimoDia($anho,$mes){
$anho=2017;
$mes=02;

   if (((fmod($anho,4)==0) and (fmod($anho,100)!=0)) or (fmod($anho,400)==0)) {
       $dias_febrero = 29;
       
   } else {
       $dias_febrero = 28;
       
   }
   echo $dias_febrero;
   
   switch($mes) {
       case 01: return 31; break;
       case 02: return $dias_febrero; break;
       case 03: return 31; break;
       case 04: return 30; break;
       case 05: return 31; break;
       case 06: return 30; break;
       case 07: return 31; break;
       case 08: return 31; break;
       case 09: return 30; break;
       case 10: return 31; break;
       case 11: return 30; break;
       case 12: return 31; break;
   }


//if (30 > 29) {
//    echo '2';
//    return 2; // Dos quincenas
//} else {
//    echo '1';
//    return 1; // Una sola quincena
//}
