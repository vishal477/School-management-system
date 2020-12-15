<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) 
{

  header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
$obj=new DbFunction();



if(isset($_POST['submit']))
{
  $class = $_POST['class'];
  
  $_SESSION['class']=$class;
  
  $rs=$obj->select_class($class);
  
}


if (isset($_POST['submit1']) && isset($_SESSION['class']) && $_POST['status']) 
{   

 
  
  
    $status=$_POST['status']; 
    $st="";
    foreach($status as $st)  
    {  

      if($class == 'FREEZ')
      {
        $erno = $st;

        $freez = $obj->promoteByClassFreez($erno,$class);
              //$obj->student_out_freez($erno);
        $obj->delete_Freez();

      }
      else
      {
        $promote = $obj->promoteByClass($st,$class);
      }

    }
  



}
else if(isset($_POST['submit1']) && isset($_SESSION['class']))
{
   $class = $_SESSION['class']; 
  if($class == 'FREEZ')
  {   
    $f = $obj->freez_student_out();
    if(isset($f))
    {
      $obj->update_freez();
      $obj->delete_Freez();
    }
  }
}


if (isset($promote)) 
{

  echo "<script>alert('Promotion Successfull')</script>";
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

  <title>Promote Class</title>

  <!-- Bootstrap Core CSS -->
  <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
  rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../bower_components/metisMenu/dist/metisMenu.min.css"
  rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <form method="post" >
    <div id="wrapper">

      <!-- Navigation -->
      <?php include('leftbar.php');?>

      <nav>
      <!--nav-->
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
              <div class="panel-heading">Select Class</div>
              <div class="panel-body">
                <div class="row">

                  <div class="col-lg-12">

                    <div class="form-group">
                      <div class="col-lg-4">
                        <label>Class<span id="" style="font-size:11px;color:red">*</span> </label>
                      </div>
                      <div class="col-lg-4">
                        <select class="form-control" name="class" id="cshort"  >      
                          <option VALUE="">SELECT</option>
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
                          <option value="FREEZ">XII</option>
                        </select>
                      </div>
                    </div>              
                  </div>
                  
                </div>
                
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <div class="col-lg-4"></div>                
                    <div class="col-lg-6"><br>
                      <input type="submit" class="btn btn-primary" name="submit" value="Select"></button>
                    </div> 
                  </div>     
                </div>


              </div>
              
            </div>
          </div>
        </div>
            


            

            <?php

            if (isset($rs)) 
            {

            ?>
              
                <div class="row-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">Change Class</div>
                    <div class="panel-body">

                      <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                            <tr>
                              <th>Sr.No</th>
                              <th>Gr.No</th>
                              <th>Full Name</th>
                              
                              
                              <th>Class</th>
                              <th>Division</th>
                              
                              <th>Phone NO</th>
                              
                             
                              <th>Select</th>

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
                              
                              <td><?php echo htmlentities(strtoupper($res->fullname));?>
                             </td>
                              <td><?php echo htmlentities(strtoupper($res->class));?></td>
                              
                              <td><?php echo htmlentities(strtoupper($res->division));?></td>
                              
                              <td><?php echo htmlentities(strtoupper($res->studentmobileno));?></td>
                              
                              
                              <td><input type="checkbox" name="status[]" id="status"  value="<?php echo $res->erno?> "></td>        
                            </tr>
                            
                            <?php $sn++;}?>                               
                            
                          </tbody>                    
                          
                        </table>

                        <div class="form-group">
                          <div class="form-group">
                            <div class="col-lg-3">
                              <input type="submit" class="btn btn-primary" name="submit1" value="Promote"></button>
                            </div>                  
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>

                    <?php
                    } 
                    ?>

                    <!-- /.panel-body -->
   

</div>
</nav>
</div>
</form>

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
