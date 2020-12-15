	<?php
session_start ();


if (! (isset ( $_SESSION ['login'] ))) {
  
  header ( 'location:../index.php' );
}

include('../config/DbFunction.php');
$obj=new DbFunction();
    $erno1=$_GET['erno'];
    
    $rs=$obj->bonafide($erno1);
    $obj->bonafide_history($erno1);
    $res=$rs->fetch_object(); 
	$date = date("Y-m-d");

  
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student_Bonafide</title>
	<style type="text/css">
		.pleave{
			height:1100px;
			width: 800px;
			background-color: #F4F6F6;
			border-style: solid;
			background-image: url("img1.jpg");
		}
		h2{
			font-family: paltino;
			font-size: 22px;
		}
	</style>
</head>
<body>
	<div class="pleave">
	<img src="logo.jpg" style="width: 100px; height: 120px; float: left; padding-left:15px; padding-top: 40px;" >
	<div class="sub" style="padding-right: 30px;">
	<h1 style="text-align: center; font-size: 18px;">Savitribai Phule Shikshan Prasarak Mandal's</h1>
	<h1 style="text-align: center; font-size: 40px;">Sinhgad Public School</h1>
	<h1 style="text-align: center; font-size: 27px;">(Affiliated to CBSE.Aff.No.1130295)</h1>
	<h1 style="text-align: center; font-size: 15px; padding-left:120px;">Pandharpur-Karad Road,Korti,Pandharpur,Dist.Solapur-413 304.</h1>
	</div>
	<hr>
	<h1 style="text-align: center; font-size: 25px;">Bonafide Certificate <br> & <br> Character Certificate</h1>
	<u><h1 style="text-align: center; font-size: 18px;">To Whomsover it may concern</h1>
	</u>
	<pre>
	<h2>
	This is certify that Mr/Ms:  <u><?php echo htmlentities(strtoupper($res->studentfname));?> <?php echo htmlentities( strtoupper($res->studentmname));?> <?php echo htmlentities(strtoupper($res->studentsurname));?> </u>
                                                
                                               

	is studying in standard <u><?php echo htmlentities(strtoupper($res->class));?></u>  Sinhgad Public School Korti,Pandharpur 

	from  <u><?php echo htmlentities(strtoupper($res->admissiondate));?> to <?php echo $date; ?></u>
		
	His/Her date of birth is <u><?php echo htmlentities(strtoupper($res->studentdob));?></u>
		
	His/Her place of birth  <u><?php echo htmlentities(strtoupper($res->placeofbirth));?></u>
					
		
		To the best of our knowledge he/she bears a good moral character.





																	
											(Principle)
										Sinhgad Public School
	</h2>
	</pre>
	</div>
</body>
</html>