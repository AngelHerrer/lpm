<?php

class Valores {

    function max_id($liga, $table, $column) {
        $query = "select count(*) from " . $table;
        $resultado = @mysqli_query($liga, $query) or die(mysql_error());
        $row = mysqli_fetch_array($resultado);
        if ($row['count(*)'] == 0) {
            return 1;
        }

        $query = "select max(" . $column . ") from " . $table;
        $resultado = @mysqli_query($liga, $query) or die(mysql_error());

        $row = mysqli_fetch_array($resultado);
        $id = $row['max(' . $column . ')'];

        $id_auto = (int) $id + 1;

        return $id_auto;
    }

    function saveEmployee($nameEmp, $patEmp, $matEmp, $rfcEmp, $dateEmpNac, $placeEmp, $avenEmp, $colonyEmp, $postalEmp,  $state,$delegaEmp, $phoneOne, $phoneTwo, $genderEmp, $civilEmp, $schoolEmp, $chilEmp, $socialEmp, $socialNum, $referEmp, $servEmp,$dateIng,$cbEmp,$cbNum ,$infonaEmp,$infonaNum) {
        include 'conexion.php';
        $id_auto = $this->max_id($liga, 'emp_prisma', 'id_emp');
        $query = "INSERT INTO emp_prisma VALUES ('$id_auto','$nameEmp','$patEmp','$matEmp','$rfcEmp','$dateEmpNac','$placeEmp','$avenEmp','$colonyEmp','$postalEmp','$state','$delegaEmp','$phoneOne','$phoneTwo','$genderEmp','$civilEmp','$schoolEmp','$chilEmp','$socialEmp','$socialNum','$referEmp','1','$servEmp','$dateIng','1','$cbEmp','$cbNum','$infonaEmp','$infonaNum')";
        echo $query;
        $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
    }

    function saveService($nameSer, $zonaSer, $tel_1Ser) {
        include 'conexion.php';
        $id_comp=1;
        if(empty($tel_1Ser)){
            $tel_1Ser=null;
        }
        $id_auto = $this->max_id($liga, 'servicios', 'id_ser');
        $query = "insert into servicios  values ($id_auto,'$nameSer','$zonaSer',$id_comp,$tel_1Ser,null,1); ";
        echo $query;
        $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
        if ($result) {
            echo '<script type="text/javascript">';
            echo 'window.location.href="addService.php?succes=ok";';
            echo '</script>';
        }
    }

    function getAllService() {
        include 'conexion.php';
        $query = "SELECT * FROM `servicios`";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $id_ser = $row['id_ser'];
            $nomb_ser = $row['nomb_ser'];
            $zona_ser = $row['zona_ser'];
            $tel1_ser = $row['tel1_ser'];
            $bina_act = $row['bina_act'];
             $x=0;
            if($bina_act==0){
               $x=1; 
            }
            echo '<tr><td>' . $id_ser . '</td><td>' . $nomb_ser . '</td><td>' . $zona_ser . '</td><td>'.$tel1_ser.'</td><td><select name="act_servicio"><option selected>' . $bina_act . '</option><option value="'.$x.'">'.$x.'</option></select></td><td><button type="button" class="btn btn-primary">Guardar</button></td></tr>';
        }
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

    function getServices() {
        include 'conexion.php';
        $query = "SELECT * FROM `servicios`";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $id_ser = $row['id_ser'];
            $name_ser = $row['nomb_ser'];
            $bina_act = $row['act_servicio'];
            echo '<option value="' . $id_ser . '">' . $name_ser . '</option>';
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
            $id_state = $row['id_state'];
            $state = $row['estado'];
            echo '<option value="' . $id_state . '">' . $state . '</option>';
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

    function getMuni($idState) {
        include 'conexion.php';
        $opciones = '<option value="0"> Elige un municipio</option>';
        $query = 'select * from prisma.municipios where id_estado =' . $idState;
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $id_state = $row['id_municipio'];
            $state = $row['nombre_municipio'];
            echo $opciones = '<option value="' . $id_state . '">' . $state . '</option>';
        }
    }
    
    function getEmpServ($idService, $weekService, $mothService, $yearService){
        include 'conexion.php';
        $days = cal_days_in_month(CAL_GREGORIAN, $mothService, $yearService);
        $query = "SELECT * FROM prisma.emp_prisma where id_ser = $idService";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            $id_emp = $row['id_emp'];
            $emp_name = $row['emp_name'];
            $emp_ap_pat = $row['emp_ap_pat'];
            $emp_ap_mat = $row['emp_ap_mat'];
            echo '<tr><td>'.$id_emp.'</td><td>'.$emp_name.' '.$emp_ap_pat.' '.$emp_ap_mat. '</td></tr>';
        }
    }

}
?>

