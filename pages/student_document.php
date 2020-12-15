


<?php
session_start ();
include('../config/DbFunction.php');
$obj=new DbFunction();
if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}

$erno1=$_GET['erno'];

$rs=$obj->showStudents1($erno1);
$res=$rs->fetch_object(); 
$a=$res->documents;

$b=explode(",",$a);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>edit students</title>
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
	<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>
<style type="text/css">
	
	.container {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 15x;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	/* Hide the browser's default checkbox */
	.container input {
		position: absolute;
		opacity: 0.5;
		cursor: pointer;
		height: 0;
		width: 0;
	}

	/* Create a custom checkbox */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
	}

	/* On mouse-over, add a grey background color */
	.container:hover input ~ .checkmark {
		background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.container input:checked ~ .checkmark {
		background-color: #2196F3;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.container input:checked ~ .checkmark:after {
		display: block;
	}

	/* Style the checkmark/indicator */
	.container .checkmark:after {
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}


</style>


<body>

	<form method="post" >
		<div id="wrapper">
			<?php include('leftbar.php');?>


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
							<div class="panel-heading">Submitted Documents</div>
							<div class="panel-body">

								<label> Student Name: <?php echo $res->studentfname?><span> </span><?php echo $res->studentmname?><span> </span><?php echo $res->studentsurname?></label>
								<br>
								<label> Gr. No: <?php echo $res->erno?></label>
								<div class="row">

									<div class="col-lg-3">
										<div class="form-group">
											
											<br>


											<label class="container">Leaving Certificate
												<input type="checkbox" disabled="" name="documents[]" 
												value="Leaving Certificate" <?php 
												if(in_array("Leaving Certificate",$b))
												{
													echo "checked";
												}
												?> >
												<span class="checkmark"></span>
											</label>

											<label class="container">Domacile Certificate
												<input type="checkbox" disabled="" name="documents[]" <?php 
												if(in_array("Domacile Certificate",$b))
												{
													echo "checked";
												}
												?>
												value="Domacile Certificate" >
												<span class="checkmark"></span>
											</label>
											<label class="container">Caste Certificate
												<input type="checkbox" disabled="" name="documents[]" 
												<?php 
												if(in_array("Caste Certificate",$b))
												{
													echo "checked";
												}
												?> value="Caste Certificate">
												<span class="checkmark"></span>
											</label>
											<label class="container">Birth Certificate
												<input type="checkbox" disabled="" name="documents[]" <?php 
												if(in_array("Birth Certificate",$b))
												{
													echo "checked";
												}
												?>  value="Birth Certificate">
												<span class="checkmark"></span>
											</label>
											<label class="container">Adhar Card
												<input type="checkbox" disabled="" name="documents[]"  <?php 
												if(in_array("Adhar Card",$b))
												{
													echo "checked";
												}
												?> value="Adhar Card">
												<span class="checkmark"></span>
											</label>





										</div>	
									</div>	
								</div>
							</div>	
						</div>	
					</div>
				</div>
				
				

				
			</div>
		</div><!--row!-->		
	</div>	
</div>
</div>



<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"
type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"
type="text/javascript"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"
type="text/javascript"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js" type="text/javascript"></script>

<script>
	function showState(val) {
		
		$.ajax({
			type: "POST",
			url: "subject.php",
			data:'id='+val,
			success: function(data){
	  // alert(data);
	  $("#state").html(data);
	}
});
	}

	function showDist(val) {
		
		$.ajax({
			type: "POST",
			url: "subject.php",
			data:'did='+val,
			success: function(data){
	  // alert(data);
	  $("#dist").html(data);
	}
});
		
	}



	function showSub(val) {
		
    //alert(val);
    $.ajax({
    	type: "POST",
    	url: "subject.php",
    	data:'cid='+val,
    	success: function(data){
	  // alert(data);
	  $("#c-full").val(data);
	}
});
    
}
</script>
</form>
</body>

</html>
