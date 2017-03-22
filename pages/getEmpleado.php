<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

list ($idEmple,$nomEmple,$apPatEmple,$apMatEmple,$rfcEmple,$dateNacEmple,
        $placeBirEmple,$avEmple,$colonyEmple,$cpEmple,$delEmple,$stateEmple,$phoneEmple,$phoneTwoEmple,
        $genderEmple,$civilEmple,$schoEmple,$chilEmple,$referEmple,$socialEmple,$socSecuEmple,
        $turnEmple,$serviceEmple,$dateAdmEmple,$lockedEmple,$bankEmple)=$valores->getEmp($idEmp);
$nomCom = $nomEmple.' '.$apPatEmple.' '.$apMatEmple; 

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>    

<style>
#myBtn {
    width: 300px;
    font-size:20px;
    position: absolute;
    margin: 0 auto;
    right: 0;
    left: 0;
    bottom: 50px;
    z-index: 9999;
}
</style>
<style>
    .separetorTopInput {
        margin-top: 20px;
    }
</style>
<body>
 <form class="form-inline" action="updateEmp.php" method="post">
<div class="container">
  <h2>Modal Methods</h2>
  <p>The <strong>show</strong> method shows the modal and the <strong>hide</strong> method hides the modal.</p>
  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" >Editar al empleado:<p style="color: cadetblue;"> <?php echo $nomCom; ?></p></h4>
        </div>
        <div class="modal-body">
           
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
                                    
                                        <label>Nombre : </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nomEmple" value="<?php echo $nomEmple; ?>">
                                            
                                        </div>
                                        <label>Apellido Paterno: </label>
                                        <div class="form-group">
                                            
                                            <input type="text" name="idEmp" value="<?php echo $idEmp; ?>" hidden >
                                            <input type="text" class="form-control" name="apPatEmple" value="<?php echo $apPatEmple; ?>">
                                            
                                        </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                                <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12 ">
                                    
                                        <label>Apellido materno: </label>
                                        <div class="form-group ">
                                            <input type="text" class="form-control" name="apMatEmple" value="<?php echo $apMatEmple;  ?>">
                                            
                                        </div>
                                        <label>RFC: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="rfcEmple" value="<?php echo $rfcEmple; ?>">
                                            
                                        </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        <label>Fecha de nacimiento: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="dateNacEmple" value="<?php echo $dateNacEmple; ?>">
                                            
                                        </div>
                                        <label style="margin-left: 50px;">Lugar de nacimiento: </label>
                                        <div class="form-group">
                                            
                                            
                                            <select class="form-control" name="placeEmp" >
                                                <option><?php echo $placeBirEmple; ?></option>
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
                                    
                                        <label>Calle / #: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="avEmple" value="<?php echo $avEmple; ?>">
                                            
                                        </div>
                                        <label>Colonia: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="colonyEmple" value="<?php echo $colonyEmple; ?>">
                                            
                                        </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                                <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        <label>Código Postal: </label>
                                        <div class="form-group ">
                                            
                                            
                                            <input type="text" class="form-control" name="cpEmple" value="<?php echo $cpEmple; ?>">
                                            
                                        </div>
                                        <label>Delegación: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="delEmple" value="<?php echo $delEmple; ?>">
                                            
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
                                                <option><?php echo $stateEmple; ?></option>
                                                <?php $valores->allState(); ?>
                                            </select>
                                            
                                        </div>
                                        <label>Teléfono: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="phoneEmple" value="<?php echo $phoneEmple; ?>"> 
                                            
                                        </div>
                                        
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                             <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        
                                       
                                        <label>Teléfono 2: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="phoneTwoEmple" value="<?php echo $phoneTwoEmple; ?>">
                                            
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
                            Datos civiles del empleado
                        </div>
                        
                        <div class="panel-body">
                            
                            <div class="row">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        <label>Género: </label>
                                        <div class="form-group">
                                            
                                            
                                            <select class="form-control" name="$genderEmp">
                                                <option><?php echo $genderEmple; ?></option>
                                                <option>F</option>
                                                <option>M</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <label style="margin-left: 194px;">Estado civil: </label>
                                        <div class="form-group">
                                            
                                            
                                            <select class="form-control" name="civilEmp">
                                                <option><?php echo $civilEmple; ?></option>
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
                                                <option><?php echo $schoEmple ?></option>
                                                <option>Primaria</option>
                                                <option>Secundaria</option>
                                                <option>Preparatoria o bachillerato</option>
                                                <option>Licenciatura</option>
                                                <option>Posgrado</option>
                                                
                                            </select>
                                            
                                        </div>
                                        <label>No. De hijos: </label>
                                        <div class="form-group ">
                                            
                                            
                                            <input type="number" class="form-control" name="chilEmple" value="<?php echo $chilEmple; ?>">
                                            
                                        </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        <label>Referencia: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="referEmple" value="<?php echo $referEmple; ?>">
                                            
                                        </div>
                                        <label style="margin-left: 96px;">Cuenta con seguro social: </label>
                                        <div class="form-group">
                                            
                                            
                                            <select class="form-control" name="socialEmp">
                                                <option><?php echo $socialEmple; ?></option>
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                            
                                        </div>
                                        
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                             <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        
                                       
                                        <label>No. De seguro social: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="socSecuEmple" value="<?php echo $socSecuEmple; ?>">
                                            
                                        </div>
                                        <label>Cuenta bancaria: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="bankEmple" value="<?php echo $bankEmple; ?>">
                                            
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
                                    
                                        <label>Turno: </label>
                                        <div class="form-group">
                                            
                                            
                                            <select class="form-control" name="turnEmp">
                                                <option><?php echo $turnEmple; ?></option>
                                                <option>Matutino</option>
                                                <option>Vespertino</option>
                                                <option>Noturno</option>
                                            </select>
                                            
                                        </div>
                                        <label>Servicio: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="serviceEmple" value="<?php echo $serviceEmple; ?>">
                                            
                                        </div>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                                <div class="row separetorTopInput">
                                
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    
                                        <label>Fecha de ingreso: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="dateAdmEmple" value="<?php echo $dateAdmEmple; ?>">
                                            
                                        </div>
                                        <label>Bloqueado: </label>
                                        <div class="form-group">
                                            
                                            
                                            <input type="text" class="form-control" name="lockedEmple" value="<?php echo $lockedEmple; ?>">
                                            
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
            
        </div>
          <div class="modal-footer">
              <input type="submit" class="btn btn-default" value="Editar">      
              <a type="button" class="btn btn-default" href="index.php">Close</a>
      </div>
      </div>
      
    </div>
  </div>
</div>
    </form>
 
<script>
$(document).ready(function(){
    // Show the Modal on load
    $("#myModal").modal("show");
    
    // Hide the Modal
    $("#myBtn").click(function(){
        $("#myModal").modal("hide");
    });
});
</script>

</body>
</html>