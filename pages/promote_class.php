

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
	$obj->promteClass($class);		
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
									
									<br>		
									
									<div class="form-group">
										<div class="col-lg-4"></div>								
										<div class="col-lg-6"><br>
											<input type="submit" class="btn btn-primary" name="submit" value="Promote"></button>
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
