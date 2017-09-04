<?php

class Supervisores {

    function all_supervisores() {
        include './conexion.php';
        $query = "SELECT id_sup, nomb_sup FROM supervisores where bina_act =1 order by nomb_sup";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['id_sup'] . '">' . $row['nomb_sup'] . '</option>';
        }
    }

    function all_servicios() {
        include './conexion.php';
        $query = "SELECT id_ser, nomb_ser FROM servicios where bina_act =1 order by nomb_ser";
        $result = mysqli_query($liga, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['id_ser'] . '">' . $row['nomb_ser'] . '</option>';
        }
    }

    function visita($id_sup, $id_ser, $tipo_vis, $come_vis) {
        include '../function.php';
        include './conexion.php';
        $valores = new Valores();
        $id_vis = $valores->max_id($liga, 'visitas', 'id_vis');
        $query_ = "insert visitas values (" . $id_vis . "," . $id_sup . "," . $id_ser . ",now(),'" . $tipo_vis . "','" . $come_vis . "')";
        if (!$result_ = mysqli_query($liga, $query_)) {
            echo '<script type="text/javascript">
           window.location = "supervision.php?succes=false"
      </script>';
        } else {
            echo '<script type="text/javascript">
           window.location = "supervision.php?succes=true"
      </script>';
        }
    }

    Function consulta_visitas_servicio($id_ser, $year) {
        include './conexion.php';
        for ($j = 1; $j <= 12; $j++) {
            if (strlen($j) == 1) {
                $j = '0' . $j;
            }
            $fecha_inicio = $year . '-' . $j . '-01 00:00:00';
            $fecha_fin = $year . '-' . $j . '-31 23:59:00';

            $query = "select count(*) as vis from visitas 
                    where id_ser = " . $id_ser . " and fecha_vis  between '" . $fecha_inicio . "' and '" . $fecha_fin . "' group by id_ser";

            $result = mysqli_query($liga, $query);

            if (!$row = mysqli_fetch_array($result)) {

                echo '<td>0</td>';
            } else {

                echo '<td>' . $row['vis'] . '</td>';
            }
        }
    }

    function visitas() {
        include './conexion.php';
        $query = "select id_ser,nomb_ser from servicios where bina_act = 1 order by nomb_ser";
        $year = 2017;
        $result = mysqli_query($liga, $query);

        while ($row = mysqli_fetch_array($result)) {

            echo '<tr>';

            echo '<td>' . $row['id_ser'] . '</td>';
            echo '<td>' . $row['nomb_ser'] . '</td>';

//            consulta_visitas_servicio($row['id_ser'], $year);
            $this->consulta_visitas_servicio($row['id_ser'], $year);


            echo '</tr>';
        }
    }

}
?>