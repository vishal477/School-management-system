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
    <title>View Students</title>
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
                            View Students
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Er.No</th>
                                            <th>Full Name</th>
                                            
                                            
                                            <th>Class</th>
                                            <th>Division</th>
                                            
                                            <th>Date Of Birth</th>
                                            <th>Action</th>
                                            <th>View</th>
                                            <td>photo</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $sn=1;
                                        while($res=$rs->fetch_object()){
                                           
                                           
                                          
                                           ?> 
                                           <tr class="odd gradeX">
                                              <td><?php echo $sn?></td>
                                              <td><?php echo htmlentities( strtoupper($res->erno));?></td>
                                              
                                              <td><?php echo htmlentities(strtoupper($res->studentfname));?>
                                              <?php echo htmlentities(strtoupper($res->studentsurname));?></td>
                                              <td><?php echo htmlentities(strtoupper($res->class));?></td>
                                              
                                              <td><?php echo htmlentities(strtoupper($res->division));?></td>
                                              
                                              <td><?php echo htmlentities(strtoupper($res->studentdob));?></td>
                                              
                                              <td>&nbsp;&nbsp;<a href="edit-student.php?erno=<?php echo htmlentities($res->erno);?>">
                                                  <p class="fa fa-edit"></p>edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  
                                                  <a href="view.php?del=<?php echo htmlentities($res->erno); ?>">
                                                      <p class="fa fa-times-circle"></p>delete

                                                      
                                                  </td>
                                                  <td><a href="report.php?erno=<?php echo htmlentities($res->erno); ?>">
                                                      <p class="fa fa-eye"></p>View</td>
                                                      <td><img src="images\<?php echo ($res->studentimage)?>" style = "height: 80px; width: 100px"></td>
                                                      
                                                  </tr>
                                                  
                                                  <?php $sn++;}?>                
                                              </tbody>
                                          </table>
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
