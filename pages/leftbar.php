<?php


$flag = 0;
$d = date("m"); 

if($d == 01 || $d == 02 || $d == 03 || $d == 04 || $d == 05 || $d == 06)
{
  $add = 0;
  $data = date("Y");
  $add = $data - 1;
  
  $flag = $flag + 1;
  
  
}
else
{
  $add = 0;
  
  $data = date("Y");
  $add = $data + 1;
  $flag = $flag + 2;

  
}
?>



<nav class="navbar navbar-default navbar-static-top" role="navigation"
style="margin-bottom: 0">

<div class="col-lg-12">
  <div class="col-lg-3">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
      data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span> 
      <span
      class="icon-bar">      
    </span> 
    <span 
    class="icon-bar">
  </span> 
  <span
  class="icon-bar">
</span>
</button>
<a class="navbar-brand">Student Management System</a>  
</div>
</div>
<div class="col-lg-4">
  <b> <a class="navbar-brand"  style="color:  #ff9966">Sinhgad Public School
  Korti, Pandharpur</a>  </b>
</div>
<div class="col-lg-3">
  <a class="navbar-brand">Acadamic Year :<b><span style="color:  #1a8cff; ">
    <?php
    $d = date("m"); 
    
    if($flag == 1)
    {

      echo strtoupper("  ".$add." - ".$data);
      
      
    }
    if($flag == 2)
    {

      echo strtoupper("  ".$data." - ".$add);
      
      
    }
    ?></a></span></b>
  </div>  
  <div class="col-lg-2">
   <a class="navbar-brand" style="color:  #ff9966"><?php echo strtoupper(date("d/m/Y")); ?></a>  
 </div>
</div>




<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">

      <li>
       <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
     </li>




     <li>
      <a href="state.php"><i class="fa fa-line-chart"></i>Statistics<span ></span></a>
    </li>



    <li>
      <a href="all-student.php"><i class="fa fa fa-binoculars a-fw "></i>All Students<span ></span></a>
    </li>
    <li>
      <a href="view-student.php"><i class="fa fa-eye a-fw"></i>View Students<span ></span></a>
    </li>
    
    <li>
      <a href="bonafide-gen.php"><i class="fa fa-building-o fa-fw"></i>Generete Bonafied<span ></span></a>
    </li>
    <li>
      <a href="lc-gen.php"><i class="fa fa-building-o fa-fw"></i>Generate LC<span ></span></a>
    </li> 
    
    <li>
      <a href="#"><i class="  fa fa-exchange fa-fw"></i> Promote Student<span class="fa arrow"></span></a>
      <ul class="nav nav-second-level">

       <li>
        <a href="promote_class_student.php">Promote Class Students</a>
      </li>
      <li>
        <a href="promote.php">Change Division</a>
      </li>
    </ul>
  </li>


  <li>
    <a href="#"><i class="fa fa-upload   "></i>Import/Export<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
      <li>
        <a href="see_export.php">Export Data to EXCEL<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="see_export1.php">Only class</a>
          </li>
          <li>
            <a href="see_export.php">Class and Division</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="import_excel.php">Import Data from EXCEL</a>
      </li>
    </ul>
  </li>

  

  <li>
    <a href="register.php"><i class="fa fa-mortar-board fa-fw"></i>New Admission<span ></span></a>
  </li>

  <li>
    <a href="student_out.php"><i class="fa fa-trash-o fa-fw"></i>Delete Student<span ></span></a>
  </li>

  

  <li>
    <a href="view_alumni.php"><i class="fa fa-users fa-fw"></i>Alumni<span ></span></a>
  </li>

</li>
<li>
  <a href="#"><i class="fa fa fa-cubes"></i> History<span class="fa arrow"></span></a>
  <ul class="nav nav-second-level">
    <li>
      <a href="bonafide_history.php">Bonafide History</a>
    </li>
    <li>
      <a href="lc_history.php">LC History</a>
    </li>
    <li>
      <a href="admission_history.php">Admission History</a>
    </li>
    <li>
      <a href="view_documents.php">Document History</a>
    </li>
  </ul>
</li>

<li>

 <li>
  <a href="logout.php"><i class="fa fa-power-off "></i> Logout<span ></span></a>
</li>
</ul>      				  
</div>

</div>

</nav>