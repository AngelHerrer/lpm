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

        <title>Limpieza Prisma</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#marca").change(function () {
                    $.ajax({
                        url: "getMuni.php",
                        type: "POST",
                        data: "idmarca=" + $("#marca").val(),
                        success: function (opciones) {
                            $("#modelo").html(opciones);
                        }
                    })
                });
            });
        </script>
        <script>
            function calculaRFC() {
                function quitaArticulos(palabra) {
                    return palabra.replace("DEL ", "").replace("LAS ", "").replace("DE ",
                            "").replace("LA ", "").replace("Y ", "").replace("A ", "");
                }
                function esVocal(letra) {
                    if (letra == 'A' || letra == 'E' || letra == 'I' || letra == 'O'
                            || letra == 'U' || letra == 'a' || letra == 'e' || letra == 'i'
                            || letra == 'o' || letra == 'u')
                        return true;
                    else
                        return false;
                }

                nombre = $("#NOMBRE_PERSONA").val().toUpperCase();

                apellidoPaterno = $("#APELLIDO_PATERNO").val().toUpperCase();

                apellidoMaterno = $("#APELLIDO_MATERNO").val().toUpperCase();

                fecha = $("#F_NACIMIENTO").val();

                var rfc = "";

                apellidoPaterno = quitaArticulos(apellidoPaterno);
                apellidoMaterno = quitaArticulos(apellidoMaterno);

                rfc += apellidoPaterno.substr(0, 1);

                var l = apellidoPaterno.length;
                var c;
                for (i = 0; i < l; i++) {
                    c = apellidoPaterno.charAt(i);
                    if (esVocal(c)) {
                        rfc += c;
                        break;
                    }
                }

                rfc += apellidoMaterno.substr(0, 1);

                rfc += nombre.substr(0, 1);

                rfc += fecha.substr(8, 10);

                rfc += fecha.substr(3, 5).substr(0, 2);

                rfc += fecha.substr(0, 2);

                // rfc += "-" + homclave;

                $("#RFC").val(rfc);

            }
        </script>

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
                    <a class="navbar-brand" href="index.php">Limpieza Prisma</a>
                </div>
                <!-- /.navbar-header -->

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
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

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
                                    <!--                                    <li>
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
                                                                        </li>-->
                                </ul>
                                <!-- /.nav-second-level -->
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
                                    <!--                                    <li>
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
                                                                        </li>-->
                                </ul>
                            </li>
                            <!--                            <li>
                                                            <a href="#tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="#forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                                                        </li>-->
                            <!--                            <li>
                                                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                                            <ul class="nav nav-second-level">
                                                                <li>
                                                                    <a href="#blank.html">Blank Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#login.html">Login Page</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                        </ul>
                    </div>
                </div>
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
                        <h2 class="page-header">Dar de alta a empleado</h2>
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
                                            <div class="col-lg-1">
                                                <label>Nombre: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" id="NOMBRE_PERSONA" class="form-control" name="nameEmp" onchange="calculaRFC();" required>
                                            </div>
                                            <div class="col-lg-1" >
                                                <label>Apellido Paterno: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="patEmp" id="APELLIDO_PATERNO" onchange="calculaRFC();" required>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Apellido materno: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="matEmp" id="APELLIDO_MATERNO" onchange="calculaRFC();" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-1" >  
                                                <label>RFC: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="rfcEmp" id="RFC" required>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Fecha de nacimiento: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="dateEmpNac" id="F_NACIMIENTO" onchange="calculaRFC();" required placeholder="dd-mm-aaaa">
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Lugar de nacimiento: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control" name="placeEmp" required>
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
                                            <div class="col-lg-1">    
                                                <label>Calle /#: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="avenEmp" required>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Colonia: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="colonyEmp" required>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Código Postal: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="postalEmp"  SIZE=10 MAXLENGTH=5 required>
                                            </div>

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">

                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">
                                                <label>Estado: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control" name="state" id="marca" required>
                                                    <option>----</option>
                                                    <?php $valores->allState(); ?>
                                                </select>

                                            </div>
                                            <div class="col-lg-1">
                                                <label>Municipio: </label>
                                            </div>
                                            <div class="form-group col-lg-3" id="result">
                                                <select class="form-control" name="delegaEmp" id="modelo" required>
                                                    <option>---</option>
                                                </select>
                                            </div>

                                            <!-- /.col-lg-6 (nested) -->
                                        </div>
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">
                                                <label>Teléfono: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="number" class="form-control" name="phoneOne" required>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Teléfono 2: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="number" class="form-control" name="phoneTwo" >
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
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
                                            <div class="col-lg-1">
                                                <label>Género: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control" name="genderEmp" required>
                                                    <option>---</option>
                                                    <option>F</option>
                                                    <option>M</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Estado civil: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control" name="civilEmp" required>
                                                    <option>----</option>
                                                    <option>Soltero / a</option>
                                                    <option>Casado / a</option>
                                                    <option>Viudo / a</option>
                                                    <option>Divorciado / a</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Escola ridad: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control" name="schoolEmp" required>
                                                    <option>---</option>
                                                    <option>Primaria</option>
                                                    <option>Secundaria</option>
                                                    <option>Preparatoria o bachillerato</option>
                                                    <option>Licenciatura</option>
                                                    <option>Posgrado</option>

                                                </select>
                                            </div>

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">
                                                <label>No. De hijos: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="number" class="form-control" name="chilEmp" required>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Referencia: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="text" class="form-control" name="referEmp" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">
                                                <label>Seguro Social: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control active-div-ss" name="socialEmp" required>
                                                    <option>---</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                    <option value="pen">Pensionado</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-1">
                                                <label >INFONAVIT </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control active-div-in" name="infonaEmp" required>
                                                    <option>---</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Cuenta bancaria: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control active-div-cb" name="cbEmp" required>
                                                    <option>---</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>

                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div hidden id="divSS">
                                                <div class="col-lg-1">    
                                                    <label>No. de Seguro Social: </label>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <input type="text" class="form-control" name="socialNum" required value="0"/>
                                                </div>
                                            </div>
                                            <div hidden id="divInf">
                                                <div class="col-lg-1">
                                                    <label>No. de INFONAVIT: </label>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <input type="text" class="form-control" name="infonaNum" required value="0"/>
                                                </div>
                                            </div>

                                            <div hidden id="divCban">
                                                <div class="col-lg-1">
                                                    <label >No. de cuenta bancaria: </label>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <input type="text" class="form-control" name="cbNum" required value="0"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Datos laborales del empleado
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="col-lg-1">
                                                <label >Servicio: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <select class="form-control" name="servEmp">
                                                    <option value="0">---</option>
                                                    <?php $valores->getServices(); ?> 
                                                </select>
                                            </div>
                                            <div class="col-lg-1">
                                                <label>Fecha de ingreso: </label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <input type="date" class="form-control" name="dateIng">
                                            </div>

                                            <div class="col-lg-1">
                                                <label>Contrato:</label>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                SI <input type="radio" value="yes"  name="contrato">
                                                NO <input type="radio" value="no"  name="contrato">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <input type="submit" class="btn btn-default" value="Guardar">
                    <hr>
                </form>
            </div>
        </div>
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $("#marca").change(function () {
                                                            $.ajax({
                                                                url: "getMuni.php",
                                                                type: "POST",
                                                                data: "idmarca=" + $("#marca").val(),
                                                                success: function (opciones) {
                                                                    $("#modelo").html(opciones);
                                                                }
                                                            })
                                                        });
                                                    });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".active-div-cb").change(function () {
                    var val = $('.active-div-cb').val();
                    console.log(val);
                    if (val === '1') {
                        $('#divCban').show();
                    } else {
                        $('#divCban').hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".active-div-in").change(function () {
                    var val = $('.active-div-in').val();
                    console.log(val);
                    if (val === '1') {
                        $('#divInf').show();
                    } else {
                        $('#divInf').hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".active-div-ss").change(function () {
                    var val = $('.active-div-ss').val();
                    console.log(val);
                    if (val === '1') {
                        $('#divSS').show();
                    } else {
                        $('#divSS').hide();
                    }
                });
            });
        </script>

    </body>

</html>

