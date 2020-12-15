

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
	$class=$_POST['class'];
	$from=$_POST['from'];
	
		//$_SESSION['from']=$from;
	$rs=$obj->promoteStudent($class,$from);
	$obj->promteClass($class);
}


if (isset($_POST['submit1'])) 
{	
	
	//$from=$_SESSION['from'];
	
	$status=$_POST['status'];  
	$st="";  
	$to=$_POST['to'];
	foreach($status as $st)  
	{  
		echo $st,$to;
		$obj->promoteByDivision($st,$to,$class);
		
	}
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

	<title>Promote Student</title>

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
													<option value="1st">1st Standerd</option>
													<option value="2nd">2nd Standerd</option>
													<option value="3rd">3rd Standerd</option>
													<option value="4th">4th Standerd</option>
													<option value="5th">5th Standerd</option>
													<option value="6th">6th Standerd</option>
													<option value="7th">7th Standerd</option>
													<option value="8th">8th Standerd</option>
													<option value="9th">9th Standerd</option>
													<option value="10th">10th Standerd</option>
													<option value="11th">11th Standerd</option>
													<option value="12th">12th Standerd</option>
													
												</select>
											</div>
											
										</div>
										<br><br>	
										<div class="form-group">
											<div class="col-lg-4">
												<label>Division<span id="" style="font-size:15px;color:red">*From</span></label>
												
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="from"  id="ph" >
													<option VALUE="">SELECT</option>
													<option VALUE="A">A</option>
													<option value="B">B</option>   
													<option value="C">C</option> 
													<option value="D">D</option>           
												</select>
											</div>
											
										</div>
										<br><br>						
										
										<div class="form-group">
											<div class="col-lg-4">
												<label>Division<span id="" style="font-size:15px;color:red">*From</span></label>
												
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="from"  id="ph" >
													<option VALUE="">SELECT</option>
													<option VALUE="A">A</option>
													<option value="B">B</option>   
													<option value="C">C</option> 
													<option value="D">D</option>           
												</select>
											</div>
											
										</div>
										<br><br>
									</div>	
									
									<br><br>		
									<?php 
									
									?>
									<div class="form-group">
										<div class="col-lg-4">										
										</div>
										<div class="col-lg-6"><br><br>
											<input type="submit" class="btn btn-primary" name="submit" value="Promote"></button>
										</div>
										
									</div>	

									
								</div>

							</div>
							
						</div>

						
						
						<?php 
						if (isset($rs)) 
							
							{?>

								<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												View Students
											</div>
											<!-- /.panel-heading -->
											<br><br>
											<div class="col-lg-12">
												<div class="form-group">
													
													<div class="col-lg-2">
														<label>Division<span id="" style="font-size:15px;color:red">*From</span></label>
														
													</div>
													<div class="col-lg-4">
														<select class="form-control" name="from"  id="ph" >
															<option VALUE="">SELECT</option>
															<option VALUE="A">A</option>
															<option value="B">B</option>   
															<option value="C">C</option> 
															<option value="D">D</option>           
														</select>
													</div>
													
													<div class="col-lg-2">
														<label>Division<span id="" style="font-size:15px;color:red">*To</span></label>
														
													</div>
													<div class="col-lg-4">
														<select class="form-control" name="to"  id="ph"required="required" >
															<option VALUE="">SELECT</option>
															<option VALUE="A">A</option>
															<option value="B">B</option>   
															<option value="C">C</option> 
															<option value="D">D</option>           
														</select>
													</div>
												</div>
												<br><br>
												<hr style="border : solid; color:	#e6e6e6 ">											
											</div>  
											
											
											

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
																
																<th>Photo</th>
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
																	
																	<td><?php echo htmlentities(strtoupper($res->studentfname));?>
																	<?php echo htmlentities(strtoupper($res->studentsurname));?></td>
																	<td><?php echo htmlentities(strtoupper($res->class));?></td>
																	
																	<td><?php echo htmlentities(strtoupper($res->division));?></td>
																	
																	<td><?php echo htmlentities(strtoupper($res->studentdob));?></td>
																	
																	<td><img src="images\<?php echo ($res->studentimage)?>" style = "height: 80px; width: 100px"></td>
																	<td><input type="checkbox" name="status[]" value="<?php echo $res->division?> "></td>        
																</tr>
																
																<?php $sn++;}}?>                               
																
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
											
										</div>
										
										<!--division Over-->

									</div>
									
								</div>
								
							</div>
							
						</div>

					</div>

				</div>


				
				<script src="../bower_components/jquery/dist/jquery.min.js"
				type="text/javascript"></script>

				
				<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
				type="text/javascript"></script>

				<!-- Metis Menu Plugin JavaScript -->
				<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
				type="text/javascript"></script>

				<!-- Custom Theme JavaScript -->
				<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>
				
				<script>
					function courseAvailability() {
						$("#loaderIcon").show();
						jQuery.ajax({
							url: "course_availability.php",
							data:'cshort='+$("#cshort").val(),
							type: "POST",
							success:function(data){
								$("#course-availability-status").html(data);
								$("#loaderIcon").hide();
							},
							error:function (){}
						});
					}

					function coursefullAvail() {
						$("#loaderIcon").show();
						jQuery.ajax({
							url: "course_availability.php",
							data:'cfull='+$("#cfull").val(),
							type: "POST",
							success:function(data){
								$("#course-status").html(data);
								$("#loaderIcon").hide();
							},
							error:function (){}
						});
					}



				</script>
			</form>
		</body>

		</html>
