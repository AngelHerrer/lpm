<?php
error_reporting(E_ALL ^ E_NOTICE);
extract($_REQUEST);
include 'function.php';
$supervisores = new Supervisores();

$supervisores->visita($id_sup, $id_ser, $tipo_vis, $come_vis);
?>