<?php

$servidor = "localhost";
$usuario = "root";
$password = "password!1!";

if (!$liga = mysqli_connect($servidor, $usuario, $password)) {
    echo "No se encuentra el Servidor";
} else {

    if (!mysqli_select_db($liga, "goispcom_lpm")) {

        echo "No se encuentra la Base de datos";
    } else {

        //echo 'conectado';
    }
}
?>
