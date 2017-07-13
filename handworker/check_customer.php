<?php   
//this file will check either customer is  logged in 
// if logged in ,redirect to hw_book.php else redirect to customer_login.php
if(isset($login_session)){ 
 
 	header("location:hw_book.php");

}elseif(!isset($login_session)) {

	header("location:customer_login.php");
	
}







?>