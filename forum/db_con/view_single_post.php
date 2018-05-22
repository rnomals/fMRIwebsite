<?php
/**
 * Created by PhpStorm.
 * User: Udara
 * Date: 12/9/2017
 * Time: 9:07 AM
 */
if(isset($_POST['single_discussion'])){
    include_once('db_con.php');

    $discussion_id=$_POST['discussion_id'];
    $user_name=$_POST['user_name'];
    $date=$_POST['date'];
    $topic=$_POST['topic'];
    $section=$_POST['section'];


    $sql="SELECT 
                comment.content,comment.date,users.fname
          FROM
              comment
          INNER JOIN 
              users
          ON 
              comment.user_id=users.user_id
          WHERE
              comment.discussion_id='$discussion_id'
              
            ";
    $results_comments=$conn->query($sql);






}