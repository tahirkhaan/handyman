<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
	<title>Handworker at your door step</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<?php include "navigation.php"; ?>
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
<div class="container-fluid back">
<div class="container">
<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
    color: darkblue;">Search Result for handworker:</h2>
<div class="row">
	<ul class="list-inline">
<?php
    include "conn.php";
    if (isset($_POST['q'])) {

    $q = $_POST['q'];
	$sql1 = "SELECT  *  FROM `view_handworkerwithcats` WHERE category_name LIKE 
 	'%' '".$q."' '%' OR sub_category_name LIKE '%' '".$q."' '%' ";
	$result1 = mysqli_query($conn, $sql1);
	
	
	if (mysqli_num_rows($result1) > 0) {
    // output data of each row
	

    while($row = mysqli_fetch_assoc($result1)) {
    	
    
    	?>

	<li><img src="https://7944e0146072cbeb5bc4-83fb3af8612faf4f5ebb55194cb99919.ssl.cf1.rackcdn.com/photos/40552-1-1.jpg" /><div class="txt1"> <h4 style="font-size: 30px;" > <?php echo $row['user_name']; ?></h4> <p style="text-align: center;"><?php echo $row['category_name'].'<br>'.$row['sub_category_name']; ?></p></div></li>

	<?php
		}
} 
} //endif
else {
	?>
    <h2><?php echo "No handworker found please search again"; ?></h2>
<?php	}

mysqli_close($conn);

?>


	</ul>
</div>
</div>

<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
	
</div>

</body>
</html>