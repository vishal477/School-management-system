<?php 
session_start();
if(isset($_POST['submit'])){
    
   include('../config/DbFunction.php');
   $obj=new DbFunction();
   $_SESSION['login']=$_POST['id'];
   $obj->login($_POST['id'],$_POST['password']);



}


?>




<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Custom-css-Files -->
    <link href="../bundles/css/style.css" rel="stylesheet" type="text/css" media="all">
    <!-- font-awesome icons -->
    <link href="../bundles/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    
</head>
<body>
    
    <div id="page" class="page">
        
        <div class="main-form bg bg1">
            <h1 style="color:white; text-shadow: 3px 3px black;" >School Management System</h1>
            <div class="w3l-login-form editContent" style="outline: none; cursor: inherit;">
                <h2>Admin Login</h2>
                <form action="#" method="POST">

                    <div class=" w3l-form-group editContent">
                        <label class="editContent">Username:</label>
                        <div class="group editContent medium-editor-placeholder" style="outline: none; cursor: inherit; outline-offset: -2px;">
                            <span class="fa fa-user"></span>
                            <input type="text" class="form-control" name="id" placeholder="Username" required="required">
                        </div>
                    </div>
                    <div class=" w3l-form-group editContent">
                        <label class="editContent">Password:</label>
                        <div class="group editContent">
                            <span class="fa fa-unlock" style="outline: none; cursor: inherit;"></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    
                    <button class="btn" name="submit" type="submit">Login</button>
                </form>
                
            </div>
            
        </div></div><!-- /#page -->
        


    </body></html>















<!--




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Management Login </title>

   
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../dist/css/jquery.validate.css" />
    

</head>
<style type="text/css">
.image{
    background-image: url("school2.jpg");
    border-image: 6px;
}    
.heading{
    font-family: Comic Sans, Comic Sans MS, cursive;
    color: blue;
    font-size: 40px;
}

</style>
<body class="image">
 <h2 align="center" class="heading" >Student Record Management System</h2>
    <div class="container">
        <br><br><br><br>

            <div class="col-md-4 col-md-offset-4">

                <div class="panel panel-primary">

                    <div class="panel-heading">
                     <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
             <input class="form-control" placeholder="Login Id"  id="id" name="id" type="text" autofocus autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password"name="password" type="password" value="">
                                </div>
                              
                                <input type="submit" value="login" name="submit" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="../dist/js/sb-admin-2.js"></script>
 <script src="../dist/jquery-1.3.2.js" type="text/javascript"></script>
 <script src="../dist/jquery.validate.js" type="text/javascript"></script>
 <script type="text/javascript">
            
            jQuery(function(){
                jQuery("#id").validate({
                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                    message: "Should be a valid id"
                });
                jQuery("#password").validate({
                    expression: "if (VAL.match(/^[a-z]$/)) return true; else return false;",
                    message: "Should be a valid password"
                });
                
            });
            
        </script>
</body>

</html>
-->