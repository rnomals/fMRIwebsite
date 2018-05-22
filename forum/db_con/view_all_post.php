<?php
/**
 * Created by PhpStorm.
 * User: udara
 * Date: 12/8/2017
 * Time: 7:08 PM
 */

    include('db_con.php');

    $sql="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          ORDER BY
                discussion.date DESC 
          ";
    $results_total_posts=$conn->query($sql);


    $conn->close();
    ?>










