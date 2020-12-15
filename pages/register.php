<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
}
include('../config/DbFunction.php');
$obj=new DbFunction();
	//$rs=$obj->showCourse();
	//$rs1=$obj->showCountry();
	//$ses=$obj->showSession();
	//$res1=$ses->fetch_object();
	//$res1->session;
$a;
if(isset($_POST['submit']))
{
	
	
	$Image=$_FILES['studentimage']['tmp_name'];
	$erno = $_POST['erno'];
	$nam = $_POST['erno'];

	$spp=$_POST['documents'];
	$sp1=implode(",",$spp);

	$l = $_POST['studentsurname'];
	$f = $_POST['studentfname'];
	$m = $_POST['studentmname'];

	$a = $f;
	$a .=" ".$m;
	$a .= " ".$l; 
	
	$c = $obj->register($_POST['admissiontype'],$_POST['busno'],$_POST['busstop'],$erno,
		$_POST['admissiondate'],$_POST['class'],
		$_POST['division'],$_POST['studentsurname'],$_POST['studentfname'],
		$_POST['studentmname'],$_POST['studentdob'],$_POST['placeofbirth'],
		$_POST['studentadharno'],$_POST['gender'],$_POST['caste'],$_POST['relogion'],
		$_POST['nationality'],$_POST['category'],$_POST['studentaddress'],
		$_POST['studenttelephoneno'],$_POST['studentmobileno'],$_POST['landmark'],
		$_POST['emergency'],$_POST['preschool'],$_POST['mediumofins'],
		$_POST['serialno'],$_POST['udiseno'],
		$_POST['motherlang'],$_POST['otherlang'],$_POST['ifany'],
		$_POST['aliments'],$_POST['idmark'],$_POST['bgroup'],$_POST['fatherlname'],
		$_POST['fatherfname'],$_POST['fathermname'],$_POST['fatherage'],
		$_POST['fatheredu'],$_POST['parentadd'],$_POST['fathertel'],
		$_POST['motherlname'],$_POST['motherfname'],$_POST['mothermname'],
		$_POST['motherage'],$_POST['motheredu'],$_POST['motheroccupation'],
		$_POST['familytype'],$_POST['memberno'],$_POST['siblingno'],
		$_POST['siblingname1'],$_POST['siblingage1'],$_POST['siblingschool1'],
		$_POST['siblingname2'],$_POST['siblingage2'],$_POST['siblingschool2'],
		$_POST['place'],$_POST['dt'],$sp1,$a);

	if(isset($c))
	{
		move_uploaded_file($Image,"images/$erno.jpg");
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
	<title>New Student Registration</title>
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
	<form method="post" enctype="multipart/form-data">
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
							<div class="panel-heading">Admission Details</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-10">
										<div class="form-group">
											<div class="col-lg-4">
												<label>Admission Type<span id="" style="font-size:11px;color:red">*</span>	</label>
											</div>
											<div class="col-lg-6">
												<select class="form-control" name="admissiontype" id="cshort"  required="required" >			
													<option VALUE="">SELECT</option>
													<option value="Regular">Regular</option>
													<option value="RTE-251">RTE-251</option>
												</select>
											</div>
											
										</div>	
										
										<br><br>
										
										
										<div class="form-group">
											
											<div class="form-group">
												<div class="col-lg-4">
													<label>GR.NO<span id="" style="font-size:11px;color:red">*</span></label>
												</div>
												<div class="col-lg-6">
													
													<input class="form-control" name="erno" type="text" required="">
												</div>	
												
												<br><br><br>
												<div class="form-group">
													<div class="col-lg-4">
														<label>Admission Date<span id="" style="font-size:11px;color:red">*</span></label>
													</div>
													<div class="col-lg-6">
														
														<input class="form-control" name=admissiondate type="Date" required="">
													</div>	
													
													<br><br><br>
													<div class="form-group">
														<div class="col-lg-4">
															<label>Class<span id="" style="font-size:11px;color:red">*</span>	</label>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="class" id="cshort"   required="required" >			
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
																<option value="12">XII</option>
															</select>
														</div>
														
													</div>	
													
													<br><br>
													
													<div class="form-group">
														<div class="col-lg-4">
															<label>Division<span id="" style="font-size:11px;color:red">*</span>	</label>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="division" id="cshort"  required="required" >			
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
													
													<br><br>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">General Informations</div>
									<div class="panel-body">
										<div class="row">
											<span style="text-indent: 30px; color: red"><label>Children's Name<br><br></label></span>	
											<div class="col-lg-12">
												
												<div class="form-group">
													<div class="col-lg-2">
														<label>Surname<span id="" style="font-size:11px;color:red">*</span>	</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="studentsurname" required="required" >
													</div>
													<div class="col-lg-2">
														<label>First Name<span id="" style="font-size:11px;color:red">*</span>	</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="studentfname" type="text" required="" id="ocp">
													</div>
												</div>	
												<br>

												
												<div class="form-group">
													<div class="col-lg-2">
														<label>Middle Name<span id="" style="font-size:11px;color:red">*</span>	</label>
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="studentmname" required="" pattern="[A-Za-z]+$">
													</div>
													
													<div class="form-group">
														<div class="col-lg-2">
															<label>Date of Birth<span id="" style="font-size:11px;color:red">*</span>	</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" name="studentdob" required="required" type="date">
														</div>
													</div><br><br><br>

													<div class="form-group">
														<div class="col-lg-2">
															<label>Place of Birth<span id="" style="font-size:11px;color:red">*</span>	</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" name="placeofbirth" pattern="[A-Za-z]+$">
														</div>
														<div class="col-lg-2">
															<label>Adhar Number</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="number" name="studentadharno"  id="ocp">
														</div>
													</div>	
													<br><br>
													
													
													
													<div class="col-lg-2">
														<label >Gender<span id="" style="font-size:11px;color:red">*</span></label>
														
													</div>
													
													<div class="col-lg-4">
														<select class="form-control" name="gender"  id="category" required="required" >
															<option VALUE="">SELECT</option>
															<option VALUE="Male">Male</option>
															<option value="Female">Female</option>
															<option value="OTHER">Other</option>
														</select>
													</div>
													
													<div class="col-lg-2">
														<label>Caste<span id="" style="font-size:11px;color:red">*</span></label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="caste" id="ocp">
													</div>
												</div>


												
												<br><br>		
												<div class="form-group">
													<div class="col-lg-2">
														<label>Relogion<span id="" style="font-size:11px;color:red">*</span>	</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="relogion" required="required" pattern="[A-Za-z]+$">
													</div>
													<div class="col-lg-2">
														<label>Nationality</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="nationality" id="ocp" >
													</div>
												</div>	
												<br><br>
												
												<div class="form-group">
													
													<div class="col-lg-2">
														<label>Category<span id="" style="font-size:11px;color:red">*</span></label>
														
													</div>
													<div class="col-lg-4">
														<select class="form-control" name="category"  id="category" required="required" >
															<option VALUE="">SELECT</option>
															<option VALUE="Open">Open</option>
															<option value="SC">SC</option>
															<option value="ST">ST</option>
															<option value="NT">NT</option>
															<option value="VJ">VJ</option>
															<option value="SBC">SBC</option>
															<option value="OBC">OBC</option>
															<option value="SEBC">SEBC</option>
															<option value="OTHER">Other</option>
														</select>
													</div>
													<div class="col-lg-2">
														<label>Permanent Address<span id="" style="font-size:11px;color:red">*</span></label>
														
													</div>
													<div class="col-lg-4">
														<textarea class="form-control" rows="3" name="studentaddress" required="required" id="padd"></textarea>
													</div>
												</div>	
												<br><br>	<br><br>
												
												<div class="form-group">
													<div class="col-lg-2">
														<label>Telephone No.	</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" name="studenttelephoneno" type="number" >
													</div>

													<div class="col-lg-2">
														<label>Mobile No.<span id="" style="font-size:11px;color:red">*</span>	</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" type="number" name="studentmobileno" required="required" id="ocp">
													</div>
												</div>	
												<br><br><br>
												
												
												

												<div class="form-group">
													
													
													<div class="col-lg-2">
														<label>Closest Landmark</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" rows="3" name="landmark" id="padd"></input>
													</div>
													


													
													
													<div class="col-lg-2">
														<label>Contact Person & Tel.No
															(In Case of Emergency)</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" name="emergency" id="padd"></input>
														</div>
													</div>	
													<br><br>	
													
													
													<br><br>
												</div>	
											</div>
											<div class="form-group">
												<div class="col-lg-2">
													<label>Previous School Attend<span id="" style="font-size:11px;color:red">*</span>	</label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control" type="text" name="preschool" required="required">
												</div>
												<div class="col-lg-2">
													<label>Medium of Instruction</label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control" name="mediumofins" id="ocp">
												</div>
											</div><br>
											
										<br>




										
										<div class="form-group">
											<div class="col-lg-2">
												<label style="text-indent: 15px;">Serial Number	</label>
												
											</div>
											<div class="col-lg-4">
												<input class="form-control" name="serialno"  >
											</div>
											<div class="col-lg-2">
												<label>UDISE No.</label>
												
											</div>
											<div class="col-lg-4">
												<input class="form-control" type="text" name="udiseno" >
											</div>
										</div>	<br>
										<br>
										<div class="form-group">
											<div class="col-lg-2">
												<label style="text-indent: 15px;">Student Image<span id="" style="font-size:11px;color:red">*</span>	</label>
												
											</div>
											<div class="col-lg-4">
												<input class="form-control" name="studentimage" type="file" required="required" >
											</div>
											<br><br>
											<br><br>



										</div>
									</div>
									</div>
								</div>

							</div>
						</div>
					</div>






					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">Personal Informations</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<div class="col-lg-2">
													<label>Mother Language</label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control"  name="motherlang"  >
												</div>
												<div class="col-lg-2">
													<label>Other Languages Known</label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control" name="otherlang" >
												</div>
											</div>	
											<br><br>
											
											<div class="form-group">
												<div class="col-lg-2">
													<label>Aligeries If Any</label>
												</div>
												<div class="col-lg-4">
													<input class="form-control" name="ifany" pattern="[A-Za-z]+$">
												</div>
												
												<div class="col-lg-2">
													<label>Aliments</label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control" name="aliments"  pattern="[A-Za-z]+$">
												</div>
												
											</div>	
											<br><br>		
											<div class="form-group">
												
												<div class="col-lg-2">
													<label>Identification Mark</label>
													
												</div>
												<div class="col-lg-4">
													<input class="form-control" name="idmark" id="ocp" >
												</div>

												<div class="col-lg-2">
													<label>Blood Group</label>
													
												</div>
												<div class="col-lg-4">
													<select class="form-control" name="bgroup"  id="ph"  >
														<option VALUE="">SELECT</option>
														<option VALUE="">A+</option>
														<option value="A-">A-</option>
														<option VALUE="B+">B+</option>
														<option VALUE="B-">B-</option>
														<option VALUE="AB+">AB+</option>
														<option VALUE="AB-">AB-</option>
														<option VALUE="O+">O+</option>
														<option VALUE="O-">O-</option>
														
													</select>
												</div>

											</div>	
											
											<div class="form-group">

											</div>	
											<br><br>
										</div>	
										<br><br>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<div class="panel panel-default">
										<div class="panel-heading">Family Background</div>
										<div class="panel-body">
											<span style="text-indent: 15px;color: red"><label>Father's Name</label></span>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<div class="col-lg-2">
															<label>Last Name<span id="" style="font-size:11px;color:red">*</span>	</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="text" name="fatherlname" required="required" maxlength="20">
														</div>
														<div class="col-lg-2">
															<label>First Name<span id="" style="font-size:11px;color:red">*</span></label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="text" name="fatherfname" required="required" maxlength="20">
														</div>
													</div>	
													<br><br>
													
													<div class="form-group">

														<div class="col-lg-2">
															<label>Middle Name<span id="" style="font-size:11px;color:red">*</span></label>
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="text" name="fathermname" required="required" maxlength="20">
														</div>
														<div class="col-lg-2">
															<label>Age</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="number" name="fatherage"  maxlength="20">
														</div>
														
													</div>	
													
													<br><br>		
													<div class="form-group">
														<div class="col-lg-2">
															<label>Educational Qualification	</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="text" name="fatheredu"  maxlength="20">
														</div>
														<div class="col-lg-2">
															<label>Address of Work Place</label>
															
														</div>
														<div class="col-lg-4">
															<textarea class="form-control" rows="3" name="parentadd" id="padd"></textarea>
														</div>
													</div>	
													<br><br>
													<br><br>	
													
													<div class="form-group">
														<div class="col-lg-2">
															<label>Tel. No.<span id="" style="font-size:11px;color:red">*</span>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="number" name="fathertel" required="required" maxlength="20">
															</div>
															
														</div>	
														<br><br>
														<span style="text-indent: 15px;color: red"><label>Mother's Name</label></span>
														<div class="form-group">
															<div class="col-lg-2">
																<label>Last Name<span id="" style="font-size:11px;color:red">*</span>	</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="motherlname" required="required" maxlength="20">
															</div>
															<div class="col-lg-2">
																<label>First Name<span id="" style="font-size:11px;color:red">*</span></label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="motherfname" required="required" maxlength="20">
															</div>
														</div>	

														<br><br>

														<div class="form-group">

															<div class="col-lg-2">
																<label>Middle Name<span id="" style="font-size:11px;color:red">*</span></label>
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="mothermname" required="required" maxlength="20">
															</div>
															<div class="col-lg-2">
																<label>Age</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="number" name="motherage"  maxlength="20">
															</div>
															
														</div>
														<br><br>
														<div class="form-group">
															<div class="col-lg-2">
																<label>Educational Qualification</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="motheredu"  maxlength="20">
															</div>
															<div class="col-lg-2">
																<label>Occupation</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="motheroccupation"  maxlength="20">
															</div>
														</div>	
														<br><br>	

														<div class="form-group">
															
															
															<div class="col-lg-2">
																<label>Family</label>
																
															</div>
															<div class="col-lg-4">
																<select class="form-control" name="familytype"  id="ph">
																	<option VALUE="">SELECT</option>
																	<option VALUE="Joint">Joint</option>
																	<option value="Nuclear">Nuclear</option>       
																</select>
															</div>

															

															<div class="col-lg-2">
																<label>No. of Members at Home</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="number" name="memberno" id="ocp">
															</div>
														</div>
														<br><br>

														<div class="form-group">
															

															<div class="col-lg-2">
																<label>No. of Siblings</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="number" name="siblingno" id="ocp">
															</div>
														</div>

														<br><br>

														<div class="form-group">
															<div class="col-lg-2">
																<label>Sibling 1 Full Name</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="siblingname1"  >
															</div>
															<div class="col-lg-2">
																<label>Age</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="number" name="siblingage1" >
															</div>
														</div>
														<br><br>

														<div class="form-group">
															<div class="col-lg-2">
																<label>Class and school in which studying(If Applicable)</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="siblingschool1" >
															</div>
															
														</div>
														<br><br><br><br>

														<div class="form-group">
															<div class="col-lg-2">
																<label>Sibling 2 Full Name</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="siblingname2"  >
															</div>
															<div class="col-lg-2">
																<label>Age</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="number" name="siblingage2" >
															</div>
															
														</div>
														<br><br><br>

														

														<div class="form-group">
															<div class="col-lg-2">
																<label>Class and school in which studying(If Applicable)</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="text" name="siblingschool2"  maxlength="20">
															</div>
															
														</div>
													</div>
												</div>
											
											</div>
										</div>



										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
													<div class="panel-heading">Bus Details</div>
													<div class="panel-body">
														

														<div class="row">
															<div class="col-lg-12">
																<div class="form-group">
																	


																<div class="form-group">
													<div class="col-lg-2">
														<label>Bus No.</label>
														
													</div>
													<div class="col-lg-4">
														<input class="form-control" type="text" name="busno">
													</div>
													
													
													
													<div class="form-group">
														<div class="col-lg-2">
															<label>Bus Stop</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="text" name="busstop" >
														</div>
														
													</div>
													<br><br>
													
													<div class="form-group">
														<div class="col-lg-2">
															<label>Place</label>
															
														</div>
														<div class="col-lg-4">
															<input class="form-control" type="text" name="place"  >
														</div>
														
														
														
														<div class="form-group">
															<div class="col-lg-2">
																<label>Date</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" type="date" name="dt" >
															</div>
															
														</div>
														<br><br>


													</div>
												</div>




																</div>	
															</div>	
														</div>
													</div>	
												</div>	
											</div>
										</div>


										<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default">
													<div class="panel-heading">Submitted Documents</div>
													<div class="panel-body">
														<h3>Select The Document Submitted By student</h3><br>

														<div class="row">
															<div class="col-lg-3">
																<div class="form-group">
																	


																	<input type="hidden" name="documents[]" value="">
																	<label class="container">Leaving Certificate
																		<input type="checkbox" name="documents[]" value="Leaving Certificate">
																		<span class="checkmark"></span>
																	</label>
																	<label class="container">Domacile Certificate
																		<input type="checkbox" name="documents[]" value="Domacile Certificate">
																		<span class="checkmark"></span>
																	</label>
																	<label class="container">Caste Certificate
																		<input type="checkbox" name="documents[]" value="Caste Certificate">
																		<span class="checkmark"></span>
																	</label>
																	<label class="container">Birth Certificate
																		<input type="checkbox" name="documents[]" value="Birth Certificate">
																		<span class="checkmark"></span>
																	</label>
																	<label class="container">Adhar Card
																		<input type="checkbox" name="documents[]" value="Adhar Card">
																		<span class="checkmark"></span>
																	</label>





																</div>	
															</div>	
														</div>
													</div>	
												</div>	
											</div>
										</div>
										
										
									</div></div>


									
									<div class="form-group">
										<div class="col-lg-4">
										</div>
										<div class="row">
											<div class="col-lg-6"><br><br>
												<input style="margin-bottom: 30px;" type="submit" class="btn btn-primary" name="submit" value="Register">
											</div>
										</div>
									</div>
									
									<hr>
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
								
								



</body>

</html>

