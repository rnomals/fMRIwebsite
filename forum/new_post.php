<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Forum-Create new topic</title>

        <!-- Bootstrap,CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">

		<!--custom style sheets-->
      	<link href="../css/style.css" rel="stylesheet">
      	<link href="../css/user-style.css" rel="stylesheet">
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
                                            <div class='dropdown-content'>
                                                <a href='../myprofile.php'>My Profile</a>
                                            </div>
                                    </div>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>"; }?>
            </div>
        </header>

        <div id="forum">

        </div>
        <div class="row" id="sub">
            <div class="text-center">
                <div class="pull-center">
                    <nav id="subnav">

                        <!-- normal collapsible navbar markup -->
                        <ul>
                            <li ><a href="index.php">Categories</a></li>
                            <li ><a href="all_post.php">View Forum</a></li>
                            <li class="current"><a href="new_post.php">Add post</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <!-- your page content -->
                    <div class="container">
                        <h1 style="margin-bottom: 20px;">Create new discussion</h1>
                        <form class="mb-3" method="post" action="./db_con/new_post.php" >

                            <div class="form-group">
                                <label for="topic">Section / Main Functionality:</label>
                                <select name="section" class="form-control">
                                    <option value="sensory">Sensory Function</option>
                                    <option value="motor control">Motor Control Function</option>
                                    <option value="cognition">Cognitive Function</option>
                                    <option value="lateralization">Lateralization Function</option>
                                    <option value="regulation">Regulation Function</option>
                                    <option value="language">Language Function</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="topic">Topic :</label>
                                <input type="text" class="form-control" name="topic" placeholder="Give your discussion a title." required="">
                            </div>

                            <div class="form-group">
                                <label for="comment">Content:</label>
                                <textarea class="form-control" name="content" rows="10" placeholder="write your idea here" required=""></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary"name="add_post" value="ADD POST">
                            <input type="reset" class="btn btn-danger" name="reset_post" value="RESET">
                        </form>
                    </div>


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