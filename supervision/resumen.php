<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Supervision</title>
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../dist/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/timeline.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <?php
        include 'function.php';
        $supervisores = new Supervisores();
        $year = '2017';

        $supervisores->consulta_visitas_servicio($id_ser, $year);
        ?>
        <table border="1" class="table table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th>ID_SER</th><th>SERVICIO</th>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        echo '<th>' . $i . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $supervisores->visitas();
                ?>
            </tbody>
        </table>
    </body>
</html>
