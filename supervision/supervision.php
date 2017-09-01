<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$supervisores = new Supervisores();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <script type="text/javascript">
            var bloc = document.getElementById("bloque");
            navigator.geolocation.getCurrentPosition(showPosition);
            function showPosition(position) {
                bloc.innerHTML = "Latitud: " + position.coords.latitude +
                        "<br>Longitud: " + position.coords.longitude;
            }
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Supervision</title>
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="../dist/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/timeline.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <?php
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) { //Verificar la ip compartida de internet
              echo  $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { //verificar si la ip fue provista por un proxy
              echo  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
              echo  $ip = $_SERVER['REMOTE_ADDR'];
            }
            ?>
            <div class="row">
                <?php
                if ($_GET['succes'] == "true") {
                    echo '<div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            Registro satisfactorio.
                                            </div>';
                } else if ($_GET['succes'] == "false") {
                    echo '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            Hubo un problema.
                                            </div>';
                }
                ?>
                <form action="acepta_visita.php" method="POST">
                    <div class="panel panel-primary"> <!-- panel-primary -->
                        <div class="panel-heading">
                            <h2 class="panel-title">SUPERVISION</h2>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <h4>Supervisor</h4>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <select class="form-control" name="id_sup">
                                    <?php $supervisores->all_supervisores(); ?>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <h4>Servicio</h4>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <select class="form-control" name="id_ser">
                                    <?php $supervisores->all_servicios(); ?>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <h4>Tipo de servicio</h4>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <select name="tipo_vis" class="form-control">
                                    <option value="SUPERVISION">SUPERVISION</option>
                                    <option value="MATERIALES">MATERIALES</option>
                                    <option value="DIR.OPERATIVA">DIR.OPERATIVA</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <h4>Comentarios</h4>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <textarea class="form-control" name="come_vis" rows="5" cols="20"></textarea>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <button type="submit" class="btn btn-primary col-md-12 col-xs-12 col-sm-12">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- DataTables JavaScript -->
        <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
        <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    </body>

</html>
