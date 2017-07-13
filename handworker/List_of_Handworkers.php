<?php
include "conn.php";

?>

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
<?php 
if(isset($_GET["cat_id"])){
 $cat_id_sw = $_GET["cat_id"];
}
else{
	$cat_id_sw = 0;
}
?>
<?php switch ($cat_id_sw ) {
	case '1':
		echo '<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">List of Electrician:</h2>';
		break;
	case '2':
		echo '<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">List of Carpanter:</h2>';
		break;		
	case '3':
		echo '<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">List of Beautician:</h2>';
		break;
	default:
		echo '<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">List of Handworker:</h2>';
		break;
} ?>

    <div class="container">
<div class="row">
<div class="col-md-2">
	<h3>Categories:</h3>
	<?php
//include "conn.php";
	$sql1 = "SELECT * FROM `category`";
	$result1 = mysqli_query($conn, $sql1);
	
	?>
	<ul style="list-style-type: none;padding: 5px;">
	
	<?php
	if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
	?>

	<li> <a style="color: #9199a1;" href="List_of_Handworkers.php?cat_id=<?php echo $row['category_id'] ?>" >  <?php echo $row['category_name']; ?></a></li>
		
		<?php
	}
} else {
    echo "0 results";
}

mysqli_close($conn);

	?>

		
	</ul>
</div>
<div class="col-md-9">
	<ul class="list-inline worker">
<?php
    include "conn.php";

    if (isset($_GET["cat_id"]) )
    {
    	$cat_id = $_GET["cat_id"];
    	include "hw_catagorized.php";
    }
    else{
   		include "hw_un_catagorized.php";	
    }
?>
    
	</ul>
	</div>
	</div>

</div>

<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
	
</div>

</body>
</html>