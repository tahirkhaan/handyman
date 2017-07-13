<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
		<script type="text/javascript">
	function substitude(){
		var myValue = document.getElementById('myTextBox').value;
		if (myValue == 0){
			alert('please enter a real value in the text box!');
			return;
		}
		var myTitle = document.getElementById('title');
		myTitle.innerHTML = myValue;

	}
</script>
	<title>Handworker at your door step</title>

</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="background-color: #00BCE1;">
<ul id="menu_login" class="list-inline" style="display: inline-block;  color: white; font-family: 'proxima-nova', sans-serif;">
	<li>Home</li>
	<li>What We Offer</li>
	<li>Why Us</li>
	<li>Our Charges</li>
	<li>Contact</li>
</ul>
<ul id="menu-right" class="pull-right list-inline" style="font-family: 'proxima-nova', sans-serif;">
<li><a href="#">Login</a></li>
<li><a href="#">Register</a></li>	
</ul>
		</div>
	</div>
</div>
<div class="container">
	<img src="img/logo.png" style="max-width: 100%; height: auto;">
	<p class="logocaption">New Way To Hire Trusted Worker</p>
</div>
<div class="container-fluid back">
<div class="container" style="background-color: white;margin-top: 40px; margin-bottom: 40px; border-radius: 20px;">
<h3 style="text-align: center;padding-bottom: 20px;
    padding-top: 15px;">Register With Us</h3>
<div class="row">
<div class="col-sm-6 col-xs-12">
<div class="main">
<form  method="POST" action="dal/insert_customer.php">
		

	
	<input name="user_type" type="hidden" value="Customer"  id="myTextBox" placeholder="Enter User Type" class="input">
	</div>
	<div class="main">
	<label>User Image</label>
	<input name="user_image" type="text" id="myTextBox" placeholder="Upload image" class="input">
	</div>
	<div class="main">
	<label>User Pasword:</label>
	<input name="user_pass" type="text" id="myTextBox" placeholder="Enter User Password" class="input">
	</div>
	<div class="main">
	<label>User Contact:</label>
	<input name="user_contact" type="text" id="myTextBox" placeholder="Enter User Contact" class="input">
	</div>
		</div>

		<div class="col-sm-6 col-xs-12">
	<div class="main">
	<label>User Name:</label>
	<input name="user_name" type="text" id="myTextBox" placeholder="Enter User Name" class="input">
	</div>
	<div class="main">
	<label>User Email</label>
	<input name="user_email" type="text" id="myTextBox" placeholder="Enter User Email" class="input">
	</div>
	<div class="main">
	<label>Address:</label>
	<input name="user_address" type="text" id="myTextBox" placeholder="Enter Address" class="input">
	</div>

		</div>
	<div class="sub">
		<button type="submit" class="btn btn-success" style="padding: 6px 15px;">Submit</button>
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