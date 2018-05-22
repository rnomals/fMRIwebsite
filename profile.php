<?php
include 'database.php';
session_start();

$oldusername = $_SESSION['username'];

$result = $mysqli->query("SELECT * FROM users WHERE username ='$oldusername'") or die($mysqli->error());
$row = $result->fetch_assoc();

$user_id = $row['user_id'];


if(isset($_POST['submit'])) {

    $name = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    if (isset($name)) {
        if (!empty($name)) {
            $location = 'profile_pic/';
            if (move_uploaded_file($temp_name, $location . $name)) {
                $q =$mysqli->query( "UPDATE profile SET profile_image = '$name'WHERE user_id = '$user_id'");
	            header('location:myprofile.php');

            }
            else {
            	$_SESSION['message'] = "image upload failed";
            	header("location: errors/error.php");
            }
        }
        else {
	        $_SESSION['message'] = "select an image to upload";
	        header("location: errors/error.php");
        }
    }

 }

?>