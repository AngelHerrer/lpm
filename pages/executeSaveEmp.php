<?php 
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);



$valores->saveEmployee($nameEmp, $patEmp, $matEmp, $rfcEmp, $dateEmpNac, $placeEmp, $avenEmp, $colonyEmp, $postalEmp, $delegaEmp, $state, $phoneOne, $phoneTwo, $genderEmp, $civilEmp, $schoolEmp, $chilEmp, $referEmp, $socialEmp, $numSocial, $bankEmp, $turnEmp, $servEmp, $dateIng, $lockedEmp);

header("Location:addEmp.php?succes=ok");        
?>


