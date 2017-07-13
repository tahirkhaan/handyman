 <!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
	<title>Handworker at your door step</title>

</head>
<body>
<style type="text/css">
	body{
		margin: 0px;
	}
	select#sub_cat option {
    background: transparent;
    color: #ccc;
}
</style>
<div class="container-fluid">
   <div class="row">
   <div class="col-sm-12" style="background-color: #000000;">
<ul id="menu_login" class="list-inline" style="display: inline-block;  color: white; font-family: 'proxima-nova', sans-serif;">
	<!-- <li>Home</li>
	<li>What We Offer</li>
	<li>Why Us</li>
	<li>Our Charges</li>
	<li>Contact</li> -->
</ul>
<ul id="menu-right" class="pull-right list-inline" style="font-family: 'proxima-nova', sans-serif;">
<li style="background-color: currentColor;"><a href="login.php">Handworker Login</a></li>
<li style="background-color: currentColor; width: 133px;"><a href="customer_login.php"> Customer Login</a></li>
<li style="background-color: currentColor;"><a href="signup_customer.php">Customer Registration</a></li>	
<!-- <li style="background-color: currentColor;"><a href="signup_handworker.php">Register Handworker</a></li> -->		
</ul>
	</div>
	</div>
</div>

<?php include "logo.php"; ?>
         </div>

</div>
<div class="container-fluid back" style="background-image: url(img/backk.jpg); background-position: center;">
<div class="container" style="color: white; margin-top: 40px; margin-bottom: 40px; border-radius: 20px;border: 1px solid white;">
<h3 style="text-align: center;padding-bottom: 20px;
    padding-top: 15px;">Register With Us</h3>
<div class="row">
<div class="col-sm-6 col-xs-12" style="padding-left: 25px;
    padding-right: 25px;">
<div class="main">
<form  method="POST" action="dal/insert_handworker.php" enctype="multipart/form-data">
		
	<input name="user_type" type="hidden" value="Hand worker"  id="myTextBox" placeholder="Enter User Type" class="input">
	</div>
	<div class="main">
	<label>Category </label>
       <select id="cat" name="category_id" style="background: transparent;color: white;border: 1px solid white; height: 27px;">
            <option value="" style="color: black;">Select Category</option>
            <?php 
            include "config.php";
            $sql = "SELECT category_id , category_name FROM category";
            $result = mysqli_query($db,$sql);
            if (mysqli_num_rows($result)>0)
            {
                while ($row = mysqli_fetch_object($result)) { ?>
                    <option value="<?php echo $row->category_id ?>" style="color: black;"> <?php echo $row->category_name; ?> </option>
                <?php }
            }
            ?>
          </select>

		<br>
	<label style="padding-top: 19px;">User Image</label>
	<input name="user_image" type="file" id="user_image">
	</div>
	<div class="main">
	<label style="padding-top: 13px;">User Pasword:</label>
	<input style="background: transparent; border: 1px solid white;" name="user_pass" type="password" id="myTextBox" placeholder="Enter User Password" class="input" required="">
	</div>
	<div class="main">
	<label>User Contact:</label>
	<input style="background: transparent; border: 1px solid white;" name="user_contact" type="text" id="myTextBox" placeholder="Enter User Contact" class="input" required="">
	</div>
		</div>

		<div class="col-sm-6 col-xs-12" style="padding-left: 25px;
    padding-right: 25px;">
	
	<div class="main">

	
		 <label>Sub Category </label>
        <select id="sub_cat" name="sub_category_id" style="background: transparent;color: white;border: 1px solid white;
    height: 27px;">
            <option value="0" style="color: black;">Select Sub Category </option>
        </select>
        
        <br>
	


	<label style=" padding-top: 25px;">User Name:</label>
	<input style="background: transparent; border: 1px solid white;" name="user_name" type="text" id="myTextBox" placeholder="Enter User Name" class="input" required=""> 
	</div>
	<div class="main">
	<label>User Email</label>
	<input style="background: transparent; border: 1px solid white;" name="user_email" type="text" id="myTextBox" placeholder="Enter User Email" class="input" required="">
	</div>
	<div class="main">
	<label>Address:</label>
	<input style="background: transparent; border: 1px solid white;" name="user_address" type="text" id="myTextBox" placeholder="Enter Address" class="input" required="">
	</div>
</div>
		</div>
	<div class="sub">
		<button  type="submit" name="Register" class="btn btn-success" style="background: transparent;padding: 8px 50px;border: 1px solid;margin-top: 20px;">Submit</button>
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
<script src="js/getsubcatforcat.js"></script>
</div>

</body>
</html>