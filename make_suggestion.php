<?php
//defiening variables and set empty values
//$bfunctionErr = $descriptionErr = $brodmanareaErr = $documentErr = " ";
//$bfunction = $description = $brodmanarea= $document= " ";

// Create connection
include 'database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['submit'])) {
		$username    = $_POST["username"];
		$bfunction   = $_POST["bfunction"];
		$description = $_POST["description"];
		$brainarea   = $_POST["brodmannarea"];
		$doc         = $mysqli->real_escape_string( $_POST["file"] );
		$date        = date( "m.d.y" );
		$time        = date( "g:i a" );
		//echo $doc;

		//testing

		//if (empty($_POST["description"])) {
		// $descrptionErr = "Description is required";
		//  }else{
		// $description=function ($_POST["description"]);

		// }
		//  if (empty($_POST["brodmannarea"])) {
		//      $brodmanareaErr = "Indicate the relevant Brodmann Area";
		// }else{
		//     $brainarea=function ($_POST["brodmannarea"]);

		// }

		// if (empty($_POST["document"])) {
		// $documentErr = "Attach the research paper here";
		//  }else{
		//  $document=test_input($_POST["document"]);
		$sql_query = $mysqli->query( "SELECT user_id FROM users WHERE username = '$username'" );
		if($sql_query->num_rows==0){
			$_SESSION['message']="Username does not exist. If you are not sign up yet, Click here to Sign Up";
			header( 'Location:suggestion.php' );
		}
		else{
			$row_query = $sql_query->fetch_assoc();
			$user_id   = $row_query['user_id'];
			$sql       = "INSERT INTO suggestion (bfunction,description,date,time,brodmannarea,document,user_id) VALUES ('$bfunction','$description','$date','$time','$brainarea','$doc',$user_id)";
			if ( $mysqli->query( $sql ) === true ) {
				$_SESSION['message']="You suggestion is successful";
				header( 'Location:suggestion.php' );
			} else {
				echo "Error: " . $sql . "<br>" . $mysqli->connect_error;
			}
		}

	}
}
?>