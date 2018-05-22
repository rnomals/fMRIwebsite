<?php
/**
 * Created by PhpStorm.
 * User: Udara
 * Date: 12/8/2017
 * Time: 9:05 AM
 */

include('db_con.php');
date_default_timezone_set('UTC');

if (isset($_POST['add_comment'])){
    $content=$_POST['content'];
    $user_id=23;
    $date=date("Y-m-d H:i:s");
    $discussion_id=$_POST['discussion_id'];


    $sql = "INSERT INTO comment
            (content,date,user_id,discussion_id)
        VALUES('$content','$date','$user_id','$discussion_id')";

    if ($conn->query($sql)===TRUE) {
        echo "<script>window.location.href = '../view_individual_post.php';</script>";

    }else{
      echo "Error".$conn->error;
    }
    $conn->close();



}