<?php

class Valores {

    function saveEmployee($nameEmp, $patEmp, $matEmp, $rfcEmp, $dateEmpNac, $placeEmp, $avenEmp, $colonyEmp, $postalEmp, $delegaEmp, $state, $phoneOne, $phoneTwo, $genderEmp, $civilEmp, $schoolEmp, $chilEmp, $referEmp, $socialEmp, $numSocial, $bankEmp, $turnEmp, $servEmp, $dateIng, $lockedEmp) {
        include 'conexion.php';
        $query = "INSERT INTO `emp_prisma`( `emp_name`, `emp_ap_pat`, `emp_ap_mat`, `emp_rfc`, `emp_date_nac`, `emp_place_birth`, `emp_avenue`, `emp_colony`, `emp_postal_code`, `emp_delegation`, `emp_state`, `emp_phone`, `emp_phone_two`, `emp_gender`, `emp_civil_status`, `emp_ scholarship`, `emp_children`, `emp_ reference`, `emp_social_option`, `emp_social_security`, `emp_turn`, `emp_service`, `emp_date_admission`, `emp_locked`, `emp_bank_account`) VALUES ('$nameEmp','$patEmp','$matEmp','$rfcEmp','$dateEmpNac','$placeEmp','$avenEmp','$colonyEmp','$postalEmp','$delegaEmp','$state','$phoneOne','$phoneTwo','$genderEmp','$civilEmp','$schoolEmp','$chilEmp','$referEmp','$socialEmp','$numSocial','$turnEmp','$servEmp','$dateIng','$lockedEmp','$bankEmp')";

        $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
    }
    

    function getAllEmp() {
        include 'conexion.php';
        $query = "SELECT * FROM `emp_prisma`";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $idEmp = $row['id_emp'];
            $nameEmp = $row['emp_name'];
            $apPat = $row['emp_ap_pat'];
            $apMat = $row['emp_ap_mat'];
            $serviceEmp = $row['emp_service'];
            $turnEmp = $row['emp_turn'];
            echo '<tr><td>' . $idEmp . '</td><td>' . $nameEmp . '</td><td>' . $apPat . '</td><td>' . $apMat . '</td><td>' . $serviceEmp . '</td><td>' . $turnEmp . '</td><td align="center"><a href="getEmpleado.php?idEmp=' . $idEmp . '"><span style="margin-left:10px;" class="glyphicon glyphicon-eye-open"></span></a></td></tr>';
        }
    }

    function getEmp($idEmp) {
        include 'conexion.php';
        $query = "select * from `emp_prisma` where id_emp = '$idEmp'";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $idEmple = $row['id_emp'];
            $nomEmple = $row['emp_name'];
            $apPatEmple = $row['emp_ap_pat'];
            $apMatEmple = $row['emp_ap_mat'];
            $rfcEmple = $row['emp_rfc'];
            $dateNacEmple = $row['emp_date_nac'];
            $placeBirEmple = $row['emp_place_birth'];
            $avEmple = $row['emp_avenue'];
            $colonyEmple = $row['emp_colony'];
            $cpEmple = $row['emp_postal_code'];
            $delEmple = $row['emp_delegation'];
            $stateEmple = $row['emp_state'];
            $phoneEmple = $row['emp_phone'];
            $phoneTwoEmple = $row['emp_phone_two'];
            $genderEmple = $row['emp_gender'];
            $civilEmple = $row['emp_civil_status'];
            $schoEmple = $row['emp_ scholarship'];
            $chilEmple = $row['emp_children'];
            $referEmple = $row['emp_ reference'];
            $socialEmple = $row['emp_social_option'];
            $socSecuEmple = $row['emp_social_security'];
            $turnEmple = $row['emp_turn'];
            $serviceEmple = $row['emp_service'];
            $dateAdmEmple = $row['emp_date_admission'];
            $lockedEmple = $row['emp_locked'];
            $bankEmple = $row['emp_bank_account'];

            return array($idEmple, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple,
                $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple,
                $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple,
                $turnEmple, $serviceEmple, $dateAdmEmple, $lockedEmple, $bankEmple);
        }
    }

    function allState() {
        include 'conexion.php';
        $query = "SELECT * FROM `estados`";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $state = $row['estado'];
            echo '<option>' . $state . '</option>';
        }
    }

    function updateEmple($idEmp, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple, $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple, $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple, $turnEmple, $serviceEmple, $dateAdmEmple, $lockedEmple, $bankEmple) {
        include 'conexion.php';
        $query = "UPDATE `emp_prisma` SET `emp_name`='$nomEmple',`emp_ap_pat`='$apPatEmple',"
                . "`emp_ap_mat`='$apMatEmple',`emp_rfc`='$rfcEmple',`emp_date_nac`='$dateNacEmple',`emp_place_birth`='$placeBirEmple',"
                . "`emp_avenue`='$avEmple',`emp_colony`='$colonyEmple',`emp_postal_code`='$cpEmple',"
                . "`emp_delegation`='$delEmple',`emp_state`='$stateEmple',`emp_phone`='$phoneEmple',`emp_phone_two`='$phoneTwoEmple',"
                . "`emp_gender`='$genderEmple',`emp_civil_status`='$civilEmple',`emp_ scholarship`='$schoEmple',"
                . "`emp_children`='$chilEmple',`emp_ reference`='$referEmple',`emp_social_option`='$socialEmple',"
                . "`emp_social_security`='$socSecuEmple',`emp_turn`='$turnEmple',`emp_service`='$serviceEmple',"
                . "`emp_date_admission`='$dateAdmEmple',`emp_locked`='$lockedEmple',`emp_bank_account`='$bankEmple' WHERE `id_emp`=$idEmp";


        $result = mysqli_query($liga, $query) or die("<script>window.location.href='index.php?edit=no';</script>");
    }

}
?>

