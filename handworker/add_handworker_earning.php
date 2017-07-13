  <?php

    include "conn.php";

$sql ="SELECT * FROM `handworker_job_earnings` where book_id = ".$_GET['job_id'];
    
    $result = mysqli_query($conn, $sql);
    
   
    ?>
<!DOCTYPE html>
<html>
<head>

<?php include "links.php"; ?>
 
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
	<title>Handworker Job Earning</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<?php include "navigation.php"; ?>
	</div>
</div>
<div class="container">
	<img src="img/logo.png" style="max-width: 100%; height: auto;">
	<p class="logocaption">New Way To Hire Trusted Worker</p>
</div>
<div class="container-fluid back">

<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">Handworker Jobs</h2>
    <div class="container">
    <form  method="POST" action="add_earning_hw.php">
    <!-- `book_id`, `total_hours`, `total_days`, `total_months`, `total_amount_earned`, -->
   
        <input type="hidden" name="book_id" value="<?php echo $_GET['job_id']; ?>" >
        <br>
        <label>total_hours</label>
        <input type="text" name="total_hours">
        <br>
        <label>total_days</label>
        <input type="text" name="total_days">
        <br>
        <label>total_months</label>
        <input type="text" name="total_months">
        <br>
        <label>total_amount_earned</label>
        <input type="text" name="total_amount_earned">
        <br>

        <input type="submit" value="add earning"></input>
       

    </form>


</div>

<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
</div>

</body>
</html>