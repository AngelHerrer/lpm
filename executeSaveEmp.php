<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

$dateNac = explode("-", $dateEmpNac);

$dateEmpNac=$dateNac[2].'-'.$dateNac[1].'-'.$dateNac[0];

$valores->saveEmployee($nameEmp, $patEmp, $matEmp, $rfcEmp, $dateEmpNac, $placeEmp, $avenEmp, $colonyEmp, $postalEmp, $state, $delegaEmp, $phoneOne, $phoneTwo, $genderEmp, $civilEmp, $schoolEmp, $chilEmp, $socialEmp, $socialNum, $referEmp, $servEmp, $dateIng, $cbEmp, $cbNum, $infonaEmp, $infonaNum);

header("Location:addEmp.php?succes=ok");        
?>


