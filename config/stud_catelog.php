<?php  
include 'config.php'; 
 $class=$_POST['class'];
 $division=$_POST['division'];
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=$class.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
//mysqli_select_db($conn, 'schoolmanagement');

$sql = "SELECT admissiontype, busno, busstop, erno, admissiondate, class, division, studentsurname, studentfname, studentmname, studentdob, placeofbirth, studentadharno, gender, caste, relogion, nationality, category, studentaddress, 
studenttelephoneno, studentmobileno, landmark, emergency, Preschool, mediumofins, serialno, udiseno, motherlang, otherlang, ifany, aliments, idmark, bgroup, fatherlname, fatherfname, fathermname, fatherage,fatheredu, parentadd, 
fathertel, motherlname, motherfname, mothermname, motherage, motheredu,motheroccupation, familytype, memberno, siblingno, siblingname1, siblingage1, siblingschool1, siblingname2, 
siblingage2, siblingschool2, place, dt  FROM studentregister WHERE division='$division' and class='$class'";  

$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  

$columnHeader = "Admission Type" . "\t" . "BUS Number" . "\t" . "Bus Stop" . "\t". "ER.NO" . "\t". "Admission Date" . "\t". "Class" . "\t". "Division" . "\t". "Surname" . "\t". "First Name" . "\t". "Middle Name" . "\t". "DOB" . "\t"
. "Place of birth" . "\t". "Aadhar Number" . "\t". "Gender" . "\t". "Cast" . "\t". "Religion" . "\t". "Nationality" . "\t". "Category" . "\t". "Permanant Address" . "\t"
. "Telephone Number" . "\t". "Mobile Number" . "\t". "Closest Landmark" . "\t". "Emergency Contact" . "\t". "Previous School" . "\t". "Medium Of Instruction" . "\t"
. "Serial Number" . "\t". "UDISENO" . "\t". "Mother Language" . "\t". "Other Languages Known" . "\t". "Aligeries if any" . "\t". "Aliments" . "\t". "Identification Mark" . "\t"
. "Blood Group" . "\t". "Fathers Last name" . "\t". "Fathers First name" . "\t". "Fathers Middle name" . "\t". "Fathers Age" . "\t". "Fathers Education" . "\t". "Fathers Address of work place" . "\t". "Telephone No." . "\t". "Mothers Last name" . "\t"
. "Mothers First name" . "\t". "Mothers Middle name" . "\t". "Mothers Age" . "\t". "Mothers Education" . "\t". "Mothers Occupation" . "\t". "Family" . "\t"
. "Members in family" . "\t". "No. Of siblings" . "\t". "Sibling 1 full name" . "\t". "Sibling 1 Age" . "\t". "Sibling 1 School Name". "\t". "Sibling 1 full name" . "\t". "Sibling 1 Age" . "\t". "Sibling 1 School Name"."\t". "Place" . "\t". "DOB". "\t";  

$setData = '';  
  
    while ($rec = mysqli_fetch_row($setRec)) 
    {
    

    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}

  
  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 