<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
    
    header ( 'location:../index.php' );
} 
   
    include('../config/DbFunction.php');
    $obj=new DbFunction();
    $rs=$obj->showstudents();
   
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
                            Export data to EXCEL file
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="dataTable_wrapper">
                            


                                
                <form enctype="multipart/form-data" method="post" role="form">
                    
                    <div class="form-group">
                        <label for="exampleInputFile">Choose file : </label><br>
                        <input type="file" name="file" id="file" required>
                        </div>
                        <div>
                        <p class="help-block" style="color:red;">* Only Excel/CSV File will be Import.</p>
                        </div>
                    

                      <div class="form-group">
                      
                      <div class="row">
                      <div class="col-lg-6"><br>
                      <input style="margin-bottom: 30px;" type="submit" class="btn btn-primary" name="submit" value="Upload">
                      </div>
                      </div>
                      </div>


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
if(isset($_POST["submit"]))
{

    include 'config.php';
    
          if(!$conn)
          {
            die('Could not Connect My Sql:' .mysqli_error());
          }
          
          
            //$file=test_input($_POST['file']);    
              $file = $_FILES['file']['tmp_name'];
              
              //Extension check
              $mimes = array('application/vnd.ms-excel',"text/plain","text/xlsx","text/xls");
              if(in_array($_FILES['file']['type'],$mimes))
              {

                  error_reporting(0);
              
                  $handle = fopen($file, "r");
        
                  $c = 0; 
          while(($filesop = fgetcsv($handle, 1000000, ",")) !== false)
          {

                $admissiontype=$filesop[0];                
                $busno =$filesop[1];
                $busstop=$filesop[2];
                $erno=$filesop[3];
                $admissiondate=$filesop[4];
                $class=$filesop[5];
                $division=$filesop[6];
                $studentsurname=$filesop[7];
                $studentfname=$filesop[8];
                $studentmname=$filesop[9];
                $studentdob=$filesop[10];
                $placeofbirth=$filesop[11];
                $studentadharno=$filesop[12];
                $gender=$filesop[13];
                $caste=$filesop[14];
                $relogion=$filesop[15];
                $nationality=$filesop[16];
                $category=$filesop[17];
                $studentaddress=$filesop[18];
                $studenttelephoneno=$filesop[19];
                $studentmobileno=$filesop[20];
                $landmark=$filesop[21];
                $emergency=$filesop[22];
                $preschool =$filesop[23];
                $mediumofins=$filesop[24];
                $serialno=$filesop[25];
                $udiseno=$filesop[26];
                $studentimage=$filesop[27];
                $motherlang=$filesop[28];
                $otherlang=$filesop[29];
                $ifany=$filesop[30];
                $aliments=$filesop[31];
                $idmark=$filesop[32];
                $bgroup=$filesop[33];
                $fatherlname=$filesop[34];
                $fatherfname=$filesop[35];
                $fathermname=$filesop[36];
                $fatherage=$filesop[37];
                $fatheredu=$filesop[38];
                $parentadd=$filesop[39];
                $fathertel=$filesop[40];
                $motherlname=$filesop[41];
                $motherfname=$filesop[42];
                $mothermname=$filesop[43];
                $motherage=$filesop[44];
                $motheredu=$filesop[45];
                $motheroccupation=$filesop[46];
                $familytype=$filesop[47];
                $memberno=$filesop[48];
                $siblingno=$filesop[49];
                $siblingname1=$filesop[50];
                $siblingage1=$filesop[51];
                $siblingschool1=$filesop[52];
                $siblingname2=$filesop[53];
                $siblingage2=$filesop[54];
                $siblingschool2=$filesop[55];
                $place=$filesop[56];
                $dt=$filesop[57];

                
                $sql = "insert into  studentregister values ('$admissiontype','$busno',
                 '$busstop','$erno',
                 '$admissiondate','$class',
                  '$division','$studentsurname','$studentfname','$studentmname','$studentdob','$placeofbirth',
                        '$studentadharno','$gender','$caste','$relogion','$nationality','$category','$studentaddress',
                        '$studenttelephoneno','$studentmobileno','$landmark','$emergency','$preschool',
                         '$mediumofins','$serialno','$udiseno','$studentimage','$motherlang','$otherlang','$ifany','$aliments',
                         '$idmark','$bgroup','$fatherlname','$fatherfname','$fathermname','$fatherage','$fatheredu','$parentadd','$fathertel',
                         '$motherlname','$motherfname','$mothermname','$motherage',
                         '$motheredu','$motheroccupation','$familytype','$memberno','$siblingno','$siblingname1','$siblingage1',
                         '$siblingschool1','$siblingname2','$siblingage2','$siblingschool2','$place','$dt')";
                
                
              $result=$conn->query($sql);
              $c = $c + 1;
                //$query = mysqli_query($conn,$sql);
               //$stmt = mysqli_prepare($conn,$sql);
               //mysqli_stmt_execute($stmt);

              
          }
                     
              if($sql)
              {
                    
                     
                  echo "<script type='text/javascript'>
                    alert('File uploaded successfully......')
                  </script>";
              }
              else
              {       
                echo "<script type='text/javascript'>
                      alert('An error occured.....')
                      </script>";

              } 
              
              }
                 
              
              
              else
              {  
              echo "<script type='text/javascript'>
                     alert('Invalid File extension...')
                      </script>";
              }        

  }


?>


