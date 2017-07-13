<?php
$sql ="SELECT * FROM `view_handworkerwithcats` ORDER BY `view_handworkerwithcats`.`date` DESC";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result)) 
		{
	?>
	<li><img src="dal/uploads/<?php echo $row["user_image"]; ?>" height="140" width="140" alt="<?php echo $row["user_name"]; ?>"> 
	<h5 style="font-size: 25px; color: black;"><?php echo $row["user_name"]; ?></h5><p style="text-align: center;"><?php echo $row['category_name'].'-'.$row['sub_category_name']; ?></p></li>
	
	<?php
		}
		} else {
		    echo "0 results";
		}
		mysqli_close($conn);

	?>
