<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);
$valores->updateEmple($idEmp, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple, $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple, $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple, $turnEmple, $serviceEmple, $dateAdmEmple, $lockedEmple, $bankEmple);
header('Location: http://localhost/tempPrisma/pages/index.php?edit=si');        
?>



