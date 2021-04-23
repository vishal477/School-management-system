<!-- This is only config file-->
<?php 
include('config/DbFunction.php');
$obj=new DbFunction();
header('location:pages/login.php');
require_once("pages/once.php");


?>
