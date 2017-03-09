<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <style>
        .separetorTopInput {
            margin-top: 25px;
        }
    </style>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logoprisma.png" style="margin-top: -10px;" width="10%" height="200%" alt=""/></a>

                </div>

                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
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
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Empleados</a>
                            </li>
                            <li>
                                <a href="addEmp.php"><i class="fa fa-bar-chart-o fa-fw"></i> Dar de alta empleado<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="#morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="#forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="#buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="#notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="#icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="#grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <br>
                <div class="row">
                    <?php
                    if ($_GET['succes'] == "ok") {
                        echo '<div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            Se dio de alta el empleado con éxito.
                                            </div>';
                    }
                    ?> 
                    <div class="col-lg-12">
                        <h1 class="page-header">Dar de alta a empleado</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <form role="form" action="executeSaveEmp.php" method="post" class="form-inline">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Datos generales
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label>Nombre: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nameEmp" placeholder="Enter name">
                                            </div>
                                            <label style="margin-left: 120px;">Apellido Paterno: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="patEmp" placeholder="Enter first name">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label>Apellido materno: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="matEmp" placeholder="Enter last name">
                                            </div>
                                            <label style="margin-left: 56px;">RFC: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="rfcEmp" placeholder="Enter RFC">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">

                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">

                                            <label>Fecha de nacimiento: </label>
                                            <div class="form-group">


                                                <input type="date" class="form-control" name="dateEmpNac" >

                                            </div>
                                            <label style="margin-left: 50px;">Lugar de nacimiento: </label>
                                            <div class="form-group">
                                                <select class="form-control" name="placeEmp">
                                                    <option>---</option>
                                                        <?php $valores->allState(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Datos de dirección del empleado
                                </div>

                                <div class="panel-body">

                                    <div class="row">

                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">

                                            <label>Calle /#: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter avenue">
                                            </div>

                                            <label>Colonia: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="colonyEmp" placeholder="Enter colony">
                                            </div>
                                            <label>Código Postal: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="postalEmp" placeholder="Enter code postal" SIZE=10 MAXLENGTH=5 >
                                            </div>    
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">

                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label>Estado: </label>
                                            <div class="form-group">


                                                <select class="form-control" name="state">
                                                    <option>Elije un estado de la republica</option>
                                                    <?php $valores->allState(); ?>
                                                </select>

                                            </div> 

                                            <label style="margin-left: 82px;">Municipio: </label>
                                            <div class="form-group">
                                                <select class="form-control" name="delegaEmp">
                                                    <option>Elije un municipio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label>Teléfono: </label>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="phoneOne" placeholder="Enter phone">
                                            </div>
                                            <label style="margin-left: 96px;">Teléfono 2: </label>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="phoneTwo" placeholder="Enter phone two">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
<!--                                    <div class="row separetorTopInput">
                                         /.col-lg-6 (nested) 
                                        <div class="col-lg-12">
                                            
                                        </div>
                                         /.col-lg-6 (nested) 
                                    </div>-->
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Datos civiles del empleado
                                </div>

                                <div class="panel-body">

                                    <div class="row">

                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">

                                            <label>Género: </label>
                                            <div class="form-group">


                                                <select class="form-control" name="$genderEmp">
                                                    <option>Elijir género</option>
                                                    <option>F</option>
                                                    <option>M</option>

                                                </select>

                                            </div>
                                            <label style="margin-left: 194px;">Estado civil: </label>
                                            <div class="form-group">


                                                <select class="form-control" name="civilEmp">
                                                    <option>Elije un estado civil</option>
                                                    <option>Soltero / a</option>
                                                    <option>Casado / a</option>
                                                    <option>Viudo / a</option>
                                                    <option>Divorciado / a</option>
                                                </select>

                                            </div>

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label>Escolaridad: </label>
                                            <div class="form-group">
                                                <select class="form-control" name="schoolEmp">
                                                    <option>Elijir tipo de escolaridad</option>
                                                    <option>Primaria</option>
                                                    <option>Secundaria</option>
                                                    <option>Preparatoria o bachillerato</option>
                                                    <option>Licenciatura</option>
                                                    <option>Posgrado</option>

                                                </select>
                                            </div>
                                            <label style="margin-left: 69px;">No. De hijos: </label>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="chilEmp" placeholder="Enter number child">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label>Referencia: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="referEmp" placeholder="Enter reference">
                                            </div>
                                            <label style="margin-left: 96px;">Seguro Social: </label>
                                            <div class="form-group">
                                                <select class="form-control" name="socialEmp">
                                                    <option>---</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                    <option>Pensionado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label >INFONAVIT </label>
                                            <div class="form-group">
                                            <select class="form-control" name="socialEmp">
                                                <option>---</option>
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                                </div>
                                            <label style="margin-left: 96px;">Cuenta bancaria: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="bankEmp" placeholder="Enter bank count" maxlength="10">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Datos laborales del empleado
                                </div>

                                <div class="panel-body">

                                    <div class="row">

                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <label >Servicio: </label>
                                            <div class="form-group">
                                                <select class="form-control" name="servEmp">
                                                    <option value="0">---</option>
                                                   <?php $valores->getServices(); ?> 
                                                </select>
                                            </div>
                                            
                                            <label style="margin-left: 96px;">Fecha de ingreso: </label>
                                            <div class="form-group ">
                                                <input type="date" class="form-control" name="dateIng">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
<!--                                    <div class="row separetorTopInput">
                                         /.col-lg-6 (nested) 
                                        <div class="col-lg-12">
                                        </div>
                                         /.col-lg-6 (nested) 
                                    </div>-->


                                    <!-- /.row (nested) -->

                                </div>

                                <!-- /.panel-body -->

                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-default" value="Guardar">
                    <hr>
                </form>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>

</html>
