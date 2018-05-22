<?php
/**
 * Created by PhpStorm.
 * User: udara
 * Date: 12/8/2017
 * Time: 7:08 PM
 */

include('db_con.php');

$sql_sensory="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          WHERE 
                discussion.section='sensory'
          ORDER BY
                discussion.date DESC 
          ";
$results_sensory=$conn->query($sql_sensory);



$sql_motor="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          WHERE 
                discussion.section='motor control'
          ORDER BY
                discussion.date DESC 
          ";
$results_motor=$conn->query($sql_motor);


$sql_lang="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          WHERE 
                discussion.section='language'
          ORDER BY
                discussion.date DESC 
          ";
$results_lang=$conn->query($sql_lang);



$sql_regu="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          WHERE 
                discussion.section='regulation'
          ORDER BY
                discussion.date DESC 
          ";
$results_regu=$conn->query($sql_regu);



$sql_cog="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          WHERE 
                discussion.section='cognition'
          ORDER BY
                discussion.date DESC 
          ";
$results_cog=$conn->query($sql_cog);



$sql_lat="SELECT 
                discussion.discussion_id,discussion.section,discussion.topic,discussion.content,discussion.date,users.fname
          FROM 
                discussion
          INNER JOIN 
                users
          ON 
                discussion.user_id=users.user_id
          WHERE 
                discussion.section='lateralization'
          ORDER BY
                discussion.date DESC 
          ";
$results_lat=$conn->query($sql_lat);



$conn->close();
?>


