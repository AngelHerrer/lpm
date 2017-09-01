<?php

$servidor = "localhost";
$usuario = "rootA";
$password = "password!1!";

if (!$liga = mysqli_connect($servidor, $usuario, $password)) {
    echo "No se encuentra el Servidor";
} else {

    if (!mysqli_select_db($liga, "goispcom_supervisor")) {

        echo "No se encuentra la Base de datos";
    } else {

        //echo 'conectado';
    }
}
?>
