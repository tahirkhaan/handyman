<?php
	include_once "config.php";
    include_once('login_customer/session_customer.php');
    include_once('login_hw/session_hw.php');



?>
<!DOCTYPE html>
<html>
<head>
 <title>Handworker at your doorstep</title>
    <?php include "links.php"; ?>
</head>
<body style="margin: 0px;">
<div class="container-fluid">
   <div class="row">
  <div class="navigation">
     
   
<div class="col-sm-12" style="background-color: #000000;">
<ul id="menu_login" class="list-inline" style="display: inline-block;  color: white; font-family: 'proxima-nova', sans-serif;">
	<li ><a class="btn btn-default" href="home.php">Home</a></li>
	<li><a class="btn btn-default" href="List_of_Handworkers.php">List of handworker</a></li>
	
	<?php if(isset($login_session)){ ?>
	<li><a class="btn btn-default" href="hw_book.php">Handwoker Booking</a></li>
		<?php } ?>
	<?php if(isset($hw_login_session)){ ?>
	<li></li>
	<?php } ?>
	
	
	<!-- if customer is logged in show wellcome -->
	<?php if(isset($login_session)){ ?>
		<li><?php echo "welcome ".$login_session;?></li>
	<?php } ?>
	<!-- if handworker is logged in show wellcome -->
	<?php if(isset($hw_login_session)){ ?>
		<li><?php echo "welcome ".$hw_login_session; ?></li>
	<?php } ?>
	<li><form method="POST" action="search.php">
		<input name="q" class="search form-control" type="text"  placeholder="search" style="color: black;">
		</form></li>


</ul>


<ul id="menu-right" class="pull-right list-inline" style="font-family: 'proxima-nova', sans-serif;">
<?php if(isset($_SESSION['hw_login_user']) || isset($_SESSION['login_user'])){ ?>
<?php if(isset($_SESSION['hw_login_user'])) { ?>
<li style="background-color: currentColor;"><a href="profile.php">Profile</a></li>
<?php } elseif (isset($_SESSION['login_user'])) { ?>
<li style="background-color: currentColor;"><a href="#">Profile</a></li>
<?php } ?>

<?php }  if(isset($_SESSION['login_user'])){?>
<style type="text/css">
	.handworker-log {
		display: none;
	}
</style>
<?php	}
if(isset($_SESSION['hw_login_user'])){?>
<style type="text/css">
	.customer-log {
		display: none;
	}

</style>
<?php	}?>
 
<?php if(!isset($_SESSION['login_user'])){ ?>

<li style="background-color: currentColor;"><a href="customer_login.php" class="customer-log">Login customer</a></li>
<?php } elseif(isset($_SESSION['login_user'])){ ?>
<li style="background-color: currentColor;"><a href="login_customer/logout_customer.php">Logout </a></li>
<?php } ?>

<?php if(!isset($_SESSION['hw_login_user']) ){  ?>
<li style="background-color: currentColor;" ><a href="login.php" class="handworker-log">Login Handworker</a></li>

<?php } elseif(isset($_SESSION['hw_login_user'] ) || isset( $_SESSION['login_user'] )){ ?>
<li style="background-color: currentColor;" ><a href="login_hw/logout_hw.php">Logout</a></li>
<?php } ?>

<!-- <?php if(!isset($_SESSION['login_user'])) { ?>
<li style="background-color: currentColor;" ><a href="signup_customer.php">Register customer</a></li>
<?php } elseif(isset($_SESSION['login_user'])) { ?>
<li style="background-color: currentColor;" ><a href=""></a></li>
<?php } ?> -->
</ul>



	</div>
	</div>

