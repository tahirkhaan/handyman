<?php
   //include('config.php');
   //session_start();
   if (isset($_SESSION['hw_login_user'])) {
   	 $user_check = $_SESSION['hw_login_user'];
   
   $ses_sql = mysqli_query($db,"select * from user where user_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $hw_login_session = $row['user_name'];
   $hw_type_session_var = $row['user_type'];
   
   }
  
   // if(!isset($_SESSION['login_user'])){
   //    header("location:login_customer.php");
   // }
?>