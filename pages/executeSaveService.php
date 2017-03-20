<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
$valores->saveService($nameService, $dirService, $actService);
header("Location:addService.php?succes=ok");        


?>

