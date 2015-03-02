<?php
	session_start();
	include 'headers/connect_to_mysql.php';
	
	if($_POST)
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$query = "SELECT * from `user` where user_name like '{$user_name}' AND password like '{$password}'"
		or die('error2');
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);

		if($count == 1)
		{
			$_SESSION['user_id'] = $row['user_id'];
			header("Location: dashboard.php");		
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Wahab Jawed">
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
<title>Signin - Munik</title>

<!-- Bootstrap core CSS -->
<link href="stylesheet/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="stylesheet/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/style_responsive.css" rel="stylesheet" type="text/css">
<link href="css/style_default.css" rel="stylesheet" type="text/css" id="style_color">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- BEGIN BODY -->
<body id="login-body">
<div class="login-header"> 
  <!-- BEGIN LOGO -->
  <div id="logo" class="center"> <img src="img/logo.png" alt="logo" class="center" /> </div>
  <!-- END LOGO --> 
</div>

<!-- BEGIN LOGIN -->
<div id="login"> 
  <!-- BEGIN LOGIN FORM -->
  <form id="loginform" class="form-vertical no-padding no-margin" action="login.php" method="post">
    <?php 
	if(isset($_GET['fail']) && $_GET['fail']=="true"){
      echo"<div class='alert alert-danger' role='alert'>
  <strong>Oh dear!</strong> Something went awry!
It seems that the Delegation ID/Password you entered were not found in our database, please try again
</div>";
} else if(isset($_GET['register']) && $_GET['register']=="true"){

      echo"<div class='alert alert-danger' role='alert'>
  <center>Kindly Check your email for the credentials</center></div>";
}
else if(isset($_GET['forget']) && $_GET['forget']=="true"){

      echo"<div class='alert alert-danger' role='alert'>
<center> Kindly Check your email for the credentials</center></div>";
}
?>
    <input type="hidden" value="login" name="type">
    <div class="lock"> <i class="icon-lock"></i> </div>
    <div class="control-wrap">
      <h4>Delegation Login</h4>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
            <input id="input-username" name="user_name" type="text" placeholder="Username" />
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend"> <span class="add-on"><i class="icon-key"></i></span>
            <input id="input-password" name="password" type="password" placeholder="Password" />
          </div>
          <div class="mtop10">
            <div class="block-hint pull-left small">
              <input type="checkbox" id="">
              Remember Me </div>
            <div class="block-hint pull-right"> <a href="javascript:;" class="" id="forget-password">Forgot Password?</a> </div>
          </div>
          <div class="clearfix space5"></div>
        </div>
      </div>
    </div>
    <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login" />
    <center>
      Don't have an account yet? <a href="javascript:;" class="" id="register"> Register Now</a>
    </center>
  </form>
  <!-- END LOGIN FORM --> 
  <!-- BEGIN FORGOT PASSWORD FORM -->
  <form id="forgotform" class="form-vertical no-padding no-margin hide" action="login.php" method="post">
    <input type="hidden" value="forget" name="type">
    <p class="center">Enter your e-mail address below to reset your password.</p>
    <?php 
	if(isset($_GET['forget']) && $_GET['forget']=="false"){

      echo"<div class='alert alert-danger' role='alert'>
  Email Doesnt Exist In Our Database</div>";
}
?>
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend"> <span class="add-on"><i class="icon-envelope"></i></span>
          <input id="input-email" type="text" name="email" placeholder="Email Address"  />
        </div>
      </div>
      <div class="space20"></div>
    </div>
    <input type="submit" id="forget-btn" class="btn btn-block login-btn" value="Submit" />
  </form>
  <!-- END FORGOT PASSWORD FORM --> 
  
  <!-- BEGIN REGISTER FORM -->
  <form id="registerform" class="form-vertical no-padding no-margin hide" action="login.php" method="post">
    <center>
      <h4>MUNIK VI Registration</h4>
    </center>
    <p class="center">Enter the required details below</p>
    <?php 
	if(isset($_GET['register']) && $_GET['register']=="false"){

      echo"<div class='alert alert-danger' role='alert'><center>
  Email Already in Use</center></div>";
}
?>
    <input type="hidden" value="register" name="type">
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
          <input id="input-name" class="span5" name="name" type="text" placeholder="Full Name"  required/>
        </div>
      </div>
      <div class="space20"></div>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend"> <span class="add-on"><i class="icon-th-large"></i></span>
          <input id="input-institute" name="institute" type="text" placeholder="Institute Name"  required/>
        </div>
      </div>
      <div class="space20"></div>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend"> <span class="add-on"><i class="icon-envelope-alt"></i></span>
          <input id="input-email" type="email" name="email" placeholder="Email Address"  required/>
        </div>
      </div>
      <div class="space20"></div>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="input-prepend"> <span class="add-on"><i class="icon-phone"></i></span>
          <input id="input-phone" type="text" name="phone" placeholder="Phone Number"  required/>
        </div>
      </div>
      <div class="space20"></div>
    </div>
    <input type="submit" id="register-btn" class="btn btn-block login-btn" style="width:100%" value="Register" />
  </form>
  <!-- END REGISTER FORM --> 
  
</div>
<!-- END LOGIN --> 
<!-- BEGIN COPYRIGHT -->
<div id="login-copyright"> <a href ="https://www.facebook.com/avialdo.inc">2014-15 &copy; Avialdo.</a> </div>
<!-- END COPYRIGHT --> 
<!-- js placed at the end of the document so the pages load faster --> 
<script src="script/jquery-1.8.3.min.js"></script> 
<script src="stylesheet/bootstrap/js/bootstrap.min.js"></script> 
<script src="script/jquery.blockui.js"></script> 
<script src="script/scripts.js"></script> 
<script>
    jQuery(document).ready(function() {     
      App.initLogin();
    
	
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
	
	
	});
	
	
  </script> 


<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
