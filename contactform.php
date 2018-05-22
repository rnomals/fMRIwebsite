<?php
// Create connection
include 'database.php';
session_start();
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	echo "$name";
	echo "$email";
	echo "$message";

	$sql = "INSERT INTO contact (name,email, message)" ." VALUES ('$name','$email','$message')";

		if ($mysqli->query($sql) === TRUE) {
		    $_SESSION['message']= "New record created successfully";
			header('Location: contact.php');
		} else {
		    echo "Error: " . $sql . "<br>" . $mysqli->error;
			$_SESSION['message']="Sorry! We are unable to create your record now. Please try again!";
			header('Location: contact.php');
		}

	}
?>

