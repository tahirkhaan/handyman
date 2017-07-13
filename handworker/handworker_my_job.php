  <?php

    include "conn.php";

$sql ="SELECT * FROM `view_hw_bookings` WHERE handworker_id = ".$_GET['hw_id'];
    
    $result = mysqli_query($conn, $sql);
    
   
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
<div class="container-fluid back">

<h2 style="font-weight: 900;
    padding-bottom: 30px;
    padding-left: 18px;
     color: cadetblue; text-align: center;">Handworker Jobs</h2>
    <div class="container">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
       <!--  SELECT `book_id`, `customer_id`, `handworker_id`, `subcategory_id`, `workplace`, `date`, `time`, `booking_date` FROM `book_handworker` WHERE 1 -->
            <tr>
                <th>booking ID</th>
                <th>Customer Name</th>
                <th>Handworker Name</th>
                <th>Category Name</th>
                <th>Sub category Name</th>
                <th>Workplace</th>
                <th>Date</th>
                <th>Time</th>
                <th>Booking Date</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
 <?php

         if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result))

        {
            
        ?>
        <!-- SELECT `book_id`, `customer_id`, `handworker_id`, `subcategory_id`, `workplace`, `date`, `time`, `booking_date`, `CustomerType`, `CustomerName`, `hwType`, `hwName`, `category_id`, `category_name`, `sub_category_name` FROM `view_hw_bookings` WHERE 1 -->
            <tr>
                <td><?php echo $row['book_id']; ?></td>
                <td><?php echo $row['CustomerName']; ?></td>
                <td><?php echo $row['hwName']; ?></td>
                <td><?php echo $row['category_name']; ?></td>
                <td><?php echo $row['sub_category_name']; ?></td>
                <td><?php echo $row['workplace']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['booking_date']; ?></td>
                <td><a style="margin-bottom: 5px;" class="btn btn-primary" href="hw_job_earning.php?job_id=<?php echo $row['book_id']; ?>">View Earning</a>
                <a class="btn btn-primary" href="add_handworker_earning.php?job_id=<?php echo $row['book_id']; ?>">Add Earning</a>
              </td>
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