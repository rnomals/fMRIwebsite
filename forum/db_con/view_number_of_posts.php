<?php

//database connection
include("db_con.php");

//***********************************************************************************************************************************
//SENSORY
//************************************************************************************************************************************

$sensory_post="SELECT COUNT(discussion_id) FROM discussion WHERE section='sensory'";
$sensory_comm="SELECT 
    COUNT(comment.comm_id)
FROM 
    comment
INNER JOIN 
    discussion 
ON
    comment.discussion_id=discussion.discussion_id
WHERE 
    discussion.section='sensory'";

$sen_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='sensory' AND discussion.date IN(SELECT Max(discussion.date))";


//Number of posts about sensory in Discussion table
$num_sen_post=$conn->query($sensory_post);
$results_sen_post=$num_sen_post->fetch_array();
//no.of comments->sensory
$num_sen_comm=$conn->query($sensory_comm);
$results_sen_comm=$num_sen_comm->fetch_array();

//getting the publisher and the latest date of the sensory posts
$sen_user_date=$conn->query($sen_latest_updater_query);
$results_sen_user_data=$sen_user_date->fetch_assoc();

//***************************************************************************************************************************************
//Motor Control
//****************************************************************************************************************************************

$motor_post="SELECT COUNT(discussion_id) FROM discussion WHERE section='motor control'";
$motor_comm="SELECT 
    COUNT(comment.comm_id)
FROM 
    comment
INNER JOIN 
    discussion 
ON
    comment.discussion_id=discussion.discussion_id
WHERE 
    discussion.section='motor control'";

$motor_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='motor control' AND discussion.date IN(SELECT Max(discussion.date))";



//Number of posts about motor control in Discussion table
$num_motor_post=$conn->query($motor_post);
$results_motor_post=$num_motor_post->fetch_array();
//no.of comments->Motor
$num_motor_comm=$conn->query($motor_comm);
$results_motor_comm=$num_motor_comm->fetch_array();

//getting the publisher and the latest date of the motor control posts
$mot_user_date=$conn->query($motor_latest_updater_query);
$results_mot_user_data=$mot_user_date->fetch_assoc();

//*****************************************************************************************************************************************************
//Language
//*************************************************************************************************************************************************

$language_post="SELECT COUNT(discussion_id) FROM discussion WHERE topic='language'";
$language_comm="SELECT 
    COUNT(comment.comm_id)
FROM 
    comment
INNER JOIN 
    discussion 
ON
    comment.discussion_id=discussion.discussion_id
WHERE 
    discussion.section='language'";

$lan_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='language' AND discussion.date IN(SELECT Max(discussion.date))";


//Number of posts about language in Discussion table
$num_lan_post=$conn->query($language_post);
$results_lan_post=$num_lan_post->fetch_array();
//no.of comments->language
$num_lan_comm=$conn->query($language_comm);
$results_lan_comm=$num_lan_comm->fetch_array();


//getting the publisher and the latest date of the language posts
$lan_user_date=$conn->query($lan_latest_updater_query);
$results_lan_user_data=$lan_user_date->fetch_assoc();


//**********************************************************************************************************************************************
//Regulation
//*******************************************************************************************************************************************

$regulation_post="SELECT COUNT(discussion_id) FROM discussion WHERE section='regulation'";
$regulation_comm="SELECT 
    COUNT(comment.comm_id)
FROM 
    comment
INNER JOIN 
    discussion 
ON
    comment.discussion_id=discussion.discussion_id
WHERE 
    discussion.section='regulation'";

$motor_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='motor control' AND discussion.date IN(SELECT Max(discussion.date))";

$regu_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='regulation' AND discussion.date IN(SELECT Max(discussion.date))";


//Number of posts about regulation in Discussion table
$num_regu_post=$conn->query($regulation_post);
$results_regu_post=$num_regu_post->fetch_array();
//no.of comments->regulation
$num_regu_comm=$conn->query($regulation_comm);
$results_regu_comm=$num_regu_comm->fetch_array();

//getting the publisher and the latest date of the regulations posts
$regu_user_date=$conn->query($regu_latest_updater_query);
$results_regu_user_data=$regu_user_date->fetch_assoc();


//******************************************************************************************************************************************
//Cognition
//*****************************************************************************************************************************************
$cognition_post="SELECT COUNT(discussion_id) FROM discussion WHERE section='cognition'";
$cognition_comm="SELECT 
    COUNT(comment.comm_id)
FROM 
    comment
INNER JOIN 
    discussion 
ON
    comment.discussion_id=discussion.discussion_id
WHERE 
    discussion.section='cognition'";

$cog_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='cognition' AND discussion.date IN(SELECT Max(discussion.date))";

//Number of posts about cognition in Discussion table
$num_cog_post=$conn->query($cognition_post);
$results_cog_post=$num_cog_post->fetch_array();
//no.of comments->cognition
$num_cog_comm=$conn->query($cognition_comm);
$results_cog_comm=$num_cog_comm->fetch_array();

//getting the publisher and the latest date of the cognition posts
$cog_user_date=$conn->query($cog_latest_updater_query);
$results_cog_user_data=$cog_user_date->fetch_assoc();

//**********************************************************************************************************************************************
//lateralization
//****************************************************************************************************************************************

$laterlization_post="SELECT COUNT(discussion_id) FROM discussion WHERE topic='lateralization'";
$lateralization_comm="SELECT 
    COUNT(comment.comm_id)
FROM 
    comment
INNER JOIN 
    discussion 
ON
    comment.discussion_id=discussion.discussion_id
WHERE 
    discussion.section='lateralization'";

$lat_latest_updater_query="SELECT users.fname,discussion.date 
FROM 
    users 
INNER JOIN 
    discussion 
ON 
    users.user_id=discussion.user_id 
WHERE 
    discussion.section='lateralization' AND discussion.date IN(SELECT Max(discussion.date))";



//Number of posts about lateralization in Discussion table
$num_lat_post=$conn->query($laterlization_post);
$results_lat_post=$num_lat_post->fetch_array();
//no.of comments->sensory
$num_lat_comm=$conn->query($language_comm);
$results_lat_comm=$num_lat_comm->fetch_array();

//getting the publisher and the latest date of the cognition posts
$lat_user_date=$conn->query($lat_latest_updater_query);
$results_lat_user_data=$lat_user_date->fetch_assoc();


//**************************************************************************************************************************************

$conn->close();
    ?>