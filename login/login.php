<?php

/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 9/20/2017
 * Time: 10:32 AM
 */
include '../database.php';
session_start();
$_SESSION['message'] ='';

//user login process, check if user exists and password is correct.
//escape username to protect against SQL injections.
if(isset($_POST['username']) && isset($_POST['password'])) {

	if ( ! empty( $_POST['username'] ) && ! empty( $_POST['password'] ) ) {
		$username = $mysqli->escape_string( $_POST['username'] );
		$password = md5( $_POST['password'] );

		//query for users table
		$result   = $mysqli->query( "SELECT * FROM users WHERE username = '$username' AND password = '$password'" );
		//query for admin table
		$q        = $mysqli->query( "SELECT * FROM admin WHERE username = '$username'AND password = '$password' " );

		/*testing*/

		/*if($q){
			echo"success";
		}
		else{
			echo"failed";
		}*/

		if ( $q->num_rows > 0 && $result->num_rows == 0 ) { //if the user is admin
			$admin                 = $q->fetch_assoc();
			$_SESSION['username']  = $admin['username'];
			$_SESSION['firstname'] = $admin['firstname'];
			$_SESSION['email']     = $admin['email'];

			header( "location: ../admin/examples/dashboard.php" );

		}
		elseif ( $q->num_rows == 0 && $result->num_rows > 0 ) { //if it's a normal user
			$user = $result->fetch_assoc();

			if($user['active']==1){

				$_SESSION['username']  = $user['username'];
				$_SESSION['fname']     = $user['fname'];
				$_SESSION['email']     = $user['email'];
				$_SESSION['cnfrm_doc'] = $user['cnfrm_doc'];
				$_SESSION['id']        = $user['user_id'];
				$date                  = date( "m.d.y" );
				$time                  = date( "g:i a" );

				//insert the login time and date into the database
				$sql  = "INSERT INTO log (log_date,log_time,user_id)" . "VALUES ('$date','$time','" . $_SESSION['id'] . "')";
				$_SESSION['logged_in'] = true;
				header( "location: ../index.php" );
			}
			else {
				$_SESSION['message']="You still cannot log in to the system. wait until admin accepts you";
				header("location:login_signup.php");
			}

		}
		else { //if the user is not in the database.
			$_SESSION['message'] = "Username or Password is incorrect";
			header( "location:login_signup.php" );
		}
	}
}

?>