<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "handworker";
$error = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//INSERT INTO `user`(`user_id`, `user_type`, `user_name`, `user_image`, `user_email`, `user_pass`, `user_contact`, `user_address`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
if(isset($_POST["Register"]))
{
$category_id = $_POST['category_id'];
$sub_category_id = $_POST['sub_category_id'];
$user_type = $_POST['user_type'];
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_image = $_FILES["user_image"]["name"];
$user_pass = $_POST['user_pass'];
$user_contact = $_POST['user_contact'];
$user_address = $_POST['user_address'];
}
if(!empty($user_image)) {
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["user_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["user_image"]["tmp_name"]);
    if($check !== false) {
        $successfully = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error .= "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["user_image"]["size"] > 900000) {
    //$error .= "Sorry, your Image is too large.";
    //$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $error .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $error .= "Sorry, your Image was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)) {
        $successfully = "The file ". basename( $_FILES["user_image"]["name"]). " has been uploaded.";
    } else {
        $error .= "Sorry, there was an error uploading your Image.";
    }
}
}
if($error!="")
{
    echo $error;
    echo "<br><h1> Try Again </h1><br>";
    echo "<a href='../signup_handworker.php'>Go Back Register Page</a>";
}

else {

    if(isset($_POST["Register"]))
{

$sql = "INSERT INTO user (`category_id`,`sub_category_id`, `user_type`, `user_name`, `user_image`, `user_email`, `user_pass`, `user_contact`, `user_address`) 
	VALUES ('$category_id','$sub_category_id','$user_type','$user_name','$user_image','$user_email','$user_pass','$user_contact','
	$user_address')";

	if (mysqli_query($conn, $sql)) {
    echo "your successfully Register";
    echo "<br><a href='../home.php'>Go Back to Home Page</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


 }

}

?>