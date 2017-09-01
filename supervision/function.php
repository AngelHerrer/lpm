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

}
?>