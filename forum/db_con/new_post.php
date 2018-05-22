<?php
/**
 * Created by PhpStorm.
 * User: Udara
 * Date: 12/8/2017
 * Time: 9:05 AM
 */
session_start();

include('db_con.php');
date_default_timezone_set('UTC');

if (isset($_SESSION['id'])) {

    if (isset($_POST['add_post'])) {
        $section = $_POST['section'];
        $topic = $_POST['topic'];
        $content = $_POST['content'];
        $user_id = $_SESSION['id'];
        $date = date("Y-m-d H:i:s");


        $sql = "INSERT INTO discussion
            (section,topic,user_id,date,content)
        VALUES('$section','$topic','$user_id','$date','$content')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record added succesfully.')</script>;";
            echo "<script>window.location.href = '../new_post.php';</script>";

        } else {
            echo "Error" . $conn->error;
        }
        $conn->close();


    }
}else{
    header('location: ../login/login_signup.php');
}