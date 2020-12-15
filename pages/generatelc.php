

<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
$obj=new DbFunction();

	//$res1->session;
$erno1 = $_GET['erno'];
$_SESSION['erno'] = $erno1;

if(isset($_POST['submit']))
{
	
	$erno1 = $_GET['erno'];
	//$_SESSION['erno'] = $erno1;
	$check = $obj->genLc($_POST['last_class'],$_POST['admi'],$_POST['sub1'],$_POST['sub2'],$_POST['sub3'],$_POST['sub4'],$_POST['sub5'],$_POST['exam'],$_POST['promotion'],$_POST['total_days'],$_POST['ncc'],$_POST['general_cunduct'],$_POST['apply_date'],$_POST['issue_date'],$_POST['fees_status'],$_POST['fees_cons'],$_POST['reason1'],$_POST['remark'],$erno1);

	if (isset($check)) {
		echo '<script language = "Javascript">';
		echo "location.href='lc.php'";
		echo "</script>";
	}

}

if(isset($_POST['generate']))
{

	$obj->generateLc();
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
	<title>LC</title>
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
	<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="../bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>

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
							<div class="panel-heading">Required Fields For LC</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">	
										<div class="form-group">
											<div class="col-lg-2">
												<label>Class in which pupil last studied<span id="" style="font-size:11px;color:red">*</span>	</label>
												
											</div>
											<div class="col-lg-4">
												<input class="form-control" type="text" name="last_class" required="required" maxlength="20">
											</div>
											<div class="col-lg-2">
												<label>Admission Number <span id="" style="font-size:11px;color:red">*</span></label>
												
											</div>
											<div class="col-lg-4">
												<input class="form-control" type="number" name="admi" required="required" maxlength="20">
											</div>
										</div>
										<br><br><br>
									</div>	
									<br><br>

									<div class="col-lg-12">						
										<div class="form-group">

											<div class="col-lg-2">
												<label>Subject Studied<span id="" style="font-size:11px;color:red">*</span></label>
											</div>
											<div class="col-lg-4">
												<input class="form-control" type="text" name="sub1" required="required" placeholder="Subject1" maxlength="20"><br>
												<input class="form-control" type="text" name="sub2" required="required" placeholder="Subject2" maxlength="20"><br>
												<input class="form-control" type="text" name="sub3" required="required" placeholder="Subject3" maxlength="20"><br>
												<input class="form-control" type="text" name="sub4" required="required" placeholder="Subject4" maxlength="20"><br>
												<input class="form-control" type="text" name="sub5" required="required" placeholder="Subject5" maxlength="20"><br>

											</div>
											<div class="col-lg-2">
												<label>School/Board Annual examination last taken<span id="" style="font-size:11px;color:red">*</span></label>
												
											</div>
											<div class="col-lg-4">
												<input class="form-control" type="text" name="exam" required="required" maxlength="20">
											</div>

										</div><br><br><br>
									</div>	
									
									<br><br>	
									<div class="col-lg-12">		
										<div class="form-group">
											<div class="col-lg-2">
												<label>Whether qualified for promotion to the higher Class           
													<span id="" style="font-size:11px;color:red">*</span>	</label>
													
												</div>

												<div class="col-lg-4">
													<select class="form-control" name="promotion" id="cshort"   required="required" >			
														<option VALUE="">SELECT</option>
														<option value="yes">Yes</option>
														<option value="no">No</option>
													</select>			
												</div>
												<div class="col-lg-2">
													<label>Total no. of working days present<span id="" style="font-size:11px;color:red">*</span></label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control" type="number" name="total_days" required="required" maxlength="20">
												</div>
												
											</div>
											<br><br><br>
										</div>	


										<br><br>


										
										<br><br>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="col-lg-2">
													<label>Whether NCC cadet/Boy Scout/girl Guid  
														(details may be given)<span id="" style="font-size:11px;color:red">*</span>	</label>
														
													</div>
													<div class="col-lg-4">
														<select class="form-control" name="ncc" id="cshort"   required="required" >			
															<option VALUE="">SELECT</option>
															<option value="yes1">Yes</option>
															<option value="no1">No</option>
														</select>			
													</div>
													<div class="col-lg-2">
														<label>General Conduct<span id="" style="font-size:11px;color:red">*</span></label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" type="text" name="general_cunduct" required="required" maxlength="20">
													</div>
												</div>
												<br><br><br>
											</div>	
											<br><br>	

											<div class="col-lg-12">
												<div class="form-group">
													<div class="col-lg-2">
														<label>Date of application for certificate</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" type="Date" name="apply_date" id="ocp">
													</div>
													<div class="col-lg-2">
														<label>Date of issue of certificate <span id="" style="font-size:11px;color:red">*</span></label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" type="Date" name="issue_date" id="ocp">
													</div>
												</div>
												<br><br><br>
											</div>
											<br><br>

											
											

											<div class="col-lg-12">
												<div class="form-group">
													

													<div class="col-lg-2">
														<label>Whether the student has paid all the dues to            :-
															the School<span id="" style="font-size:11px;color:red">*</span></label>
															
														</div>
														<div class="col-lg-4">
															<select class="form-control" name="fees_status" id="cshort"   required="required" >			
																<option VALUE="">SELECT</option>
																<option value="yes2">Yes</option>
																<option value="no2">No</option>
															</select>
														</div>
														<div class="col-lg-2">
															<label>Any fees concession availed of,if so the nature        :-
																of such concession<span id="" style="font-size:11px;color:red">*</span></label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="fees_cons" id="ocp">
															</div>
														</div>
														<br><br><br><br><br>
													</div>

													
													<br><br>

													

													<div class="col-lg-12">
														<div class="form-group">
															<div class="col-lg-2">
																<label>Reason For Leaving School<span id="" style="font-size:11px;color:red">*</span> </label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="reason1"  >
															</div>
															<div class="col-lg-2">
																<label>Any other Remark<span id="" style="font-size:11px;color:red">*</span> </label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="remark"  >
															</div>
															
														</div>
														<br><br><br>
													</div>
													<br><br>

													

												</div>







												
												
												<div class="form-group">
													<div class="col-lg-4">
													</div>
													<div class="col-lg-2"><br><br>
														<center>
															<input type="submit" class="btn btn-primary" name="submit" value="Generate">
														</center>
													</div>
												</div>	

												

											</div>
										</div><!--row!-->		
									</div>	
								</div>
							</div>
						</div>
					</form>

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



</body>

</html>

<!--

	function register($admissiontype,$busno,$busstop,$erno,$admissiondate,$class,$division,$studentsurname,$studentfname,$studentmname,$studentdob,$placeofbirth,
                  $studentadharno,$gender,$caste,$relogion,$nationality,$category,$studentaddress,$studenttelephoneno,$studentmobileno,$landmark,$emergency,$preschool,
				   $mediumofins,$serialno,$udiseno,$studentimage,$motherlang,$otherlang,$ifany,$aliments,$idmark,$bgroup,$fatherlname,$fatherfname,$fathermname,$fatherage,$fatheredu,$parentadd,$fathertel,$motherlname,$motherfname,$mothermname,$motherage,$motheredu,$motheroccupation,$familytype,$memberno,$siblingno,$siblingname1,$siblingage1,$siblingschool1,$siblingname2,$siblingage2,$siblingschool2,$place,$dt){
 			          
 			        $db = Database::getInstance();
		           	$mysqli = $db->getConnection();
		           	
		           //	echo $session;exit;
   $query = "INSERT INTO `studentregister` (`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
                     `studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`studentimage`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`) 
                   VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			        $reg=rand();
			        $stmt= $mysqli->prepare($query);
			        if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }
			
			    else{
			
			$stmt->bind_param('ssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',
		         	$admissiontype,$busno,$busstop,$erno,$admissiondate,$class,$division,$studentsurname,$studentfname,$studentmname,$studentdob,$placeofbirth,
                  $studentadharno,$gender,$caste,$relogion,$nationality,$category,$studentaddress,$studenttelephoneno,$studentmobileno,$landmark,$emergency,$preschool,
				   $mediumofins,$serialno,$udiseno,$studentimage,$motherlang,$otherlang,$ifany,$aliments,$idmark,$bgroup,$fatherlname,$fatherfname,$fathermname,$fatherage,$fatheredu,$parentadd,$fathertel,$motherlname,$motherfname,$mothermname,$motherage,$motheredu,$motheroccupation,$familytype,$memberno,$siblingno,$siblingname1,$siblingage1,$siblingschool1,$siblingname2,$siblingage2,$siblingschool2,$place,$dt);
			$stmt->execute();
		   	echo "<script>alert('Successfully Registered)</script>";
		 	//header('location:login.php');
				
		  }
				


       }

	-->