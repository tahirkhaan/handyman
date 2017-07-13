<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>

	<title>Signup Customer</title>

</head>
<body>
<style type="text/css">
	body{
		margin: 0px;
	}
</style>
<div class="container-fluid">
   <div class="row">
   <div class="col-sm-12" style="background-color: #000000;">
<!-- <ul id="menu_login" class="list-inline" style="display: inline-block;  color: white; font-family: 'proxima-nova', sans-serif;">
	<li>Home</li>
	<li>What We Offer</li>
	<li>Why Us</li>
	<li>Our Charges</li>
	<li>Contact</li>
</ul> -->
<ul id="menu-right" class="pull-right list-inline" style="font-family: 'proxima-nova', sans-serif;">
<li style="background-color: currentColor;"><a href="customer_login.php">Customer Login</a></li>
<li style="background-color: currentColor;"><a href="login.php">Handoworker Login</a></li>
<li style="background-color: currentColor;"><a href="signup_handworker.php">Handworker Registration</a></li>
<!-- <li style="background-color: currentColor;"><a href="#">Register</a></li>	 -->	
</ul>
	</div>
	</div>
</div>

<?php include "logo.php"; ?>
         </div>

</div>

<div class="container-fluid back" style="background-image: url(img/backk.jpg);">
<div class="container" style="background-color: white;margin-top: 40px; margin-bottom: 40px; border-radius: 20px;">
<h3 style="text-align: center;padding-bottom: 20px;
    padding-top: 15px;">Register With Us</h3>
<div class="row">
<div class="col-sm-6 col-xs-12">
<div class="main">
<form  method="POST" action="dal/insert_customer.php" enctype="multipart/form-data">
		

	
	<input name="user_type" type="hidden" value="Customer"  id="myTextBox" placeholder="Enter User Type" class="input">
	</div>
	<div class="main">
	<label>User Image</label>
	<input type="file" name="user_image" id="user_image">
	</div>
	<div class="main">
	<label>User Pasword:</label>
	<input name="user_pass" type="password" id="myTextBox" placeholder="Enter User Password" class="input" required="">
	</div>
	<div class="main">
	<label>User Contact:</label>
	<input name="user_contact" type="text" id="myTextBox" placeholder="Enter User Contact" class="input" required="">
	</div>
		</div>

		<div class="col-sm-6 col-xs-12">
	<div class="main">
	<label>User Name:</label>
	<input name="user_name" type="text" id="myTextBox" placeholder="Enter User Name" class="input" required="">
	</div>
	<div class="main">
	<label>User Email</label>
	<input name="user_email" type="text" id="myTextBox" placeholder="Enter User Email" class="input" required="">
	</div>
	<div class="main">
	<label>Address:</label>
	<input name="user_address" type="text" id="myTextBox" placeholder="Enter Address" class="input" required="">
	</div>

		</div>
	<div class="sub">
		<button type="submit" name="Register" class="btn btn-success" style="padding: 6px 15px;">Submit</button>
		<br>
		<br>
		<p>Do You Have an account?<a href="#">Login</a></p>
	</div>
</form>
	
</div>	
</div>	
</div>	
</div>
<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
	
</div>

</body>
</html>