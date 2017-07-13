<?php
	include "config.php";

	$sub_cat_id = $_POST['category_id'];
	$sql = "SELECT * FROM `view_handworkerwithcats` WHERE sub_category_id=".$sub_cat_id;
	$result = mysqli_query($db, $sql);
	$arr = array();
	while( $row = mysqli_fetch_array($result) )
	{
	    $user_id = $row['user_id'];
	    $user_name = $row['user_name'];

	    $arr[] = array("user_id" => $user_id, "user_name" => $user_name);
	}
	echo json_encode($arr);
?>