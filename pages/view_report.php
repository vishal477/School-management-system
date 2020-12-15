<?php
session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:../index.php' );
} 

include('../config/DbFunction.php');
$obj=new DbFunction();
$rs=$obj->showStudent();


if(isset($_GET['del']))
{
	
	$obj->del_subject(intval($_GET['del']));
	
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	
	<link rel="stylesheet" href="../styl.css">
</head>
<body>
	
	<?php include('leftbar.php');?>
	
	<h4 align="center">STUDENT'S REPORT</h4>

	<table class="tutorial-table" border="1px" width="80%">
		
		<tbody>
			<tr>
				<th >Name Of The Student :</th>
				<td colspan="5" height="3%"><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];  ?></td>
				<th colspan="1" rowspan="4" height="91" width="64"><?php echo "<img src='../images/$row[photoname].jpg'  style='width:100px;height:100px;'>";?></th>
			</tr>
			<tr>
				<th >Date of Birth:</th>
				<td colspan="3"><?php echo $row['dob'];  ?></td>
				<th >Blood Group:</th>
				<td colspan="3"><?php echo $row['bloodgroup'];  ?></td>
			</tr>
			
			<tr>
				<th >Class/Division:</th>
				<td colspan="3"><?php echo $row['class'];  ?></td>
				<th >Year of Admission:</th>
				<td colspan="3"><?php echo $row['AddYear'];  ?></td>
			</tr>
			
			<tr>
				<th>Religion:</th>
				<td colspan="1"><?php echo $row['religion'];  ?></td>
				<th>Cast:</th>
				<td colspan="1"><?php echo $row['cast'];  ?></td>
				<th>Categary:</th>
				<td colspan="1"><?php echo $row['categary'];  ?></td>
			</tr>
			<tr>
				<th>Brothers:</th>
				<td colspan="3"><?php echo $row['brothers'];  ?></td>
				<th>Sisters:</th>
				<td colspan="3"><?php echo $row['sisters'];  ?></td>
			</tr>
			<tr>
				<th>Entry Type:</th>
				<td colspan="3"><?php echo $row['entry'];  ?></td>
				<th>Percentage:</th>
				<td colspan="3"><?php echo $row['percentage'];  ?></td>
			</tr>
			<tr>
				<th>Contact No:</th>
				<td colspan="3"><?php echo $row['contact'];  ?></td>
				<th>Email:</th>
				<td colspan="3"><?php echo $row['email'];  ?></td>
			</tr>
			<tr>
				<th>Parents Name:</th>
				<td colspan="7"><?php echo $row['pName'];  ?></td>
			</tr>
			<tr>
				<th>Parents Occupation:</th>
				<td colspan="7"><?php echo $row['pOccupation'];  ?></td>
			</tr>
			<tr>
				<th>Permenent Address:</th>
				<td colspan="7"><?php echo $row['Addper'];  ?></td>
			</tr>
			<tr>
				<th>Temprory Address:</th>
				<td colspan="7"><?php echo $row['Addloc'];  ?></td>
			</tr>
			<tr>
				<th>Parent's Contact NO:</th>
				<td colspan="7"><?php echo $row['pContact'];  ?></td>
			</tr>
			<tr>
				<th>Medical Problems if any:</th>
				<td colspan="7"><?php echo $row['problems'];  ?></td>
			</tr>
			
		</tbody>
	</table>
	


	