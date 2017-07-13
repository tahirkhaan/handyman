<?php
	include "config.php";

	$cat_id = $_POST['category_id'];
	$sql = "SELECT `sub_category_id`, `sub_category_name` FROM `sub_category` WHERE category_id=".$cat_id;
	$result = mysqli_query($db, $sql);
	$arr = array();
	while( $row = mysqli_fetch_array($result) )
	{
	    $sub_category_id = $row['sub_category_id'];
	    $sub_category_name = $row['sub_category_name'];

	    $arr[] = array("sub_category_id" => $sub_category_id, "sub_category_name" => $sub_category_name);
	}
	echo json_encode($arr);
?>