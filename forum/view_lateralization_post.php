<?php
require_once('./db_con/view_posts_functions.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap,CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--custom style sheets-->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/user-style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/forum.css">

    <title>Forum-Board overview</title>

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
    <h2><strong>Lateralization</strong></h2>
    <table class="table table-responsive">
        <thead class="thead-light">
        <tr>
            <th scope="col">Author</th>
            <th scope="col">Post Title</th>
        </tr>
        </thead>
        <tbody>

        <!-------------------------------------------------------------------------------------------------------------------------------------->
		<?php
		while ($total_posts=$results_lat->fetch_assoc())
		{
			?>
            <tr>
                <td class="author-col">
                    <div>by <a class="name"><?= $total_posts['fname'];?></a></div>
                    <div><span class="font-weight-bold">Posted</span><?php $date=date_create($total_posts['date']); echo date_format($date, 'l jS F Y \,\ g:ia ');?></div>
                </td>
                <td class="post-col d-lg-flex justify-content-lg-between">
                    <div><?= $total_posts['topic'];?></div>
                    <form method="post" action="view_individual_post.php">
                        <input type="text" name="user_name" class="hidden" value="<?php echo $total_posts['fname'];?>">
                        <input type="text" name="date" class="hidden" value="<?php echo $total_posts['date'];?>">
                        <input type="text" name="content" class="hidden" value="<?php echo $total_posts['content'];?>">
                        <input type="text" name="topic" class="hidden" value="<?php echo $total_posts['topic'];?>">
                        <input type="text" name="section" class="hidden" value="<?php echo $total_posts['section'];?>">
                        <input type="text" name="discussion_id" class="hidden" value="<?php echo $total_posts['discussion_id'];?>">
                        <button type="submit" name="single_discussion"  class="btn btn-info">View Post</button>
                    </form>


                </td>
            </tr>

		<?php }?>
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