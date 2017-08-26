<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();

extract($_REQUEST);
$quincena1 = $quincena;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Limpieza Prisma</title>
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../dist/css/base.css" rel="stylesheet">
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Limpieza Prisma</a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse m-md-t-5">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-Buscar">
                                <!--                                <div class="input-group custom-Buscar-form">
                                                                    <input type="text" class="form-control" placeholder="Buscar...">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="button">
                                                                            <i class="fa fa-Buscar"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>-->
                            </li>
                            <li>
                                <a href="index.php"><i class="glyphicon glyphicon-user fa-fw"></i> Empleados</a>
                            </li>
                            <li>
                                <a href="addEmp.php"><i class="glyphicon glyphicon-upload fa-fw"></i> Dar de alta empleado</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-file fa-fw"></i>Registra Empleados<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.php">Ingresa Turnos</a>
                                    </li>
                                    <li>
                                        <a href="nomina.php">Nomina</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-wrench fa-fw"></i>Servicios<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="addService.php">Alta Servicios</a>
                                    </li>
                                    <li>
                                        <a href="#">Provedores</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--CONTENIDO-->
            <div id="page-wrapper">
                <div class="row">
                    <form action="nomina.php" method="get" class="form-inline">
                        <div class="col-md-12">
                            <div class="col-lg-12">
                                <h2 class="page-header ">Nomina</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1">
                                <label>Año</label>
                                <select class="form-control" required name="anno">
                                    <option value="">----</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label>Mes</label>
                                <select class="form-control" required name="mes">
                                    <option value="">---</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label>Quincena</label>
                                <select class="form-control" required name="quincena">
                                    <option value="">--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Servicio</label>

                                <select class="form-control" required name="id_serv">
                                    <option value="">----</option>
                                    <?php $valores->getServices(); ?>
                                </select>

                            </div>
                            <div class="col-md-offset-1 col-md-2">
                                <button type="submit" class="btn btn-primary m-md-t-2_5">Aceptar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-lg-12 m-md-t-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Generar Archivo
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div class="col-md-offset-10 col-md-2">
                                    </div>
                                    <form action="generaFile.php" method="post">
                                        <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTablesexample">
                                            <thead>
                                                <tr>
                                                    <?php if ($quincena == '1') { ?>

                                                        <th>Nombre</th><th>D1</th><th>D2</th><th>D3</th><th>D4</th><th>D5</th><th>D6</th><th>D7</th><th>D8</th><th>D9</th><th>D10</th><th>D11</th><th>D12</th><th>D13</th><th>D14</th><th>D15</th><th>Otros</th><th>Total</th>
                                                        <?php list($test) = $valores->nomina($anno, $mes, $quincena, $id_serv); ?>
                                                    <?php } ?>
                                                    <?php if ($quincena == '2') { ?>
                                                        <th>Nombre</th><th>D16</th><th>D17</th><th>D18</th><th>D19</th><th>D20</th><th>D21</th><th>D22</th><th>D23</th><th>D24</th><th>D25</th><th>D26</th><th>D27</th><th>D28</th><th>D29</th><th>D30</th><th>D31</th><th>Otros</th><th>Total</th>
                                                        <?php $valores->nomina($anno, $mes, $quincena, $id_serv); ?>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php // $valores->getEmpServ($id_serv, $quincena1, $mes, $anno, $i);  ?>
                                            </tbody>
                                        </table>
                                        <input type="submit" value="enviar">
                                    </form>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
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
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#message-si').fadeOut(4000);
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#message-no').fadeOut(4000);
        });
    </script>
    <script>

        var IDs = [];
        var Sue = [];
        var Sume = [];
        var SumeiD = [];
        $("#dataTablesexample").find("input[type=num]").each(function () {
            IDs.push(this.id);


        });

        $("#dataTablesexample").find(".sumsueldo").each(function () {
            Sume.push(this.value);
        });

        $("#dataTablesexample").find(".sumsueldo").each(function () {
            SumeiD.push(this.id);
        });


        $.each(IDs, function (i, val) {
            $("#" + IDs[i]).keyup(function () {
                var cant = parseFloat($("#" + IDs[i]).val());
                if (isNaN(cant)) {
                    cant = 0;
                }
                console.log(cant);
                if (cant.toString().indexOf('-') != -1) {
                    var total = -parseFloat(Sume[i]) - cant;
                    var total= -(total);
                } else {
                    var total = cant + parseFloat(Sume[i]);
                }
                
                $("#" + SumeiD[i] + "la").text("$" + total);

            });
        });








    </script>
</body>

</html>
