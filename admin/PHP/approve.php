<?php

include("../config/db_connect.php");

if(isset($_POST['confirm'])){

	$user_id=$_POST['user_id'];
		
	/*if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
		*/
	$sql="UPDATE users
SET active = 1
WHERE user_id ='$user_id' ";

if ($conn->query($sql) === TRUE) {
   
    header('location:../examples/user.php');
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	/*if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}*/
	
}


if(isset($_POST['deny'])){

	$user_id=$_POST['user_id'];
		
	/*if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
		*/
	$sql="DELETE FROM users
	WHERE user_id ='$user_id' ";

if ($conn->query($sql) === TRUE) {
   
    header('location:../examples/user.php');
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	/*if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}*/
	
}

if(isset($_POST['remove'])){

	$user_id=$_POST['user_id'];
		
	/*if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
		*/
	$sql="DELETE FROM users
	WHERE user_id ='$user_id' ";

if ($conn->query($sql) === TRUE) {
   
    header('location:../examples/user.php');
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	/*if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}*/
	
}

?>

