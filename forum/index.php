<?php
include("./db_con/view_number_of_posts.php");
include "../database.php";
include "../login/login.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>fMRI Data Portal | Forum</title>

		<!-- Bootstrap,CSS -->
        <link rel="shortcut icon" href="../TemplateData/favicon.ico">
        <link rel="stylesheet" href="../TemplateData/style.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/user-style.css">
        <link rel="stylesheet" href="../css/forum.css">

	</head>


	<body>
		<header id="main-header">
            <div class="container">
                <div class="row ">
                    <div class="col-xs-2 col-sm-2 col-md-5 col-lg-5">
                        <h1><b><span class="primary-text">fMRI</span> Data Portal</b></h1>
                    </div>
                   <div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
                        <div class="pull-right">
                            <nav id="navbar">
                                <ul>
                                    <li><b><a href="../index.php">Home</a></b></li>

                                    <li class="dropdown"><b>
                                        <a href="#" class="dropbtn" id="drop" data-toggle="dropdown" role="button" aria-expanded="false">Research Area <span class="caret"></span></a></b>
                                        <ul class="dropdown-content" style="position: absolute" id="content">
                                            <li><a href="../research/sensory.php">Sensory</a></li>
                                            <li><a href="../research/motorcontrol.php">Motor Control</a></li>
                                            <li><a href="../research/regulation.php">Regulation</a></li>
                                            <li><a href="../research/language.php">Language</a></li>
                                            <li><a href="../research/laterlization.php">Laterlization</a></li>
                                            <li><a href="../research/emotion.php">Emotion</a></li>
                                            <li><a href="../research/cognition.php">Cognition</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><b><a href="index.php" target="_blank">Forum</a></b></li>
                                    <li><a href="../contact.php"><b>Contact</b></a></li>



                                    <!-- <li><a href="">Forum</a></li>-->

		                            <?php
		                            if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){
			                            //echo $_SESSION['logout'];
			                            echo '<li><b><a href="../login/logout.php">Logout</a></b></li>';

		                            }
		                            else {
			                            //echo $_SESSION['login'];
			                            echo '<li><b><a href="../login/login_signup.php">Login</a></b></li>';
		                            }
		                            ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
	            <?php if(isset($_SESSION['username']) AND !empty($_SESSION['username'])) {
		            echo "<div class='row'>";
		            echo " <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'> ";
		            echo " <div class='pull-right'>
                            <div id='newbar'>
                                <span>
                                    <div class='dropdown' id = 'dropdown' hidden>";
		            echo "<span class='primary-text'>"; echo "Welcome,"; echo "</span>";
		            echo " <a class='dropbtn' type='button' data-toggle='dropdown'>";
		            echo $_SESSION['username'];
		            echo"  <span class='caret'></span></a>
                                            <div class='dropdown-content' id='profile'>
                                                <a href='../myprofile.php' style='font-size: 16px; padding-left: 5px;padding-right: 5px;'>My Profile</a>
                                            </div>
                                    </div>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>"; }?>
            </div>
        </header>
        
        <!--Start of the forum section-->
        
        <div id="forum">

        </div>
        <div class="row" id="sub">
            <div class="text-center">
                <div class="pull-center">
                    <nav id="subnav">

                        <!-- normal collapsible navbar markup -->
                        <ul>
                            <li class="current"><a href="index.php">Categories</a></li>
                            <li><a href="all_post.php">View Forum</a></li>
	                        <?php
                                    if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){
                                        echo " <li><a href='new_post.php'>Add post</a></li>";
                                    }
	                        ?>

                        </ul>
                    </nav>
                </div>
            </div>

        </div>
        
            <div class="container">
                <table class="table table-responsive">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="forum-col">Forum</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Posts</th>
                        <th scope="col" class="last-post-col">Last updated</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    <h3><a href="view_sensory_posts.php">Sensory</a></h3>
                                </td>
                                <td>
                                    <div><?= $results_sen_comm[0]?></div>
                                </td>
                                <td>
                                    <div><?= $results_sen_post[0]?></div>
                                </td>
                                <td>
                                    <?php if($results_sen_user_data['fname']== NULL){
                                        echo "<div>No Posts </div>";
                                    }
                                    else { ?>
                                    <div>by <a class="name"><i><?=$results_sen_user_data['fname']?></i></a></div>
                                    <div><?php $date=date_create($results_sen_user_data['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
                                   <?php }?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3><a href="view_motor_posts.php">Motor Control</a></h3>
                                </td>
                                <td>
                                    <div><?= $results_motor_comm[0]?></div>
                                </td>
                                <td>
                                    <div><?= $results_motor_post[0]?></div>
                                </td>
                                <td>
	                                <?php if($results_mot_user_data['fname']== NULL){
		                                echo "<div>No Posts </div>";
	                                }
	                                else { ?>
                                    <div>by <a class="name"><i><?=$results_mot_user_data['fname']?></i></a></div>
                                    <div><?php $date=date_create($results_mot_user_data['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
	                                <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3><a href="view_lang_posts.php">Language</a></h3>
                                </td>
                                <td>
                                    <div><?= $results_lan_comm[0]?></div>
                                </td>
                                <td>
                                    <div><?= $results_lan_post[0]?></div>
                                </td>
                                <td>
	                                <?php if($results_lan_user_data['fname']== NULL){
		                                echo "<div>No Posts </div>";
	                                }
	                                else { ?>
                                        <div>by <a class="name"><i><?=$results_lan_user_data['fname']?></i></a></div>
                                    <div><?php $date=date_create($results_lan_user_data['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
	                                <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3><a href="view_regulation_post.php">Regulation</a></h3>
                                </td>
                                <td>
                                    <div><?= $results_regu_comm[0]?></div>
                                </td>
                                <td>
                                    <div><?= $results_regu_post[0]?></div>
                                </td>
                                <td>
	                                <?php if($results_regu_user_data['fname']== NULL){
		                                echo "<div>No Posts </div>";
	                                }
	                                else { ?>
                                        <div>by <a class="name"><i><?=$results_regu_user_data['fname']?></i></a></div>
                                    <div><?php $date=date_create($results_regu_user_data['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
	                                <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3><a href="view_cognition_posts.php">Cognition</a></h3>
                                </td>
                                <td>
                                    <div><?= $results_cog_comm[0]?></div>
                                </td>
                                <td>
                                    <div><?= $results_cog_post[0]?></div>
                                </td>
                                <td>
	                                <?php if($results_cog_user_data['fname']== NULL){
		                                echo "<div>No Posts </div>";
	                                }
	                                else { ?>
                                        <div>by <a class="name"><i><?=$results_cog_user_data['fname']?></i></a></div>
                                    <div><?php $date=date_create($results_cog_user_data['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
	                                <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3><a href="view_lateralization_post.php">Laterlization</a></h3>
                                </td>
                                <td>
                                    <div><?= $results_lat_comm[0]?></div>
                                </td>
                                <td>
                                    <div><?= $results_lat_post[0]?></div>
                                </td>
                                <td>
	                                <?php if($results_lat_user_data['fname']== NULL){
		                                echo "<div>No Posts </div>";
	                                }
	                                else { ?>
                                        <div>by <a class="name"><i><?=$results_lat_user_data['fname']?></i></a></div>
                                    <div><?php $date=date_create($results_lat_user_data['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
	                                <?php }?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        <!--FOOTER-->
        <footer id="main-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>Copyright &copy; 2017 | BrainStorm</p>

                    </div>
                </div>
            </div>
        </footer>


		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.bundle.min.js"></script>
	</body>
</html>