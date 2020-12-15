<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {

    header ( 'location:../index.php' );
} 

include('../config/DbFunction.php');
$obj=new DbFunction();
$rs=$obj->showstudents();


if(isset($_POST['submit']))
{
    $class = $_POST['class'];
    $division = $_POST['division'];

    $_SESSION['class']=$class;
    $_SESSION['division']=$division;
      
    echo "<script>window.location.href='export_out.php'</script>";
       
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Export Data</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>

<body>
    <form method="post" >

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include('leftbar.php');?>


        
        <nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                     <h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
                 </div>
                 <div class="row" >
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Select Students From Class and Division
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="dataTable_wrapper">
                                        <div class="row">
                                            <div class="col-lg-12">


                                                <div class="panel-body">

                                                    <div class="row">


                                                        <div class="col-lg-12">
                                                          <div class="form-group">

                                                            <div class="col-lg-4">
                                                                <label>Select Class<span id="" style="font-size:11px;color:red">*</span> </label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <select class="form-control" name="class"   >            
                                                                    <option VALUE="">SELECT CLASS</option>
                                                                    <option value="Mini KG">Mini KG</option>
                                                                    <option value="JR.KG">JR.KG</option>
                                                                    <option value="SR.KG">SR.KG</option>
                                                                    <option value="1">I</option>
                                                                    <option value="2">II</option>
                                                                    <option value="3">III</option>
                                                                    <option value="4">IV</option>
                                                                    <option value="5">V</option>
                                                                    <option value="6">VI</option>
                                                                    <option value="7">VII</option>
                                                                    <option value="8">VIII</option>
                                                                    <option value="9">IX</option>
                                                                    <option value="10">X</option>
                                                                    <option value="11">XI</option>
                                                                    <option value="12">XII</option>
                                                                </select><br><br></div>




                                                                <div class="col-lg-4">
                                                                    <label>Select Division<span id="" style="font-size:11px;color:red">*</span> </label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <select class="form-control" name="division"  >          
                                                                        <option VALUE="">SELECT</option>
                                                                <option value="A">A Division</option>
                                                                <option value="B">B Division</option>
                                                                <option value="C">C Division</option>
                                                                <option value="D">D Division</option>
                                                                <option value="E">E Division</option>
                                                                <option value="F">F Division</option>
                                                                <option value="G">G Division</option>
                                                                <option value="H">H Division</option>

                                                                    </select><br>
                                                                </div>
                                                                <div class="col-lg-4">

                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <input type="submit" class="btn btn-primary" name="submit" value="See Data">
                                                                </div>
                                                                <div class="col-lg-4">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.table-responsive -->

                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                    <!-- /.row -->

                                </div>
                                <!-- /#page-wrapper -->

                            </div>
                        </div>


                        

                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>

    <!-- /#page-wrapper -->
</nav>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</form>
</body>

</html>





