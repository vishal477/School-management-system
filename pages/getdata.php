<?php  
session_start ();
if (! (isset ( $_SESSION ['login'] ))) 
{

  header ( 'location:../index.php' );
}
error_reporting(0);
$class=$_SESSION['class'];
$division=$_SESSION['division'];
include 'config.php'; 
$output = '';


 $query = "SELECT * FROM studentregister WHERE division='$division' AND class='$class'";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
    <tr>  
     

<th>Student Full Name</th> <th>Class</th> <th>Division</th> <th>Admission Date</th> <th>Student DOB</th> <th>Nationality</th> <th>Gender</th> <th>Category</th> <th>Subcaste</th> 
     <th>Relegion</th> <th>Caste</th> <th>Student Address</th> <th>Student Mobile No.</th> <th>Student Telephone no.</th> <th>GR NO.</th> <th>Mother First Name</th> <th>Mother Middle Name</th>
      <th>Mother Last Name</th> 
     <th>Mother Age</th> <th>Mother Education</th> <th>Mother Occupation</th> <th>Mother Language</th> <th>Student Aadhar No.</th> <th>Bus No.</th>
      <th>Bus Stop</th> <th>Admission Type</th> <th>Student Palce of birth</th> 
     <th>Closest Landmark</th> <th>Emergency</th> <th>Previous-Scholl</th> <th>Medium of Instructions</th> <th>Serial No.</th> <th>UDISE NO.</th> 
     <th>Other Languages Known</th> <th>Alergies if any</th> <th>Aliments</th> 
     <th>Identification Mark</th> <th>Blood Group</th> <th>Father First name</th> <th>Father Middle name</th>
      <th>Father last name</th>
       <th>Father Age</th>
        <th>Father Education</th>
         <th>Parent address</th>
          <th>Father Telephone NO.</th> 
     <th>Family Type</th> 
     <th>Members in family</th> 
     <th>Number of Siblings</th> 
     <th>Sibling 1 Name</th> 
     <th>Sibling 1 Age</th> 
     <th>Sibling 1 School Name</th> 
     <th>Sibling 2 Name</th> 
     <th>Sibling 2 Age</th> 
     <th>Sibling 2 School Name</th> 
     
     <th>Place</th> <th>Date </th> <th>Documents</th> 
     
    



    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["fullname"].'</td>  
                         <td>'.$row["class"].'</td>  
                         <td>'.$row["division"].'</td>  
                         <td>'.$row["admissiondate"].'</td> 
                         <td>'.$row["studentdob"].'</td> 
                         <td>'.$row["nationality"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["category"].'</td>  
                         <td>'.$row["subcaste"].'</td> 
                         <td>'.$row["relogion"].'</td>  
                         <td>'.$row["caste"].'</td>  
                         <td>'.$row["studentaddress"].'</td>  
                         <td>'.$row["studentmobileno"].'</td>  
                         <td>'.$row["studenttelephoneno"].'</td>  
                         <td>'.$row["erno"].'</td>  
                         <td>'.$row["motherfname"].'</td>  
                         <td>'.$row["mothermname"].'</td>  
                         <td>'.$row["motherlname"].'</td>  
                         <td>'.$row["motherage"].'</td> 
                         <td>'.$row["motheredu"].'</td>  
                         <td>'.$row["motheroccupation"].'</td>  
                         <td>'.$row["motherlang"].'</td>  
                         <td>'.$row["studentadharno"].'</td>  
                         <td>'.$row["busno"].'</td>  
                         <td>'.$row["busstop"].'</td>  
                         <td>'.$row["admissiontype"].'</td>  
                         <td>'.$row["placeofbirth"].'</td>  
                         <td>'.$row["landmark"].'</td>  
                         <td>'.$row["emergency"].'</td>  
                         <td>'.$row["Preschool"].'</td>  
                         <td>'.$row["mediumofins"].'</td>  
                         <td>'.$row["serialno"].'</td>  
                         <td>'.$row["udiseno"].'</td>  
                         <td>'.$row["otherlang"].'</td>  
                         <td>'.$row["ifany"].'</td>  
                         <td>'.$row["aliments"].'</td>  
                         <td>'.$row["idmark"].'</td>  
                        <td>'.$row["bgroup"].'</td>  
                         <td>'.$row["fatherfname"].'</td>  
                         <td>'.$row["fathermname"].'</td>  
                         <td>'.$row["fatherlname"].'</td>  
                         <td>'.$row["fatherage"].'</td>  
                         <td>'.$row["fatheredu"].'</td> 
                         <td>'.$row["parentadd"].'</td>  
                         <td>'.$row["fathertel"].'</td>  
                         <td>'.$row["familytype"].'</td>  
                         <td>'.$row["memberno"].'</td>  
                         <td>'.$row["siblingno"].'</td>  
                         <td>'.$row["siblingname1"].'</td>  
                         <td>'.$row["siblingage1"].'</td>  
                         <td>'.$row["siblingschool1"].'</td>  
                          <td>'.$row["siblingname1"].'</td>  
                         <td>'.$row["siblingage2"].'</td>  
                         <td>'.$row["siblingschool2"].'</td>  
                         <td>'.$row["place"].'</td>  
                         <td>'.$row["dt"].'</td>  
                         <td>'.$row["documents"].'</td>  
                         
                    </tr>
   ';
  }
  $output .= '</table>';
header('Content-Type: application/xls');
header("Content-Disposition: attachment; filename=$class-$division.xls");  
header('Pragma: no-cache');  
header('Expires: 0');  
  echo $output;
    echo "<script type='text/javascript'>
      location.href='export_out1.php'
      </script>";
 }

?>








