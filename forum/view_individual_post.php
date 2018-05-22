
<?php /**
 * Created by PhpStorm.
 * User: Udara
 * Date: 12/9/2017
 * Time: 9:07 AM
 */
session_start();
include_once('./db_con/db_con.php');

if(isset($_POST['single_discussion'])){


	$discussion_id=$_POST['discussion_id'];
	$user_name=$_POST['user_name'];
	$date=$_POST['date'];
	$topic=$_POST['topic'];
	$section=$_POST['section'];
	$content=$_POST['content'];

	$_SESSION['discussion_id']=$discussion_id;
	$_SESSION['date']=$date;
	$_SESSION['topic']=$topic;
	$_SESSION['section']=$section;
	$_SESSION['content']=$content;
	//$_SESSION['user_name']=$user_name;



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
           ORDER BY
              comment.date DESC 
              
                 ";
	$sql2 = "SELECT profile.profile_image FROM profile INNER JOIN comment ON profile.user_id = comment.user_id WHERE
              comment.discussion_id='$discussion_id'
           ORDER BY
              comment.date DESC ";
	$result_profile = $conn->query($sql2);

	$query = "SELECT profile.profile_image FROM profile INNER JOIN discussion ON profile.user_id = discussion.user_id WHERE discussion.discussion_id='$discussion_id'";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	$profile =  $row['profile_image'];
	$results_comments=$conn->query($sql); }

else{

	$discussion_id=$_SESSION['discussion_id'];
	$date=$_SESSION['date'];
	$topic= $_SESSION['topic'];
	$section=$_SESSION['section'];
	$content=$_SESSION['content'];
	//$user_name=$_SESSION['user_name'];

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
          ORDER BY
              comment.date DESC ";

	$query = "SELECT profile.profile_image FROM profile INNER JOIN discussion ON profile.user_id = discussion.user_id WHERE discussion.discussion_id='$discussion_id'";
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	$profile =  $row['profile_image'];
	$results_comments=$conn->query($sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forum</title>

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

<!--Start of the forum section-->

<div id="forum">

</div>
<div class="row" id="sub">
    <div class="text-center">
        <div class="pull-center">
            <nav id="subnav">

                <!-- normal collapsible navbar markup -->
                <ul>
                    <li><a href="index.php">Categories</a></li>
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
                    <h1><?php echo $topic?></h1>
                    <br>
                    <div class="media">
                        <div class="media-left media-top">
                            <img src="../profile_pic/<?php echo $profile;?>" class="media-object img-circle" style="width:50px; height: 60px;">
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading" style="color: #117a8b"><?= $user_name?><small><i> Posted on <?php $posted_date=date_create($date); echo date_format($posted_date, 'l jS F Y \,\ g:ia ');?></i></small></h5>
                            <p><?=$content?></p>
                            <hr>
                            <br>

                        <?php
                    if ($results_comments->num_rows>0) {
	                    while ( $rows = $results_comments->fetch_assoc() ) {
		                    ?>

                            <!-- Nested media object -->
                            <div class="media">
                                <div class="media-left media-top">

                                    <img src="../images/<?php echo $row['profile_image'] ?>" class="media-object"
                                         style="width:20px">

                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><?php echo $rows['fname']; ?>
                                        <small><i>Posted on <?php $date = date_create( $rows['date'] );
							                    echo date_format( $date, 'l jS F Y \,\ g:ia ' ); ?></i></small>
                                    </h6>
                                    <p style="color: #6c757d; font-family:'Arno Pro SmText'"><?= $rows['content'] ?></p>

                                </div>
                            </div>

                            <br>
		                    <?php
	                             }
                                 }
                                ?>
                            <?php
                                if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){?>
                                    <div>
                                        <br>
                                        <h3><span>Add Comment</span></h3>
                                        <form class="mb-3" method="post" action="./db_con/new_comment.php">
                                            <input type="text" name="discussion_id" value="<?=$discussion_id?>" class="hidden">
                                            <div class="form-group">
                                                <textarea class="form-control" name="content" rows="2" placeholder="write your comment here" required=""></textarea>
                                            </div>
                                            <button type="submit" name="add_comment" class="btn btn-primary">Reply</button>
                                            <button type="reset" name="reset_comment" class="btn btn-danger">Reset</button>
                                        </form>
                                    </div>
                                <?php }?>



                        </div>
                    <hr>
                    </div>
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
</body>
</html>

