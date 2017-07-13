<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Login Handworker</title>
     <?php include "links.php"; ?>
</head>
<body style="margin:0px;">
<div class="container-fluid">
   <div class="row">
   <div class="col-sm-12" style="background-color: #000000;">
<ul id="menu_login" class="list-inline" style="display: inline-block;  color: white; font-family: 'proxima-nova', sans-serif;">

<li ><a class="btn btn-default" href="home.php">Home</a></li>
	<li><a class="btn btn-default" href="List_of_Handworkers.php">List of handworker</a></li>
	
</ul>
<?php if(isset($_SESSION['hw_login_user'])){ 
	$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'home.php';
header("Location: http://$host$uri/$extra");
exit;
} else {?>
<ul id="menu-right" class="pull-right list-inline" style="font-family: 'proxima-nova', sans-serif;">
<li style="background-color: currentColor; width: 134px;"><a href="customer_login.php">Customer Login</a></li>
<li style="background-color: currentColor;width: 134px;"><a href="#">Handoworker Login</a></li>
<li style="background-color: currentColor; width: 167px;"><a href="signup_handworker.php">Handworker Registration</a></li>
<li style="background-color: currentColor;"><a href="customer_login.php">Customer Registration</a></li>		
</ul>
<?php  } ?>
	</div>
	</div>
</div>
<div class="container-fluid" style="height: auto; background-color: transparent; border: 2px solid white; border-radius: 50px; padding-bottom: 20px;">
  <div class="logo" style="padding-top: 15px;">
      <div class="container">
              <h1 style="font-size: 36px; font-weight: bolder; ">Handworker at Your Door Step</h1>
              <p style="    font-family: arial;color: #034178;font-weight: bold;font-size: 17px;letter-spacing: 2px; padding-left: 17px; ">The new way to Hire Handworker </p>
              </div>
                      </div>

</div>



<div class="container-fluid" style="background-image: url(img/hand.jpg);">
	
		<div class="row" style="padding-top: 80px; padding-bottom: 60px;">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6 box" style= "height: 400px; border: 1px solid gray; background-color: transparent;">
			<div class="row">
				<div class="col-md-12" style="background-color: currentColor;">
					<center><h2 style="color: white;">Handworker Login</h2></center>
				</div>
				</div>
				<form method="POST" action="login_hw/login_hw.php">
				<div class="text" style="padding-top: 30px;">
					<?php 

                if(isset($_SESSION['errorMsg']))
                     {
                        echo $_SESSION['errorMsg'];
                     }
                ?>
					<center><span style="color: white;"> UserName </span></center>
				</div>
				<div class="form-group">
					<label for="inputdefault"></label>
    				<input name="user_name" class="form-control" id="inputdefault" type="text">
				</div>
				<div class="password" style="padding-top: 20px;">
					<center><span style="color: white;" >Password</span></center>
				</div>
				<div class="form-group">
					<label for="pwd"></label>
  					<input name="user_pass" type="password" class="form-control" id="pwd">
				</div>
				<p style="color: white;">Forgot Password?<a href="">Click Here</a></p>
				<p style="color: white;">Dont have an account yet?<a href="signup_handworker.php">Register Now</a></p>
				<center><button type="submit" class="btn" style="background-color: transparent; border: 1px solid white; color: white;">Login Here </button></center>
				</form>
				<h2>
			
                </h2>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
</div>

	
<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
	
</div>
</body>
</html>