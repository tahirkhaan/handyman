<?php   
    include_once('login_hw/session_hw.php');


?>


<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
	<title>Handworker at your door step</title>
</head>
<body style="font-family: 'Lato', sans-serif; margin: 0px;">
<div class="container-fluid">
<div class="row">
<?php include "navigation.php"; ?>
	</div>

  <?php
  if(isset($row["user_type"])){
    $customer = $row["user_type"] ;
  }else {
    $customer = "" ;
  }
  

if( $customer !="Customer") {
    if(!isset($_SESSION['hw_login_user'])){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'login.php';
    header("Location: http://$host$uri/$extra");
    exit;
     } 
}
 ?>
</div>

<?php include "logo.php"; ?>
         </div>

</div>
<div class="container-fluid" style="background-color: rgba(128, 128, 128, 0.55);">
<div class="container">
<p style="text-align: center;
         font-size: 50px;
         font-weight: bold;
         font-family: cursive;padding-top: 20px;
    padding-bottom: 20px;color: cornsilk;">Handworker Detail</p>
	
</div>
</div>

<div id="profile" class="container-fluid" style="background-color: aliceblue;">
<?php
    include "conn.php";

    if (isset($_GET["hw_id"]) )
    {
        $hw_id = $_GET["hw_id"];

        include "subprofile.php";
    }
    
   
?>

 

</div>


<div class="container">
<h3 style="font-size: 22px;padding-left: 12px;color: darkblue;color: rgba(2, 24, 88, 0.68);padding-top: 25px;
    padding-bottom: 25px;
    font-size: -webkit-xxx-large;
    font-weight: 900;
    text-align: center;">Extra Skills</h3>
    <hr>
    <div class="row" id="skills">
    <?php
    include "conn.php";

    if (isset($_GET["hw_id"]) )
    {
        $hw_id = $_GET["hw_id"];
       include "subskills.php";
    }
    
   
?>
    
    </div>
  <div class="container">
    <div class="row" id="portfolio">
      <?php
    include "conn.php";

    if (isset($_GET["hw_id"]) )
    {
        $hw_id = $_GET["hw_id"];
       include "subportfolio.php";
    }
    
   
?>
  </div>
  </div>
    <div class="container">
    <div class="row" id="rating">
       <?php
    include "conn.php";

    if (isset($_GET["hw_id"]) )
    {
        $hw_id = $_GET["hw_id"];
       include "subrating.php";
    }
    
   
?>
</div>
  </div>  	
    </div>

	
</div>








<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
	
</div>

</body>
</html>