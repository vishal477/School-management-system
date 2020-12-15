<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {

    header ( 'location:../index.php' );
} 

include('../config/DbFunction.php');
$obj=new DbFunction();
$p=$obj->show_class_count();
//$q=$obj->show_division_count();
$r=$obj->show_total_count();


    $d1=$obj->show_division_count_MiniKG();
    $d2=$obj->show_division_count_Jrkg();
    $d3=$obj->show_division_count_Srkg();
    
    $d4=$obj->show_division_count1();
    $d5=$obj->show_division_count2();
    $d6=$obj->show_division_count3();
    $d7=$obj->show_division_count4();
    $d8=$obj->show_division_count5();
    $d9=$obj->show_division_count6();
    $d10=$obj->show_division_count7();
    $d11=$obj->show_division_count8();
    $d12=$obj->show_division_count9();
    $d13=$obj->show_division_count10();
    $d14=$obj->show_division_count11();
    $d15=$obj->show_division_count12();
    

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
    <title>Statistics</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>
<style type="text/css">
    b{
        color: red;
        size: 20px;
    }
</style>

<body >

    <div id="wrapper" > 

        <!-- Navigation -->

        

        <?php include('leftbar.php');?>

        
        <nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                     <h4 class="page-header"><?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
                 </div>
                 <div class="col-lg-5">

                 </div>

                 <div class="col-lg-3">

                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- /.row -->
             <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Statistics Class
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
                                                    <div class="col-lg-6">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #c0eced; " >
                                                            <b><div class="panel-heading">Class</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                    <th>Class</th>
                                                                    
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($pp=$p->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    <td><?php echo htmlentities( strtoupper($pp->class));?></td>
                                                                    
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($pp->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        
                                                    </div>


                                                    

                                                    <div class="col-lg-2">
                                                        <table class="table table-striped table-bordered table-hover"style="background-color: #fceb6a; "  >
                                                            <b><div class="panel-heading">Total<?php  
                                                            
                                                            ?></div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Total</th>
                                                                    
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($rr=$r->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">

                                                                    <td><?php echo htmlentities( strtoupper($rr->count));?></td>
                                                                    
                                                                    
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
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



        
             <!-- /.row -->
             <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Statistics Class and Division
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

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b style="color: red"><div class="panel-heading">Mni KG</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d1->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table> 
                                                    </div>
                                                      



                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">JR.KG</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d2->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">SR.KG</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d3->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">I</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d4->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div></div></div><hr style="border : 2px solid; color:#e6ecff">


                                                <div class="col-lg-12">
                                                  <div class="form-group">

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">II</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d5->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">III</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d6->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">IV</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d7->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">V</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d8->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div></div></div><hr style="border : 2px solid; color:#e6ecff">


                                                    <div class="col-lg-12">
                                                  <div class="form-group">

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">VI</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d9->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">VII</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d10->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">VIII</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d11->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">IX</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d12->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div></div></div><hr style="border : 2px solid; color:#e6ecff">

                                                    <div class="col-lg-12">
                                                  <div class="form-group">

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">X</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d13->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">XI</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d14->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <table class="table table-striped table-bordered table-hover" style="background-color: #ebe1d8; " bgcolor="#d8eaeb" >
                                                            <b><div class="panel-heading">XII</div></b>
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr.No</th>
                                                                   
                                                                    <th>Division</th> 
                                                                    <th>Student Count</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php 
                                                                $sn=1;
                                                                while($qq=$d15->fetch_object()){



                                                                   ?> 
                                                                   <tr class="odd gradeX">
                                                                    <td><?php echo $sn?></td>
                                                                    
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->division));?></td>
                                                                    
                                                                    <td><?php echo htmlentities(strtoupper($qq->count));?></td>
                                                                    
                                                                </tr>
                                                                
                                                                <?php $sn++;}?>                
                                                            </tbody>
                                                        </table>
                                                    </div></div></div><hr style="border : 2px solid; color:#e6ecff">






                                                    

                                                    
                                                    

                                                   

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

</body>

</html>
