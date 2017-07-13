<?php

	include("config.php");

	session_start();

	// SELECT `user_id`, `user_type`, `user_name`, `user_image`, `user_email`, `user_pass`, `user_contact`, `user_address`, `date` FROM `user` WHERE 1	

	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['user_name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['user_pass']); 
      
      $sql = "SELECT * FROM `user` WHERE user_name = '$myusername' and user_pass = '$mypassword' and user_type = 'Hand worker'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['hw_login_user'] = $myusername;
         
         header("location: ../home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
        // echo "<script> alert('Invalid username or password!') </script>";
         header("location:  ../login.php");
         
      }
   }
?>

