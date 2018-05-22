<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 9/20/2017
 * Time: 1:58 PM
 */
require '../database.php';
session_start();

//make sure email and password are not empty
if(isset($_POST['usernamesignup']) && !empty($_POST['usernamesignup']) AND isset($_POST['passwordsignup']) && !empty($_POST['passwordsignup'])) {
    $username = $mysqli->escape_string($_POST['usernamesignup']);
    $password = md5($_POST['passwordsignup']);

    //select user with matching username and password
    $result = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' AND active = '0'");

    if($result->num_rows == 0){
        $_SESSION['message'] = "Your account has been already activated or URL is invalid";
        header("location:../errors/error.php");
    }
    else{
        $_SESSION['message'] = "your account has been activated";

        //set the active = 1
        $mysqli->query("UPDATE users SET active='1' WHERE username = '$username'");
        $_SESSION['active'] = 1;

        header("location: ../successes/success.php");
    }
}
else{
    $_SESSION['message']="Invalid parameters provided for account verification";
    header("location:../errors/error.php");
}
?>