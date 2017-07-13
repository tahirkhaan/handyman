<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handworker";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//INSERT INTO `user`(`user_id`, `user_type`, `user_name`, `user_image`, `user_email`, `user_pass`, `user_contact`, `user_address`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

$user_type = $_POST['user_type'];
$user_name = $_POST['user_name'];
$user_image= $_POST['user_image'];
$user_email = $_POST['user_email'];
$user_pass = $_POST['user_pass'];
$user_contact = $_POST['user_contact'];
$user_address = $_POST['user_address'];


$sql = "INSERT INTO user (`user_type`, `user_name`, `user_image`, `user_email`, `user_pass`, `user_contact`, `user_address`) 
	VALUES ('$user_type','$user_name','$user_image','$user_email','$user_pass','$user_contact','
	$user_address')";

	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>