<?php
	session_start();
	include 'headers/connect_to_mysql.php';
	
?>

<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Reset Password page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style_responsive.css" rel="stylesheet" />
  <link href="css/style_default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="img/linkedunion.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
       <form id="loginform" class="form-vertical no-padding no-margin" action="forget_password.php.php" method="post">
 
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
      <div class="control-wrap">
          <h4>User Login</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
           <span class="add-on"><i class="icon-user"></i></span><input id="input-username" type="text" name="user_name" placeholder="Username" />                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
              <span class="add-on"><i class="icon-key"></i></span><input id="input-password" name="password" type="password" placeholder="Password" />
       
                  </div>

                  <div class="clearfix space5"></div>
              </div>

          </div>
      </div>

      <input type="submit" id="login-btn" name="login" class="btn btn-block login-btn" value="Login" />
 
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2015 &copy; Linked Union.
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/jquery.blockui.js"></script>
  <script src="js/scripts.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
    	<?php 
	if(isset($_GET['register']) && $_GET['register']=="false"){
	
	echo "
	
	$('#register').click();
	
	";
	}
	?>
	
	<?php 
	if(isset($_GET['forget']) && $_GET['forget']=="false"){
	
	echo "
	
	$('#forget-password').click();
	
	";
	}
	?>
	
  </script>

  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>