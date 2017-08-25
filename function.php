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

    function saveEmployee($nameEmp, $patEmp, $matEmp, $rfcEmp, $dateEmpNac, $placeEmp, $avenEmp, $colonyEmp, $postalEmp, $state, $delegaEmp, $phoneOne, $phoneTwo, $genderEmp, $civilEmp, $schoolEmp, $chilEmp, $socialEmp, $socialNum, $referEmp, $servEmp, $dateIng, $cbEmp, $cbNum, $infonaEmp, $infonaNum) {
        include 'conexion.php';
        $id_auto = $this->max_id($liga, 'emp_prisma', 'id_emp');
        $query = "INSERT INTO emp_prisma VALUES ('$id_auto','$nameEmp','$patEmp','$matEmp','$rfcEmp','$dateEmpNac','$placeEmp','$avenEmp','$colonyEmp','$postalEmp','$state','$delegaEmp','$phoneOne','$phoneTwo','$genderEmp','$civilEmp','$schoolEmp','$chilEmp','$socialEmp','$socialNum','$referEmp','1','$servEmp','$dateIng','1','$cbEmp','$cbNum','$infonaEmp','$infonaNum','1')";
        echo $query;
        $result = mysqli_query($liga, $query) or die('Fallo al insertar a la base ');
    }

    function saveService($nameSer, $zonaSer, $tel_1Ser) {
        include 'conexion.php';
        $id_comp = 1;
        if (empty($tel_1Ser)) {
            $tel_1Ser = 'null';
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
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $id_ser = $row['id_ser'];
            $nomb_ser = $row['nomb_ser'];
            $zona_ser = $row['zona_ser'];
            $tel1_ser = $row['tel1_ser'];
            $bina_act = $row['bina_act'];
            $x = 0;
            if ($bina_act == 0) {
                $x = 1;
            }
            if (empty($tel1_ser)) {
                $inp = '<input type="tel" name="tel1_ser">';
            } else {
                $inp = $tel1_ser;
            }
            echo '<tr><td>' . $id_ser . '</td><td>' . $nomb_ser . '</td><td>' . $zona_ser . '</td><td>' . $inp . '<input type="hidden" value="' . $id_ser . '" name="id_ser"></td><td><select name="act_servicio"><option selected>' . $bina_act . '</option><option value="' . $x . '">' . $x . '</option></select></td><td><button type="submit" class="btn btn-primary">Guardar</button></td></tr>';
        }
    }

    function getAllEmp() {
        include 'conexion.php';
        $query = "select id_emp,nomb_emp,apat_emp,amat_emp,nomb_ser from empleado_ser";
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $idEmp = $row['id_emp'];
            $nameEmp = $row['nomb_emp'];
            $apPat = $row['apat_emp'];
            $apMat = $row['amat_emp'];
            $nomb_ser = $row['nomb_ser'];
            echo '<tr><td>' . $idEmp . '</td><td>' . $nameEmp . '</td><td>' . $apPat . '</td><td>' . $apMat . '</td><td>' . $nomb_ser . '</td><td align="center"><a href="getEmpleado.php?idEmp=' . $idEmp . '"><span style="margin-left:10px;" class="glyphicon glyphicon-eye-open"></span></a></td></tr>';
        }
    }

    function getServices($serviceEmple) {
        include 'conexion.php';
        $query = "SELECT * FROM `servicios` order by nomb_ser asc";
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $id_ser = $row['id_ser'];
            $nomb_ser = $row['nomb_ser'];
            //$bina_act = $row['act_servicio'];
            if ($serviceEmple == $nomb_ser) {
                echo '<option selected value="' . $id_ser . '">' . $nomb_ser . '</option>';
            } else {
                echo '<option value="' . $id_ser . '">' . $nomb_ser . '</option>';
            }
        }
    }

    function getEmp($idEmp) {
        include 'conexion.php';
        $query = "select * from `empleado_ser` where id_emp = '$idEmp'";
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $idEmple = $row['id_emp'];
            $nomEmple = $row['nomb_emp'];
            $apPatEmple = $row['apat_emp'];
            $apMatEmple = $row['amat_emp'];
            $rfcEmple = $row['refc_emp'];
            $dateNacEmple = $row['fhna_emp'];
            $placeBirEmple = $row['id_stateN'];
            $avEmple = $row['canu_emp'];
            $colonyEmple = $row['colo_emp'];
            $cpEmple = $row['copo_emp'];
            $delEmple = $row['id_state'];
            $stateEmple = $row['id_municipio'];
            $phoneEmple = $row['tel1_emp'];
            $phoneTwoEmple = $row['tel2_emp'];
            $genderEmple = $row['gene_emp'];
            $civilEmple = $row['eciv_emp'];
            $schoEmple = $row['esco_emp'];
            $chilEmple = $row['nuhi_emp'];
            $referEmple = $row['dref_emp'];
            $id_ser = $row['id_ser'];
            //$socialEmple = $row[''];
            $socSecuEmple = $row['sectso_emp'];
            $infonaEmple = $row['ninfonavi_emp'];
            $serviceEmple = $row['nomb_ser'];
            $dateAdmEmple = $row['fhin_emp'];
            $lockedEmple = $row ['bina_blo'];
            //$lockedEmple = $row['emp_locked'];
            $bankEmple = $row['ncuen_emp'];

            return array($idEmple, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple,
                $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple,
                $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple,
                $id_ser, $serviceEmple, $dateAdmEmple, $lockedEmple, $bankEmple, $infonaEmple);
        }
    }

    function allState($placeBirEmple) {
        include 'conexion.php';
        $query = "SELECT * FROM `estados`";
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $id_state = $row['id_state'];
            $state = $row['estado'];
            if ($placeBirEmple == $id_state) {
                echo '<option selected value="' . $id_state . '">' . $state . '</option>';
            } else {
                echo '<option value="' . $id_state . '">' . $state . '</option>';
            }
        }
    }

    function updateEmple($idEmp, $nomEmple, $apPatEmple, $apMatEmple, $rfcEmple, $dateNacEmple, $placeBirEmple, $avEmple, $colonyEmple, $cpEmple, $delEmple, $stateEmple, $phoneEmple, $phoneTwoEmple, $genderEmple, $civilEmple, $schoEmple, $chilEmple, $referEmple, $socialEmple, $socSecuEmple, $turnEmple, $servEmp, $dateAdmEmple, $lockedEmple, $bankEmple, $infonaEmple) {
        include 'conexion.php';
        $query = "UPDATE `emp_prisma` SET `nomb_emp`='$nomEmple',`apat_emp`='$apPatEmple',"
                . "`amat_emp`='$apMatEmple',`refc_emp`='$rfcEmple',`fhna_emp`='$dateNacEmple',`id_stateN`='$placeBirEmple',"
                . "`canu_emp`='$avEmple',`colo_emp`='$colonyEmple',`copo_emp`='$cpEmple',"
                . "`id_municipio`='$delEmple',`id_state`='$stateEmple',`tel1_emp`='$phoneEmple',`tel2_emp`='$phoneTwoEmple',"
                . "`gene_emp`='$genderEmple',`eciv_emp`='$civilEmple',`esco_emp`='$schoEmple',"
                . "`nuhi_emp`='$chilEmple',`dref_emp`='$referEmple',"
                . "`sectso_emp`='$socSecuEmple',`id_ser`='$servEmp',"
                . "`fhin_emp`='$dateAdmEmple',`bina_blo`='$lockedEmple',`ncuen_emp`='$bankEmple', `ninfonavi_emp`='$infonaEmple' WHERE `id_emp`=$idEmp";

        echo $query;
//        die();
        $result = mysqli_query($liga, $query) or die("<script>window.location.href='index.php?edit=no';</script>");
    }

    function getMuni($idState) {
        include 'conexion.php';
        $opciones = '<option value="0"> Elige un municipio</option>';
        $query = 'select * from municipios where id_estado =' . $idState;
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $id_state = $row['id_municipio'];
            $state = $row['nombre_municipio'];
            echo $opciones = '<option value="' . $id_state . '">' . $state . '</option>';
        }
    }

    function getEmpServ($idService, $weekService, $mothService, $yearService, $i) {

        include 'conexion.php';
        if (empty($mothService)) {
            $mothService = '01';
        }
        if (empty($yearService)) {
            $yearService = '2017';
        }
        $days = cal_days_in_month(CAL_GREGORIAN, $mothService, $yearService);
        $query = "SELECT * FROM emp_prisma where id_ser = $idService";
        //<td><select name="turno'.'2'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'3'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'4'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'5'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'6'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'7'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'8'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'9'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'10'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'11'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'12'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'13'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'14'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td><td><select name="turno'.'15'.$id_emp.$mothService.$yearService.$weekService.'"><option>---</option>'.$this->getTurnos().'</select></td></tr>
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {

            $id_emp = $row['id_emp'];

            $nomb_emp = $row['nomb_emp'];
            $apat_emp = $row['apat_emp'];
            $amat_emp = $row['amat_emp'];

            $selects = '';

            if ($weekService == '1') {
//                echo $querys.'<br>';
                for ($i = 1; $i < 16; $i++) {
                    $querys = "select id_emp,id_turn,alias_turn,date_turn from tb_asistencias where id_emp=$id_emp and date_turn BETWEEN '$yearService-$mothService-$i' AND '$yearService-$mothService-$i';";

                    $results = mysqli_query($liga, $querys);
                    if ($results === FALSE) {
                        die(mysql_error()); // TODO: better error handling
                    }
                    while ($rows = mysqli_fetch_array($results)) {
                        $id_emp = $rows['id_emp'];
                        $id_turn = $rows['id_turn'];
                        $alias_turn = $rows['alias_turn'];
                        $date_turn = $rows['date_turn'];
                        $fecha = explode('-', $date_turn);
                        $dia = $fecha[2];
                    }
                    $selects .= '<td><input type="checkbox" value="' . $i . '" name="dias[]" checked hidden/><select name="turno[]"><option value="0">---</option>' . $this->getTurnos($id_turn) . '</select></td>';
                }
            } elseif ($weekService == '2') {
                for ($i = 16; $i <= $days; $i++) {
                    $selects .= '<td><input type="checkbox" value="' . $i . '" name="dias[]" checked  hidden/><select name="turno[]' . $i . '"><option value="0">---</option>' . $this->getTurnos() . '</select></td>';
                }
            }
            echo '<tr><td>' . $id_emp . '<input type="checkbox" value="' . $id_emp . '" name="idEmp[]" checked hidden></td><td>' . $nomb_emp . ' ' . $apat_emp . ' ' . $amat_emp . '</td>' . $selects . '</tr>';
        }
    }

    function updateServ($idSer, $tel1_ser, $act_servicio) {
        include 'conexion.php';
        if (empty($tel1_ser)) {
            $query = "UPDATE `servicios` SET `bina_act`=$act_servicio WHERE `id_ser`=$idSer";
        } elseif (empty($act_servicio)) {
            $query = "UPDATE `servicios` SET `tel1_ser`=$tel1_ser WHERE `id_ser`=$idSer";
        } else {
            $query = "UPDATE `servicios` SET `tel1_ser`=$tel1_ser,`bina_act`=$act_servicio WHERE `id_ser`=$idSer";
        }
//        echo $query;
        $result = mysqli_query($liga, $query) or die("<script>window.location.href='addService.php?edit=no';</script>");
        if ($result) {
            echo '<script type="text/javascript">';
            echo 'window.location.href="addService.php?update=ok";';
            echo '</script>';
        }
    }

    function getTurnos($id_turno) {
        include 'conexion.php';
        $query = "SELECT * FROM turnos";
        $result = mysqli_query($liga, $query);
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        while ($row = mysqli_fetch_array($result)) {
            $id_turn = $row['id_turn'];
            $alias_turn = $row['alias_turn'];
            if ($id_turn == $id_turno) {
//                $select.='<option value="' . $id_turn . '" selected>' . $alias_turn . '</option>';
                $select.='<option value="' . $id_turn . '" selected>' . $alias_turn . '</option>';
            } else {
                $select.='<option value="' . $id_turn . '">' . $alias_turn . '</option>';
            }
        }
        return $select;
    }

    function nomina($anno, $mes, $quiencena, $id_serv) {
        include 'conexion.php';

        if ($quiencena == 1) {
            $dated = "$anno-$mes-01";
            $datet = "$anno-$mes-15";
            $result = mysqli_query($liga, "call dynamic_view2('$dated','$datet',$id_serv)");
            if ($result === FALSE) {

                echo mysqli_errno($liga) . ": " . mysqli_error($liga) . "\n";
                die(mysqli_error()); // TODO: better error handling
            }
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['nomb_emp'];
                $apat = $row['apat_emp'];
                $amat = $row['amat_emp'];
                $sueldo = $row['cat_sueld'];
                $dia1 = $row['4'];
                $dia2 = $row['5'];
                $dia3 = $row['6'];
                $dia4 = $row['7'];
                $dia5 = $row['8'];
                $dia6 = $row['9'];
                $dia7 = $row['10'];
                $dia8 = $row['11'];
                $dia9 = $row['12'];
                $dia10 = $row['13'];
                $dia11 = $row['14'];
                $dia12 = $row['15'];
                $dia13 = $row['16'];
                $dia14 = $row['17'];
                $dia15 = $row['18'];
//                $sueldosbono=$sueldo-250;
//                $sueldodia=$sueldosbono/15;
                echo '<tr>';
                if ($dia1 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia1 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia2 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia2 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia3 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia3 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia4 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia4 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia5 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia5 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia6 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia6 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia7 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia7 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia8 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia8 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia9 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia9 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia10 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia10 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia11 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia11 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia12 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia12 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia13 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia13 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia14 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia14 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia15 == 'F') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia15 == 'F/J') {
                    $sueldo = $sueldo - 250;
                }
                if ($dia1 == 'F' or $dia1 == 'F/J' or $dia2 == 'F' or $dia2 == 'F/J' or$dia3 == 'F' or $dia3 == 'F/J' or$dia4 == 'F' or $dia4 == 'F/J' or$dia5 == 'F' or $dia5 == 'F/J' or$dia6 == 'F' or $dia6 == 'F/J' or$dia7 == 'F' or $dia7 == 'F/J' or$dia8 == 'F' or $dia8 == 'F/J' or$dia9 == 'F' or $dia9 == 'F/J' or$dia10 == 'F' or $dia10 == 'F/J' or$dia11 == 'F' or $dia11 == 'F/J' or$dia12 == 'F' or $dia12 == 'F/J' or$dia13 == 'F' or $dia13 == 'F/J' or$dia14 == 'F' or $dia14 == 'F/J' or$dia15 == 'F' or $dia15 == 'F/J') {
                    $sueldo = $sueldo - 150;
                }
                echo '<td>' . $name . ' ' . $apat . '</td></td><td>' . $dia1 . '</td><td>' . $dia2 . '</td><td>' . $dia3 . '</td><td>' . $dia4 . '</td><td>' . $dia5 . '</td><td>' . $dia6 . '</td><td>' . $dia7 . '</td><td>' . $dia8 . '</td><td>' . $dia9 . '</td><td>' . $dia10 . '</td><td>' . $dia11 . '</td><td>' . $dia12 . '</td><td>' . $dia13 . '</td><td>' . $dia14 . '</td><td>' . $dia15 . '</td><td><input type="num" id="' . $name, $apat . '"></td><td><label>$' . $sueldo . '</label></td>';

                echo '<input type="hidden" value="' . $sueldo . '" name="sueldo[]">'
                . '<input type="hidden" value="' . $dia1 . '" name="dia1[]">'
                . '<input type="hidden" value="' . $dia2 . '" name="dia2[]">'
                . '<input type="hidden" value="' . $dia3 . '" name="dia3[]">'
                . '<input type="hidden" value="' . $dia4 . '" name="dia4[]">'
                . '<input type="hidden" value="' . $dia5 . '" name="dia5[]">'
                . '<input type="hidden" value="' . $dia6 . '" name="dia6[]">'
                . '<input type="hidden" value="' . $dia7 . '" name="dia7[]">'
                . '<input type="hidden" value="' . $dia8 . '" name="dia8[]">'
                . '<input type="hidden" value="' . $dia9 . '" name="dia9[]">'
                . '<input type="hidden" value="' . $dia10 . '" name="dia10[]">'
                . '<input type="hidden" value="' . $dia11 . '" name="dia11[]">'
                . '<input type="hidden" value="' . $dia12 . '" name="dia12[]">'
                . '<input type="hidden" value="' . $dia13 . '" name="dia13[]">'
                . '<input type="hidden" value="' . $dia14 . '" name="dia14[]">'
                . '<input type="hidden" value="' . $dia15 . '" name="dia15[]">'
                . '<input type="hidden" value="' . $name . '" name="name[]">'
                . '<input type="hidden" value="' . $apat . '" name="apat[]">'
                . '<input type="hidden" value="' . $amat . '" name="amat[]">'
                . '</td></tr>';
            }
        } elseif ($quiencena == 2) {
            $dated = "$anno-$mes-15";
            $datet = "$anno-$mes-31";
            $result = mysqli_query($liga, "call dynamic_view2('$dated','$datet',$id_serv)");
            if ($result === FALSE) {

                echo mysqli_errno($liga) . ": " . mysqli_error($liga) . "\n";
                die(mysqli_error()); // TODO: better error handling
            }
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['nomb_emp'];
                $apat = $row['apat_emp'];
                $sueldo = $row['cat_sueld'];
                $dia16 = $row['4'];
                $dia17 = $row['5'];
                $dia18 = $row['6'];
                $dia19 = $row['7'];
                $dia20 = $row['8'];
                $dia21 = $row['9'];
                $dia22 = $row['10'];
                $dia23 = $row['11'];
                $dia24 = $row['12'];
                $dia25 = $row['13'];
                $dia26 = $row['14'];
                $dia27 = $row['15'];
                $dia28 = $row['16'];
                $dia29 = $row['17'];
                $dia30 = $row['18'];
                $dia31 = $row['19'];
                echo
                '<tr><td>' . $name .' '.$apat.'</td><td>' . $dia16 . '</td><td>' . $dia17 . '</td><td>' . $dia18 . '</td><td>' . $dia19 . '</td><td>' . $dia20 . '</td><td>' . $dia21 . '</td><td>' . $dia22 . '</td><td>' . $dia23 . '</td><td>' . $dia24 . '</td><td>' . $dia25 . '</td><td>' . $dia26 . '</td><td>' . $dia27 . '</td><td>' . $dia28 . '</td><td>' . $dia29 . '</td><td>' . $dia30 . '</td><td>' . $dia31 . '</td><td><input type="num"></td><td><label>$'.$sueldo.'</label></td></tr>';
            }
        }
    }

    function getAsistencia($anno, $mes, $quiencena, $id_serv, $id_emp) {
        include 'conexion.php';
        $dated = "$anno-$mes-01";
        $datet = "$anno-$mes-15";
        $result = mysqli_query($liga, "call dynamic_view2('$dated','$datet',$id_serv)");
        if ($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }
        if ($quiencena == 1) {
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['nomb_emp'];
                $apat = $row['apat_emp'];
                $amat = $row['amat_emp'];
                $sueldo = $row['cat_sueld'];
                $dia1 = $row['4'];
                $dia2 = $row['5'];
                $dia3 = $row['6'];
                $dia4 = $row['7'];
                $dia5 = $row['8'];
                $dia6 = $row['9'];
                $dia7 = $row['10'];
                $dia8 = $row['11'];
                $dia9 = $row['12'];
                $dia10 = $row['13'];
                $dia11 = $row['14'];
                $dia12 = $row['15'];
                $dia13 = $row['16'];
                $dia14 = $row['17'];
                $dia15 = $row['18'];
            }
        } elseif ($quiencena == 2) {
            $dated = "$anno-$mes-15";
            $datet = "$anno-$mes-31";
            while ($row = mysqli_fetch_array($result)) {
                $name = $row['nomb_emp'];
                $sueldo = $row['cat_sueld'];
                $dia17 = $row['17'];
                $dia18 = $row['18'];
                $dia19 = $row['19'];
                $dia20 = $row['20'];
                $dia21 = $row['21'];
                $dia22 = $row['22'];
                $dia23 = $row['23'];
                $dia24 = $row['24'];
                $dia25 = $row['25'];
                $dia26 = $row['26'];
                $dia27 = $row['27'];
                $dia28 = $row['28'];
                $dia29 = $row['29'];
                $dia30 = $row['30'];
                $dia31 = $row['31'];
            }
        }
    }

}
?>

