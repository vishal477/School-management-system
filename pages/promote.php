

<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {

    header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
$obj=new DbFunction();



if(isset($_POST['submit']))
{
	$class = $_POST['class'];
	$from = $_POST['from'];
	$_SESSION['class']=$class;
	$_SESSION['from']=$from;
	$rs=$obj->select_div($class,$from);
	
}


if (isset($_POST['submit1']) && isset($_SESSION['class']) && isset($_SESSION['from'])) 
{		
	$status=$_POST['status']; 
	$class = $_SESSION['class']; 
	$st="";  
	$to=$_POST['to'];
	$from = $_SESSION['from'];
	$fromto = $_SESSION['from'];
	foreach($status as $st)  
	{  
		
		$promote = $obj->promoteByDivision($st,$to,$from,$class);
		
	}


}
if (isset($promote)) 
{
	
	echo "<script>alert('Promotion Successfull')</script>";
}

if(isset($_POST["promoteall"]) && isset($_SESSION['class']) && isset($_SESSION['from']))
{
	$class = $_SESSION['class']; 
	$to=$_POST['to'];
	$from = $_SESSION['from'];
	$promoteall = $obj->promoteAllByDivision($class,$from,$to);
}
if (isset($promoteall)) 
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

	<title>Change Division</title>

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
							<div class="panel-heading">Promote Students</div>
							<div class="panel-body">
								<div class="row">

									<div class="col-lg-12">
										
										<div class="form-group">
											<div class="col-lg-4">
												<label>Class<span id="" style="font-size:11px;color:red">*</span>	</label>
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="class" id="cshort"  >			
													<option VALUE="">SELECT</option>
													<option value="Mini KG">Mini KG</option>
													<option value="JR.KG">JR.KG</option>
													<option value="SR.KG">Third Standard</option>
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
												</select>
											</div>
										</div>							
									</div>
									<br><br><br>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="col-lg-4">
												<label>Division<span id="" style="font-size:15px;color:red">*From</span></label>
												
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="from"  id="ph" >
													<option VALUE="">SELECT</option>
																<option value="A">A Division</option>
																<option value="B">B Division</option>
																<option value="C">C Division</option>
																<option value="D">D Division</option>
																<option value="E">E Division</option>
																<option value="F">F Division</option>
																<option value="G">G Division</option>
																<option value="H">H Division</option>           
												</select>
											</div>	
										</div>	
									</div>
								</div>
								
								<br>		
								
								<div class="form-group">
									<div class="col-lg-5"></div>								
									<div class="col-lg-2"><br>
										<input type="submit" class="btn btn-primary" name="submit" value="Select"></button>
									</div>
									
								</div>	

								
							</div>

						</div>
						
					</div></div>
					

					<?php

					if (isset($rs)) 
					{
						
						?>
						
							<div class="row-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">Change Division</div>
									<div class="panel-body">
										<div class="row">
											<div class="panel-body">
												<div class="col-lg-12">
													<div class="form-group">
														
														<div class="col-lg-1">
															<label>Division<span id="" style="font-size:15px;color:red">*To</span></label>
															
														</div>
														<div class="col-lg-2">
															<select class="form-control" name="to"  id="ph" >
																<option VALUE="">SELECT</option>
																<option VALUE="A">A</option>
																<option value="B">B</option>   
																<option value="C">C</option> 
																<option value="D">D</option>           
															</select>
														</div>

														<div class="form-group">
															
															<div class="col-lg-8">
																<input type="submit" class="btn btn-primary" name="submit1" value="Promote"></button>
															</div>									
														</div>

														<div class="form-group">
															
															<div class="col-lg-1">
																<input type="submit" class="btn btn-primary" name="promoteall" value="Promote All"></button>
															</div>

															
														</div>
														
													</div>	
												</div>

												<br><br>

												<hr style="border : solid;color: #f5f5f5;">
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
																	
																	<td><?php echo htmlentities(strtoupper($res->studentdob));?></td>
																	
																	
																	<td><input type="checkbox" name="status[]" id="status" value="<?php echo $res->erno?> "></td>        
																</tr>
																
																<?php $sn++;}?>                               
																
															</tbody>                    
															
														</table>

													</div>
													
													
													<!-- /.table-responsive -->
													
												</div>

												<?php
											} 
											?>
											<!-- /.panel-body -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- /.panel -->
				</div>
				<!-- /.col-lg-12 -->
			</div>
		
			
		</div>
		
	</div>
	
</div>

</div>

</div>



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
