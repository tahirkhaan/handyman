  <?php

    include "conn.php";

$sql ="SELECT * FROM `handworker_job_earnings` where book_id = ".$_GET['job_id'];
    
    $result = mysqli_query($conn, $sql);
    
   
    ?>
<!DOCTYPE html>
<html>
<head>
<?php include "links.php"; ?>
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
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
       <!--  SELECT `earning_id`, `book_id`, `total_hours`, `total_days`, `total_months`, `total_amount_earned`, `date` FROM `handworker_job_earnings` WHERE 1 -->
            <tr>
                <th>booking ID</th>
                <th>Total Hours</th>
                <th>Total days</th>
                <th>Total Months</th>
                <th>Amount Earned</th>
                <th>Date</th>
               
                
            </tr>
        </thead>
        <tbody>
 <?php

         if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result))

        {
            
        ?>
      <!--  SELECT `earning_id`, `book_id`, `total_hours`, `total_days`, `total_months`, `total_amount_earned`, `date` FROM `handworker_job_earnings` WHERE 1 -->
            <tr>
                <td><?php echo $row['book_id']; ?></td>
                <td><?php echo $row['total_hours']; ?></td>
                <td><?php echo $row['total_days']; ?></td>
                <td><?php echo $row['total_months']; ?></td>
                <td><?php echo $row['total_amount_earned']; ?></td>
                <td><?php echo $row['date']; ?></td>
               
               
            </tr>
         <?php
        }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);

    ?>
        </tbody>
    </table>


</div>

<div class="container-fluid" style="background-color: #323232;">
<?php include "footer.php"; ?>
</div>

</body>
</html>