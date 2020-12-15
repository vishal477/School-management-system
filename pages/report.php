<?php
session_start ();
include('../config/DbFunction.php');
$obj=new DbFunction();
if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:../index.php' );
}

$erno1=$_GET['erno'];
$rs=$obj->show_report($erno1);

$res=$rs->fetch_object(); 



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
    <title>Report</title>
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
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover">
                                   <div style="font-size: 20px">
                                    <tbody>
                                     <img src="images\<?php echo ($res->erno)?>" style = "height: 100px; width: 100px; position: center; align-items: center;">

                                     <span  style="text-indent:50px; font-size: 30px; font-family: cursive;"  >
                                       <?php echo htmlentities(strtoupper($res->studentfname));?>
                                       <?php echo htmlentities( strtoupper($res->studentmname));?>
                                       <?php echo htmlentities(strtoupper($res->studentsurname));?>
                                   </span>
                               </div>
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
   <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
           
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover">
                       
                        <tbody>
                         <thead>
                            <tr class="odd gradeX">
                                
                                <th style="background:   #e6f2ff">Full Name</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->studentfname));?>
                                <?php echo htmlentities( strtoupper($res->studentmname));?>
                                <?php echo htmlentities(strtoupper($res->studentsurname));?></td>
                                <th style="background:   #e6f2ff">Gr.No</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->erno));?></td>
                            </tr>
                            <tr>
                                <th style="background:   #e6f2ff">Division</th>
                                <td colspan="3" ><?php echo htmlentities(strtoupper($res->division));?></td>
                                <th style="background:   #e6f2ff">Class</th>
                                <td colspan="3" ><?php echo htmlentities(strtoupper($res->class));?></td>
                                
                            </tr>

                            <tr>
                                <th style="background:   #e6f2ff">Addmission Type</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->admissiontype));?></td>
                                <th style="background:   #e6f2ff">Admission Date</th>

                                <td colspan="3"><?php echo htmlentities(strtoupper($res->admissiondate));?> </td>

                            </tr>


                            <tr>
                                
                                <th style="background:   #e6f2ff"> Date of Birth</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->studentdob));?></td>
                                <th style="background:   #e6f2ff">Place of Birth</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->placeofbirth));?></td>
                            </tr>
                            

                            <tr>
                                <th style="background:   #e6f2ff">Gender</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->gender));?></td>
                                <th style="background:   #e6f2ff">Address</th>

                                <td colspan="3"><?php echo htmlentities(strtoupper($res->studentaddress));?> </td>

                            </tr>

                            <tr>
                                <th style="background:   #e6f2ff">Religion</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->relogion));?></td>
                                <th style="background:   #e6f2ff">Caste</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->caste));?></td>
                            </tr>
                            <tr>
                                <th style="background:   #e6f2ff">Categary</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->category));?></td>
                                <th style="background:   #e6f2ff">Nationality</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->nationality));?></td>

                            </tr>

                            <tr>
                                <th style="background:   #e6f2ff">Mobile No</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->studentmobileno));?></td>
                                <th style="background:   #e6f2ff">Telephone</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->studenttelephoneno));?></td>
                            </tr>
                            <tr>
                                <th style="background:   #e6f2ff">Emergency Contact</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->emergency));?></td>
                                <th style="background:   #e6f2ff">Address Landmark</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->landmark));?></td>
                            </tr>

                            <tr>
                                <th style="background:   #e6f2ff">Previous Scholl Attend</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->Preschool));?></td>
                                <th style="background:   #e6f2ff">Mediam of Instruction</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->mediumofins));?></td>
                            </tr>
                            <tr>
                                <th style="background:   #e6f2ff">Serial NO</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->serialno));?></td>
                                <th style="background:   #e6f2ff">UDISE No.</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->udiseno));?></td>
                            </tr>

                            <tr>
                                <th style="background:   #e6f2ff">Mother Language</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->motherlang));?></td> 
                                <th style="background:   #e6f2ff">Other Languages Known</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->otherlang));?></td> 
                                
                            </tr>
                            <th style="background:   #e6f2ff">Aligeries</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->ifany  ));?></td>
                            <th style="background:   #e6f2ff">Aliments</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->aliments));?></td>

                            <tr>
                                <th style="background:   #e6f2ff">Identification Mark</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->idmark));?></td>
                                <th style="background:   #e6f2ff">Blood Group</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->bgroup));?></td>
                            </tr>

                            <tr>
                                <th style="background:   #e6f2ff">Father Full Name</th>
                                <td colspan="3"><?php echo htmlentities(strtoupper($res->fatherfname));?>
                                <?php echo htmlentities(strtoupper($res->fathermname));?>
                                <?php echo htmlentities(strtoupper($res->fatherlname));?>
                            </td>
                            <th style="background:   #e6f2ff">Father Age</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->fatherage));?></td>
                        </tr>
                        <tr>
                            <th style="background:   #e6f2ff">Father Education</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->fatheredu));?></td>
                            
                            
                            <th style="background:   #e6f2ff">Father Mobile</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->fathertel));?></td>
                        </tr>
                        <tr>
                            <th style="background:   #e6f2ff">Father Work Addrtess</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->parentadd));?></td>
                            
                            
                            <th style="background:   #e6f2ff">Mother Full Name</th>
                            <td colspan="3"><?php echo htmlentities(strtoupper($res->motherfname));?>
                            <?php echo htmlentities(strtoupper($res->mothermname));?>
                            <?php echo htmlentities(strtoupper($res->motherlname));?>
                        </td>
                    </tr>
                    <tr>
                        <th style="background:   #e6f2ff">Mother Age</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->motherage));?></td>
                        <th style="background:   #e6f2ff">Mother Education</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->motheredu));?></td>
                    </tr>
                    <tr>
                        <th style="background:   #e6f2ff">Mother Mobile</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->fathertel));?></td>
                        
                        <th style="background:   #e6f2ff">Family Type</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->familytype));?></td>
                    </tr>
                    <tr>
                        <th style="background:   #e6f2ff">No. of Family Members</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->memberno));?></td>
                        <th style="background:   #e6f2ff"> Family Occupation</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->motheroccupation));?></td>
                    </tr>

                    <tr>
                        <th style="background:   #e6f2ff">No of Siblings</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingno));?></td>
                        
                        
                        
                        <th style="background:   #e6f2ff">Sibling 1 Name</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingname1));?></td>
                    </tr>

                    <tr>
                        <th style="background:   #e6f2ff">Sibling 1 Age</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingage1));?></td>
                        <th style="background:   #e6f2ff"> Sibling 1 School</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingschool1));?></td>  
                    </tr>

                    <tr>
                        <th style="background:   #e6f2ff">Sibling 2 Name</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingname2));?></td>
                        <th style="background:   #e6f2ff">Sibling 2 Age</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingage2));?></td>
                    </tr>

                    <tr>
                        <th style="background:   #e6f2ff"> Sibling 2 School</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->siblingschool2));?></td> 
                        
                        
                        <th style="background:   #e6f2ff">Bus No.</th>
                        <td colspan="3"><?php echo htmlentities(strtoupper($res->busno));?></td>
                    </tr>
                    <tr>
                       <th style="background:   #e6f2ff">Bus Stop</th>
                       <td colspan="3"><?php echo htmlentities(strtoupper($res->busstop   ));?></td>
                       
                       <th style="background:   #e6f2ff">Place</th>
                       <td colspan="3"><?php echo htmlentities(strtoupper($res->place));?></td>
                   </tr>
                   <tr>
                    <th style="background:   #e6f2ff">Date</th>
                    <td colspan="3"><?php echo htmlentities(strtoupper($res->dt));?></td>
                    <th></th>
                    <td></td>
                </tr>
            </thead>
            

            
            
            
            
            
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

