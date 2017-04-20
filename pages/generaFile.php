<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

//echo $name.'-',
//$amat.'-',
//$apat.'-',
//$sueldo;

for($i=0; $i<= 20; $i++ ){
    echo $name[$i];
    echo $apat[$i];
    echo $amat[$i].$sueldo[$i].'<br>';
}

?>