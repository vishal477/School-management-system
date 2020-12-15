<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
    
    header ( 'location:../index.php' );
} 

include('../config/DbFunction.php');
$obj=new DbFunction();
$rs=$obj->showstudents();


if(isset($_GET['del']))
{    
   
  $obj->del_std(intval($_GET['del']));
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

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include('leftbar.php');?>

        
        <nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                     <h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- /.row -->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Export data to EXCEL file
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                



                                <form action="" method="POST">
                                    <center>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="class"  required="required" >            
                                                <option VALUE="">SELECT</option>
                                                <option value="1st">First Standard</option>
                                                <option value="2nd">Second Standard</option>
                                                <option value="3rd">Third Standard</option>
                                                <option value="4th">Forth Standard</option>
                                                <option value="5th">Fifth Standard</option>
                                                <option value="6th">Sixth Standard</option>
                                                <option value="7th">Seventh Standard</option>
                                                <option value="8th">Eighth Standard</option>
                                                <option value="9th">Ninth Standard</option>
                                                <option value="10th">Tenth Standard</option>
                                                <option value="11th">Eleventh Standard</option>
                                                <option value="12th">Twelfth Standard</option>
                                            </select><br><br>

                                            


                                            <select class="form-control" name="division" required="required" >          
                                                <option VALUE="">SELECT</option>
                                                <option value="A">A Division</option>
                                                <option value="B">B Division</option>
                                                <option value="C">C Division</option>
                                                <option value="D">D Division</option>
                                                
                                            </select>
                                            <br><br>

                                            <center>
                                                <input type="submit" class="btn btn-primary" name="submit" value="Export Data">
                                            </center>
                                            
                                            

                                        </div>
                                    </center>                           
                                    
                                </form>





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

</body>

</html>




<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{


    $class=test_input($_POST['class']);
    $division=test_input($_POST['division']);


    include 'config.php';
    $sql="select * from studentregister where division='$division' and class='$class'";
    $result=$conn->query($sql);
    error_reporting(0);

    $_SESSION['class'] = $class;
    $_SESSION['division'] = $division;

    if($result->num_rows > 0)
    {



  // Set session variables
      echo "<script type='text/javascript'>
      location.href='getdata.php'
      </script>";
  }
  else
  {

     echo "<script type='text/javascript'>
     alert('Data Not found...')
     </script>";
     echo "<script type='text/javascript'>
     location.href='export.php'
     </script>";
     exit;
 }


 $conn->close();

}

function test_input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
?>

