<?php
session_start ();
include('../config/DbFunction.php');
 $obj=new DbFunction();
if (! (isset ( $_SESSION ['login'] ))) 
{
  
  header ( 'location:../index.php' );
}

    if(isset($_SESSION['erno']))
    {
      $erno1=$_SESSION['erno'];        
      $rs = $obj->leave_Certificate($erno1);
      $rss = $obj->leave_Certificate1($erno1);
      $obj->lc_history($erno1);
      $res = $rs->fetch_object(); 


      $orderdate = $res->studentdob;
      $orderdate = explode('-', $orderdate);
      
       $year  = $orderdate[0];
      $month = $orderdate[1];
     $day   = $orderdate[2];

      $month_num =$month; 
      $month_name = date("F", mktime(0, 0, 0, $month_num, 10)); 
     



      $res1 = $rss->fetch_object();
      $r = $obj->admission_history_lc($erno1);
      $res2 = $r->fetch_object();

      $roman = $res2->class;


      if($roman == 1)
      {
        $roman1 = 'I';
      }
      elseif($roman == 'Mini KG')
      {
        $roman1  = 'Mini KG';
      }
      elseif($roman == 'JR.KG')
      {
        $roman1  = 'JR.KG';
      }
      elseif($roman == 'SR.KG')
      {
        $roman1  = 'SR.KG';
      }
      elseif($roman == 2)
      {
        $roman1  = 'II';
      }
      elseif($roman == 3)
      {
        $roman1  = 'III';
      }
      elseif($roman == 4)
      {
        $roman1  = 'IV';
      }
      elseif($roman == 5)
      {
        $roman1  = 'V';
      }
      elseif($roman == 6)
      {
        $roman1  = 'VI';
      }
      elseif($roman == 7)
      {
        $roman1  = 'VII';
      }
      elseif($roman == 8)
      {
        $roman1  = 'VII';
      }
      elseif($roman == 9)
      {
        $roman1  = 'IX';
      }
      elseif($roman == 10)
      {
        $roman1  = 'X';
      }
      elseif($roman == 11)
      {
        $roman1  = 'XI';
      }
      elseif($roman == 12)
      {
        $roman1  = 'XII';
      }

      $date = date("d.m.Y");
     }
  ?>


<!DOCTYPE html>
<html>
<head>
  <title>Leaving Certificate</title>
  <style type="text/css">
    .n1{
      margin-left: 10px;
      border-style: solid;
      width: 1000px;

    }
    .n2{
      text-align:center; 
    }
    .lc{
      font-size: 14px;

    }
    .n3{
      text-align: center;
      font-family: Lucida Calligraphy;
    }
    .lc{
      font-size: 18px;
      font-family: Lucida Calligraphy;
    }

  </style>
</head>
<body>

  <div class="n1">
    
    <img src="logo.jpg" style="width: 150px; height: 200px; float: left; margin-left: 20px; ">
  <h4 class="n2">Savitribai Phule Shikshan Prasarak Mandal's</h4>
  <h1 class="n3">SINHGAD PUBLIC SCHOOL</h1><h4 class="n2">(Affiliated to CBSE,Affiliation No.1130295)</h4>
  <h1 class="n2" style="font-size: 15px; font-family: Arial;"> Pandharpur-Karad Road,Korti,Pandharpur,Dist:Solapur-413304(Maharashtra)
    Ph:02186-250150,51<br>  E-mail:spskorti@gmail.com  website:www.spspm.org</h1>
    <hr>
    <h2 class="n2"><u>LEAVING CERTIFICATE / TRANSFER CERTIFICATE</u></h2>
   <div class="lc">  
    <pre>
    <B>Sr. No. <u><?php echo htmlentities( strtoupper($res->id));?></u></B>                 <b>UDISE No.:<u><?php echo htmlentities( strtoupper($res->udiseno));?></u></b>             <b>Admission No.:<u><?php echo htmlentities( strtoupper($res1->admissionno));?></u></b>

   <b> 1.Name of the Student                                     :-</b> <?php echo htmlentities(strtoupper($res->studentfname));?> <?php echo htmlentities( strtoupper($res->studentmname));?> <?php echo htmlentities(strtoupper($res->studentsurname));?> 
   
   <b> 2.Father's Name                                           :-</b> <?php echo htmlentities(strtoupper($res->fatherfname));?> <?php echo htmlentities( strtoupper($res->fathermname));?> <?php echo htmlentities(strtoupper($res->fatherlname));?> 

   <b> 3.Mother's Name                                           :-</b> <?php echo htmlentities(strtoupper($res->motherfname));?> <?php echo htmlentities( strtoupper($res->mothermname));?> <?php echo htmlentities(strtoupper($res->motherlname));?>    

   <b> 4.Nationality                                             :-</b> <?php echo htmlentities( strtoupper($res->nationality));?>

   <b> 5.Religion & Cast                                         :-</b> <?php echo htmlentities( strtoupper($res->relogion));?> <?php echo htmlentities( strtoupper($res->caste));?>

   <b> 6.Wheather the candidate Belongs to SC/ST/OBC             :-</b> <?php echo htmlentities( strtoupper($res->category));?>

   <b> 7.Date First admission in the School with Class           :-</b> <?php echo htmlentities( strtoupper($res->admissiondate));?>,<?php echo htmlentities( strtoupper($roman1));?>

   <b> 8.Date of Birth ,Month and Year according to              
       the Chirstian Era both in Words & figures              :-</b> <?php echo htmlentities( strtoupper($day."/".$month."/".$year));?><?php echo htmlentities( strtoupper("(".numberTowords("$day")." ".$month_name));?><br>                                                              <?php echo htmlentities( strtoupper(numberTowords("$year")).")");?>                                 

   <b> 9.Class in which pupil last studied                       :-</b> <?php echo htmlentities( strtoupper($res1->last_class));?>

   <b>10.School/Board Annual examination last taken              :-</b> <?php echo htmlentities( strtoupper($res1->exam));?>

   <b>11.Subject Studied                                         :-</b> 1)<?php echo htmlentities( strtoupper($res1->sub1));?>    2) <?php echo htmlentities( strtoupper($res1->sub2));?>         
                                                                 3)<?php echo htmlentities( strtoupper($res1->sub3));?>    4)<?php echo htmlentities( strtoupper($res1->sub4));?>    
                                                                 5)<?php echo htmlentities( strtoupper($res1->sub5));?>                  
   <b>12.Whether qualified for promotion to the higher           
      Class                                                   :-</b> <?php echo htmlentities( strtoupper($res1->promotion));?>

   <b>13.Whether the student has paid all the dues to            
      the School                                              :-</b> <?php echo htmlentities( strtoupper($res1->fees_status));?>

   <b>14. Any fees concession availed of,if so the nature        
       of such concession                                     :-</b> <?php echo htmlentities( strtoupper($res1->fees_cons));?>

   <b>15.Total no. of working days present                       :-</b> <?php echo htmlentities( strtoupper($res1->total_days));?>

   <b>16.Whether NCC cadet/Boy Scout/girl Guid                   
       (details may be given)                                 :-</b> <?php echo htmlentities( strtoupper($res1->ncc));?>

   <b>17.General Conduct                                         :-</b> <?php echo htmlentities( strtoupper($res1->general_cunduct));?>

   <b>18.Date of application for certificate                     :-</b> <?php echo htmlentities( strtoupper($res1->apply_date));?>

   <b>19.Date of issue of certificate                            :-</b> <?php echo htmlentities( strtoupper($res1->issue_date));?>

   <b>20.Reason for leaving the school                           :-</b> <?php echo htmlentities( strtoupper($res1->reason1));?>

   <b>21.Any other Remark                                        :-</b> <?php echo htmlentities( strtoupper($res1->remark));?>


         <b>Certified that the above information is in accordance with the School Register</b>




   <b>Date:-<?php echo $date;?></b>                          <b>Checked by</b>                               <b>Principal</b>
                                 <b>(State full name & designation)</b></div>

    </pre>


  </div>

</body>
</html>




<?php
function numberTowords($num)
{

  $ones = array(
    0 =>"ZERO",
    1 => "ONE",
    2 => "TWO",
    3 => "THREE",
    4 => "FOUR",
    5 => "FIVE",
    6 => "SIX",
    7 => "SEVEN",
    8 => "EIGHT",
    9 => "NINE",
    10 => "TEN",
    11 => "ELEVEN",
    12 => "TWELVE",
    13 => "THIRTEEN",
    14 => "FOURTEEN",
    15 => "FIFTEEN",
    16 => "SIXTEEN",
    17 => "SEVENTEEN",
    18 => "EIGHTEEN",
    19 => "NINETEEN",
    "014" => "FOURTEEN"
  );
  $tens = array( 
    0 => "ZERO",
    1 => "TEN",
    2 => "TWENTY",
    3 => "THIRTY", 
    4 => "FORTY", 
    5 => "FIFTY", 
    6 => "SIXTY", 
    7 => "SEVENTY", 
    8 => "EIGHTY", 
    9 => "NINETY" 
  ); 
  $hundreds = array( 
    "HUNDRED", 
    "THOUSAND", 
    "MILLION", 
    "BILLION", 
    "TRILLION", 
    "QUARDRILLION" 
  ); /*limit t quadrillion */
  $num = number_format($num,2,".",","); 
  $num_arr = explode(".",$num); 
  $wholenum = $num_arr[0]; 
  $decnum = $num_arr[1]; 
  $whole_arr = array_reverse(explode(",",$wholenum)); 
  krsort($whole_arr,1); 
  $rettxt = ""; 
  foreach($whole_arr as $key => $i){

    while(substr($i,0,1)=="0")
      $i=substr($i,1,5);
    if($i < 20){ 
      /* echo "getting:".$i; */
      $rettxt .= $ones[$i]; 
    }elseif($i < 100){ 
      if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
      if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
    }else{ 
      if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
      if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
      if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
    } 
    if($key > 0){ 
      $rettxt .= " ".$hundreds[$key]." "; 
    }
  } 
  if($decnum > 0){
    $rettxt .= " and ";
    if($decnum < 20){
      $rettxt .= $ones[$decnum];
    }elseif($decnum < 100){
      $rettxt .= $tens[substr($decnum,0,1)];
      $rettxt .= " ".$ones[substr($decnum,1,1)];
    }
  }
  return $rettxt;
}
?>