<?php
require('Database.php');
 //$obj=new DbFunction();
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class DbFunction{
	
	function login($loginid,$password){


		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
		$stmt= $mysqli->prepare($query);
		if(false===$stmt){

			trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
		}

		else{

			$stmt->bind_param('ss',$loginid,$password);
			$stmt->execute();
			$stmt -> bind_result($loginid,$password);
			$rs=$stmt->fetch();
			if(!$rs)
			{
				echo "<script>alert('Invalid Details')</script>";
				header('location:login.php');
			}
			else{

				header('location:state.php');
			}
		}



	}
	
	
	function getdata($class,$division)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 

		header("Content-type: application/octet-stream");  
		header("Content-Disposition: attachment; filename=$class.xls");  
		header("Pragma: no-cache");  
		header("Expires: 0");  
//mysqli_select_db($conn, 'schoolmanagement');

		$sql = "SELECT admissiontype, busno, busstop, erno, admissiondate, class, division, studentsurname, studentfname, studentmname, studentdob, placeofbirth, studentadharno, gender, caste, relogion, nationality, category, studentaddress, 
		studenttelephoneno, studentmobileno, landmark, emergency, Preschool, mediumofins, serialno, udiseno, motherlang, otherlang, ifany, aliments, idmark, bgroup, fatherlname, fatherfname, fathermname, fatherage,fatheredu, parentadd, 
		fathertel, motherlname, motherfname, mothermname, motherage, motheredu,motheroccupation, familytype, memberno, siblingno, siblingname1, siblingage1, siblingschool1, siblingname2, 
		siblingage2, siblingschool2, place, dt  FROM studentregister WHERE division='$division' and class='$class'";  

		$setRec = $mysqli->query($sql);
		if(false===$setRec)
		{
			trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
		}  

		$columnHeader = '';  

		$columnHeader = "Admission Type" . "\t" . "BUS Number" . "\t" . "Bus Stop" . "\t". "ER.NO" . "\t". "Admission Date" . "\t". "Class" . "\t". "Division" . "\t". "Surname" . "\t". "First Name" . "\t". "Middle Name" . "\t". "DOB" . "\t"
		. "Place of birth" . "\t". "Aadhar Number" . "\t". "Gender" . "\t". "Cast" . "\t". "Religion" . "\t". "Nationality" . "\t". "Category" . "\t". "Permanant Address" . "\t"
		. "Telephone Number" . "\t". "Mobile Number" . "\t". "Closest Landmark" . "\t". "Emergency Contact" . "\t". "Previous School" . "\t". "Medium Of Instruction" . "\t"
		. "Serial Number" . "\t". "UDISENO" . "\t". "Mother Language" . "\t". "Other Languages Known" . "\t". "Aligeries if any" . "\t". "Aliments" . "\t". "Identification Mark" . "\t"
		. "Blood Group" . "\t". "Fathers Last name" . "\t". "Fathers First name" . "\t". "Fathers Middle name" . "\t". "Fathers Age" . "\t". "Fathers Education" . "\t". "Fathers Address of work place" . "\t". "Telephone No." . "\t". "Mothers Last name" . "\t"
		. "Mothers First name" . "\t". "Mothers Middle name" . "\t". "Mothers Age" . "\t". "Mothers Education" . "\t". "Mothers Occupation" . "\t". "Family" . "\t"
		. "Members in family" . "\t". "No. Of siblings" . "\t". "Sibling 1 full name" . "\t". "Sibling 1 Age" . "\t". "Sibling 1 School Name". "\t". "Sibling 1 full name" . "\t". "Sibling 1 Age" . "\t". "Sibling 1 School Name"."\t". "Place" . "\t". "DOB". "\t";  

		$setData = '';  

		while ($rec = $setRec->fetch_object()) 
		{


			$rowData = '';  
			foreach ($rec as $value) {  
				$value = '"' . $value . '"' . "\t";  
				$rowData .= $value;  
			}  
			$setData .= trim($rowData) . "\n";  
		}


		echo ucwords($columnHeader) . "\n" . $setData . "\n";  


	}


	function promteClass($class)
	{

		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		if ($class == "12th") 
		{
			echo '<script>alert("Promotion not allowed")</script>';

		}
		else
		{
			$query1 = "SELECT * FROM studentregister WHERE class = '$class'";
			$stmt1= $mysqli->query($query1);
			if ($stmt1->num_rows > 0)
			{
				$classnew = 0;
				$classnew = $class+1;
				$query = "UPDATE studentregister SET class = $classnew WHERE class = ?";
				$stmt= $mysqli->prepare($query);
				$stmt->bind_param('s',$class);
				$stmt->execute();
				
				if(false===$stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script language = "Javascript">';
					echo 'alert("Promoted Successfully");
					location.href="promote_class.php"';
					echo "</script>";
				}
			}
			else
			{
				echo '<script>alert("Class not found")</script>';
			}

		}


		

	}

	function promoteByDivision($st,$to,$from,$class)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();

		$query = "UPDATE studentregister SET division  = ? WHERE division = ? AND class=? AND erno = ?";		        
		$stmt= $mysqli->prepare($query);
		$stmt->bind_param('ssss',$to,$from,$class,$st);
		$st =  $stmt->execute();

		if ($st <=0) 
		{
			echo "<script>alert('No Data Present')</script>";
		}
		else
		{
			if(false===$stmt)
			{

				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}
			
			else
			{

				return $st;
				echo "<script>window.location.href='promote.php'</script>";
			}
		}

	}


	function promoteByClassFreez($erno,$class)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();

		$query3 = "UPDATE studentregister SET class  = 12 WHERE class ='$class' AND erno = '$erno'";		        
		$stmt3=$mysqli->query($query3);
		if(false === $stmt3)
		{
			trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
		}
		else
		{
			echo "<script>alert('Promotion Successfull')</script>";
			echo "<script>window.location.href='promote_class_student.php'</script>";
		}

	}

	function promoteByClass($st,$class)
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		

		if($class == 'Mini KG')
		{
			$query = "UPDATE studentregister SET class  = 'Mini KG' WHERE  class=? AND erno = ?";		        
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('ss',$class,$st);
			$st =  $stmt->execute();
			return $st;
		}
		else if ($class == 'JR.KG') 
		{
			$query = "UPDATE studentregister SET class  = 'Mini KG' WHERE  class=? AND erno = ?";		        
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('ss',$class,$st);
			$st =  $stmt->execute();
			return $st;
		}
		else if ($class == 'SR.KG') 
		{
			$query = "UPDATE studentregister SET class  = 'JR.KG' WHERE  class=? AND erno = ?";		        
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('ss',$class,$st);
			$st =  $stmt->execute();
			return  $st;
		}
		else if ($class == '1') 
		{
			$query = "UPDATE studentregister SET class  = 'SR.KG' WHERE  class=? AND erno = ?";		        
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('ss',$class,$st);
			$st =  $stmt->execute();
			return  $st;
		}
		else
		{
			$classnew = 0;
			$classnew = $class - 1 ;
			$query = "UPDATE studentregister SET class  = '$classnew' WHERE  class=? AND erno = ?";		        
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('ss',$class,$st);
			$st =  $stmt->execute();

			if ($st <=0) 
			{
				echo "<script>alert('No Data Present')</script>";
			}
			else
			{
				if(false===$stmt)
				{
					
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

				}

				else
				{


					return $st;
					echo "<script>window.location.href='promote.php'</script>";
				}
			}
		}

	}

	
	function promoteAllWithAcadamic()
	{
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$m = 0;

		if(isset($_SESSION['details']) && $_SESSION['details']==true){}

			else
			{
				$query3 = "UPDATE studentregister SET class  = 'FREEZ' WHERE  class=12";		        
				$stmt3=$mysqli->query($query3);

				for ($i=11; $i >=1 ; $i--) 
				{
					
					$m = $i+1;
					
					$query4 = "UPDATE studentregister SET class  = '$m' WHERE  class='$i'";
					$stmt4=$mysqli->query($query4);

				}
				$query2 = "UPDATE studentregister SET class  = '1' WHERE  class='SR.KG'";		        
				$stmt2=$mysqli->query($query2);

				$query1 = "UPDATE studentregister SET class  = 'SR.KG' WHERE  class='JR.KG'";		        
				$stmt1=$mysqli->query($query1);

				$query = "UPDATE studentregister SET class  = 'JR.KG' WHERE  class='Mini KG'";		        
				$stmt=$mysqli->query($query);

				
				
				if(false===$stmt  || false===$stmt1 || false===$stmt2)
				{

					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

				}
				else
				{

				}
				$_SESSION['details']=true;
			}			


		}

		

		function promoteAllByDivision($class,$from,$to)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();

			$query = "UPDATE studentregister SET division  = ? WHERE division = ? AND class=? ";		        
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('sss',$to,$from,$class);
			$st =  $stmt->execute();

			if ($st <=0) 
			{
				echo "<script>alert('No Data Present')</script>";
			}
			else
			{
				if(false===$stmt)
				{

					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

				}

				else
				{


					echo "<script>alert('All Promoted Successfully')</script>";
					return $st;
					echo "<script>window.location.href='promote.php'</script>";
				}
			}

		}


		function select_div($class,$from)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="SELECT * FROM studentregister WHERE   class = '$class' AND division = '$from' ";

			$stmt=$mysqli->query($query);


			if(false===$stmt)
			{

				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{
				if($stmt->num_rows <= 0)
				{
					echo "<script>alert('Data not found')</script>";
				}
				else
				{
					return $stmt;
				}

			}
		}
		function select_class($class)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="SELECT * FROM studentregister WHERE   class = '$class' ";

			$stmt=$mysqli->query($query);


			if(false===$stmt)
			{

				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{
				if($stmt->num_rows <= 0)
				{
					echo "<script>alert('Data not found')</script>";
				}
				else
				{
					return $stmt;
				}

			}
		}




		function selectStudent($from,$class)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister  where division = '$from' AND class ='$class'";
			$stmt= $mysqli->query($query);
			return $stmt;
		}


		function seeExport($class,$division)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister  WHERE  class = '$class' AND division = '$division'";
			$stmt= $mysqli->query($query);
	//return $stmt;
			if($stmt->num_rows <= 0)
			{
				echo "<script>alert('Data not found')</script>";
				echo "<script>window.location.href='see_export.php'</script>";
			}
			else
			{
				return $stmt;
			}
		}

		function seeExport1($class1)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister  WHERE  class = '$class1' ";
			$stmt= $mysqli->query($query);
	//return $stmt;
			if($stmt->num_rows <= 0)
			{
				echo "<script>alert('Data not found')</script>";
				echo "<script>window.location.href='see_export1.php'</script>";
			}
			else
			{
				return $stmt;
			}
		}


		function showalumni(){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM student_out";
			$stmt= $mysqli->query($query);
			return $stmt;



		}


		function student_out($erno)

		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			

			$query = " INSERT INTO student_out(`fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`) 

										SELECT `fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt` FROM studentregister WHERE erno = '$erno'";


			$stmt = $mysqli->query($query);
			if ($stmt===FALSE)
			{
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}
			else
			{
				return $stmt;
			}
			
			
			
		}

		function freez_student_out()

		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
		
			
			$query = " INSERT INTO student_out(`fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`) 

										SELECT `fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt` FROM studentregister WHERE class = 'FREEZ'";


			
			$stmt = $mysqli->query($query);

			if ($stmt===FALSE)
			{
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}
			else
			{
				//echo "<script>alert('12th students are now alumni')</script>";
				return $stmt;
				echo "<script>window.location.href='promote_class_student'</script>";
			}

			
		}
		function update_freez()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "UPDATE `student_out` SET class = 12 WHERE class = 'FREEZ'";
			$stmt = $mysqli->query($query); 

			if ($stmt===FALSE)
			{
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}
		}


		function student_out1($class)

		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();

			$query = " INSERT INTO student_out (`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`studentimage`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`) SELECT `admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`studentimage`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt` FROM studentregister WHERE class = '$class'";


			$stmt = $mysqli->query($query);

			if ($stmt===FALSE)
			{
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}


		           //	echo $session;exit;
   		        //$stmt= $mysqli->prepare($query);
			//$stmt->execute();







		}




		function genLc($last_class,$admi,$sub1,$sub2,$sub3,$sub4,$sub5,$exam,$promotion,$total_days,$ncc,$general_cunduct,$apply_date,$issue_date,$fees_status,$fees_cons,$reason1,$remark,$erno1)
		{
			$db = Database::getInstance();
			$mysqli = $db->getConnection();

			$query = "INSERT INTO lc_record (last_class,admissionno,sub1,sub2,sub3,sub4,sub5,exam,promotion,total_days,ncc,general_cunduct,apply_date,issue_date,fees_status,fees_cons,reason1,remark,erno) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$reg=rand();
			$stmt= $mysqli->prepare($query);


			$stmt->bind_param('sssssssssssssssssss',$last_class,$admi,$sub1,$sub2,$sub3,$sub4,$sub5,$exam,$promotion,$total_days,$ncc,$general_cunduct,$apply_date,$issue_date,$fees_status,$fees_cons,$reason1,$remark,$erno1);

			$stmt->execute();

			if(false===$stmt)
			{

				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}
			else
			{
				echo '<script language = "Javascript">';
							//echo 'alert("Data saved successfully")';
				echo "</script>";
				return $stmt;
			}




		}
		function lc_history($erno)

		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();

	
			$query = " INSERT INTO lc_history(`fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`) 

										SELECT `fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt` FROM studentregister WHERE erno = '$erno'";


			$stmt = $mysqli->query($query);

			if ($stmt===FALSE)
			{
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}

					//echo "<script type='text/javascript'>
					    	//location.href='lc.php'
							//</script>";

		}


		function bonafide_history($erno)

		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();

			$query = " INSERT INTO bonafide_history(`fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`) 

										SELECT `fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt` FROM studentregister WHERE erno = '$erno'";


			$stmt = $mysqli->query($query);

			if ($stmt===FALSE)
			{
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

			}


		}
		function show_bonafide_history()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM bonafide_history ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}


		function show_lc_history()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM lc_history ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}	

		function generateLc($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM  WHERE erno ='$erno1'";
			$stmt= $mysqli->query($query);
			return $stmt;
			echo '<script language = "Javascript">';
			echo "location.href='lc.php'";
			echo "</script>";
		}


		function showStudent($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister WHERE erno ='$erno1'";
			$stmt= $mysqli->query($query);
			return $stmt;

		}

		function show_del_student($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM student_out WHERE erno ='$erno1'";
			$stmt= $mysqli->query($query);
			return $stmt;

		}
		function show_report($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister WHERE erno ='$erno1'";
			$stmt= $mysqli->query($query);
			return $stmt;

		}

		function showStudents()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister order by class desc ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}	

		function show_class_count()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT class,COUNT(*) as count from studentregister group by class having count(*) ORDER BY class ASC";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}	

		function show_division_count()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT class,division,COUNT(*) as count from studentregister group by class,division having count(*)ORDER BY class DESC , division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count_MiniKG()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = 'Mini KG' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}
		function show_division_count_Jrkg()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = 'JR.KG' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count_Srkg()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = 'SR.KG' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count1()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '1' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}


		function show_division_count2()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '2' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count3()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '3' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count4()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '4' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count5()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '5' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count6()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '6' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count7()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '7' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count8()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '8' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count9()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '9' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count10()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '10' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count11()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '11' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_division_count12()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT division,COUNT(*) AS count FROM studentregister WHERE class = '12' GROUP BY class,division HAVING count(*)ORDER BY class DESC , division ASC ";

			//$query = "SELECT cldivision,COUNT(*) as count from studentregister group by division having count(*) division ASC ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}

		function show_total_count()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT COUNT(*) as count from studentregister having count(*) ";
			$stmt= $mysqli->query($query);
			if ($stmt === false) {
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			else
			{	
				return $stmt;
			}
		}	

		function bonafide($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM studentregister WHERE erno = '$erno1' ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}


		function register($admissiontype,$busno,$busstop,$erno,$admissiondate,$class,$division,$studentsurname,$studentfname,$studentmname,$studentdob,$placeofbirth,
			$studentadharno,$gender,$caste,$relogion,$nationality,$category,$studentaddress,$studenttelephoneno,$studentmobileno,$landmark,$emergency,$preschool,
			$mediumofins,$serialno,$udiseno,$motherlang,$otherlang,$ifany,$aliments,$idmark,$bgroup,$fatherlname,$fatherfname,$fathermname,$fatherage,$fatheredu,$parentadd,$fathertel,$motherlname,$motherfname,$mothermname,$motherage,$motheredu,$motheroccupation,$familytype,$memberno,$siblingno,$siblingname1,$siblingage1,$siblingschool1,$siblingname2,$siblingage2,$siblingschool2,$place,$dt,$sp1,$a)

		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();

		           //	echo $session;exit;
			$query = "INSERT INTO `studentregister` (`fullname`,`admissiontype`, `busno`,`busstop`,`erno`, `admissiondate`, `class`, `division`, `studentsurname`, `studentfname`,
			`studentmname`, `studentdob`, `placeofbirth`,`studentadharno`,`gender`,`caste`,`relogion`,`nationality`,`category`,`studentaddress`,`studenttelephoneno`,`studentmobileno`,`landmark`,`emergency`,`preschool`,`mediumofins`,`serialno`,`udiseno`,`motherlang`,`otherlang`,`ifany`,`aliments`,`idmark`,`bgroup`,`fatherlname`,`fatherfname`,`fathermname`,`fatherage`,`fatheredu`,`parentadd`,`fathertel`,`motherlname`,`motherfname`,`mothermname`,`motherage`,`motheredu`,`motheroccupation`,`familytype`,`memberno`,`siblingno`,`siblingname1`,`siblingage1`,`siblingschool1`,`siblingname2`,`siblingage2`,`siblingschool2`,`place`,`dt`,`documents`) 
			VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		//$reg=rand();
			$stmt= $mysqli->prepare($query);

			$query1="SELECT * FROM studentregister WHERE erno='$erno' AND studentmobileno = '$studentmobileno'";
			$stmt1 = $mysqli->query($query1);

			if(mysqli_num_rows($stmt1) > 0)
			{
				echo "<script>alert('Duplicate Registration')</script>";	
			}


			else
			{

				$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',$a,
					$admissiontype,$busno,$busstop,$erno,$admissiondate,$class,$division,$studentsurname,$studentfname,$studentmname,$studentdob,$placeofbirth,
					$studentadharno,$gender,$caste,$relogion,$nationality,$category,$studentaddress,$studenttelephoneno,$studentmobileno,$landmark,$emergency,$preschool,
					$mediumofins,$serialno,$udiseno,$motherlang,$otherlang,$ifany,$aliments,$idmark,$bgroup,$fatherlname,$fatherfname,$fathermname,$fatherage,$fatheredu,$parentadd,$fathertel,$motherlname,$motherfname,$mothermname,$motherage,$motheredu,$motheroccupation,$familytype,$memberno,$siblingno,$siblingname1,$siblingage1,$siblingschool1,$siblingname2,$siblingage2,$siblingschool2,$place,$dt,$sp1);
				$stmt->execute();

				$query2 = "INSERT INTO admission_history(erno,fullname,class,dob) VALUES ('$erno','$a','$class','$studentdob')";
				$stmt2 = $mysqli->query($query2);
			


				if(false === $stmt)
				{
					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
				}
				else
				{
					echo '<script>alert("Registration Successfull.Thank you")</script>'; 
					return $stmt;
				}

				


			}
			


		}


		function edit_student($admissiontype,$erno,$admissiondate,$class,$division,$studentsurname,$studentfname,$studentmname,$studentdob,$placeofbirth,$studentadharno,$gender,$caste,$relogion,$nationality,$category,$studentaddress,$studenttelephoneno,$studentmobileno,$landmark,$emergency,$preschool,$mediumofins,$serialno,$udiseno,$motherlang,$otherlang,$ifany,$aliments,$idmark,$bgroup,$fatherlname,$fatherfname,$fathermname,$fatherage,$fatheredu,$parentadd,$fathertel,$motherlname,$motherfname,$mothermname,$motherage,$motheredu,$motheroccupation,$familytype,$memberno,$siblingno,$siblingname1,$siblingage1,$siblingschool1,$siblingname2,$siblingage2,$siblingschool2,$busno,$busstop,$place,$dt,$sp2,$erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();


			$query ="UPDATE studentregister SET admissiontype=?,erno=?,admissiondate=?,class=?,division=?,studentsurname=?,studentfname=?,studentmname=?,studentdob=?,placeofbirth=?,studentadharno=?,gender=?,caste=?,relogion=?,nationality=?,category=?,studentaddress=?,studenttelephoneno=?,studentmobileno=?,landmark=?,emergency=?,preschool=?,mediumofins=?,serialno=?,udiseno=?,motherlang=?,otherlang=?,ifany=?,aliments=?,idmark=?,bgroup=?,fatherlname=?,fatherfname=?,fathermname=?,fatherage=?,fatheredu=?,parentadd=?,fathertel=?,motherlname=?,motherfname=?,mothermname=?,motherage=?,motheredu=?,motheroccupation=?,familytype=?,memberno=?,siblingno=?,siblingname1=?,siblingage1=?,siblingschool1=?,siblingname2=?,siblingage2=?,siblingschool2=?,busno=?,busstop=?,place=?,dt=?,documents=? WHERE erno=?";
			$stmt= $mysqli->prepare($query);
			

				$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssssssssssssss',$admissiontype,$erno,$admissiondate,$class,$division,$studentsurname,$studentfname,$studentmname,$studentdob,$placeofbirth,$studentadharno,$gender,$caste,$relogion,$nationality,$category,$studentaddress,$studenttelephoneno,$studentmobileno,$landmark,$emergency,$preschool,$mediumofins,$serialno,$udiseno,$motherlang,$otherlang,$ifany,$aliments,$idmark,$bgroup,$fatherlname,$fatherfname,$fathermname,$fatherage,$fatheredu,$parentadd,$fathertel,$motherlname,$motherfname,$mothermname,$motherage,$motheredu,$motheroccupation,$familytype,$memberno,$siblingno,$siblingname1,$siblingage1,$siblingschool1,$siblingname2,$siblingage2,$siblingschool2,$busno,$busstop,$place,$dt,$sp2,$erno1);
				$stmt->execute();
				if(false===$stmt)
				{

					trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);

				}
				else
				{
					echo "<script type='text/javascript'>
					alert('Student Updated Successfully')
					</script>";
					echo "<script type='text/javascript'>
					location.href='view-student.php'
					</script>";
				}
			


		}


		function showStudents1($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `studentregister`  where erno='$erno1' ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}

		function admission_history()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `admission_history`";
			$stmt= $mysqli->query($query);
			return $stmt;

		}	


		function admission_history_lc($erno1)
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `admission_history` WHERE erno = '$erno1'";
			$stmt= $mysqli->query($query);
			return $stmt;

		}

		function show_Students()
		{

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `studentregister`

			HAVING count(class)>1";


			$stmt= $mysqli->query($query);
			return $stmt;

		}	

		function leave_Certificate($erno1){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `studentregister`  where erno='$erno1' ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}	


		function leave_Certificate1($erno1){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `lc_record`  where erno='$erno1' ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}	

		function updateStudent($erno1){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "SELECT * FROM `studentregister`  where erno='$erno1' ";
			$stmt= $mysqli->query($query);
			return $stmt;

		}	


		function del_course($id){

   //  echo $id;exit;
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="delete from tbl_course where cid=?";
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('s',$id);
			$stmt->execute();
			echo "<script>alert('Course has been deleted')</script>";
			echo "<script>window.location.href='view-course.php'</script>";
		}
		function del_std($erno1){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="delete from studentregister where erno=?";
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('i',$erno1);
			$stmt->execute();
			echo "<script>alert('One record has been deleted')</script>";
			echo "<script>window.location.href='student_out	.php'</script>";

		}
		function delete_last_year($class){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="DELETE FROM studentregister WHERE class=?";
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('s',$class);
			$stmt->execute();

			echo "<script>window.location.href='promote_class_student.php'</script>";

		}

		function delete_Freez(){

			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="DELETE FROM studentregister WHERE class='FREEZ'";
			$stmt= $mysqli->query($query);
			echo "<script>alert('12th students are now alumni')</script>";
			//echo "<script>window.location.href='promote_class_student.php'</script>";

		}

		function del_subject($id){

     //echo $id;exit;
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query="delete from subject where subid=?";
			$stmt= $mysqli->prepare($query);
			$stmt->bind_param('i',$id);
			$stmt->execute();
			echo "<script>alert('Subject has been deleted')</script>";
   // echo "<script>window.location.href='view-course.php'</script>";
		}

	}
	$obj=new DbFunction();

	?>



