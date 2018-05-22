
<?php
include 'database.php';
session_start();
$oldusername = $_SESSION['username'];
//query for users
$result1 = $mysqli->query("SELECT * FROM users WHERE username ='$oldusername'") or die($mysqli->error());
$row = $result1->fetch_assoc();
$user_id = $row['user_id'];
//query for profile
$result2 =  $mysqli->query("SELECT * FROM profile WHERE user_id = '$user_id'");
$row_profile = $result2->fetch_assoc();

if(isset($_POST['profilesubmit'])){
	$name = $mysqli->real_escape_string($_POST['name']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$username = $mysqli->real_escape_string($_POST['uname']);
	$role = $mysqli->real_escape_string($_POST['role']);

	$sql1 = $mysqli->query("UPDATE users SET fname = '$name',email = '$email',username = '$username' WHERE user_id = '$user_id'");
    $sql2 = $mysqli->query("UPDATE profile SET role = '$role' WHERE user_id = '$user_id'");


}

if(isset($_POST['biosubmit'])){
	$bio = $mysqli->real_escape_string($_POST['bio']);
	$sql3 = $mysqli->query("UPDATE profile SET bio = '$bio' WHERE user_id = '$user_id'");

}

if(isset($_POST['websubmit'])){
	$website = $mysqli->real_escape_string($_POST['web']);
	$sql4 = $mysqli->query("UPDATE profile SET websites = '$website'WHERE user_id = '$user_id' ");
}

if(isset($_POST['passsubmit'])){
    if($_POST['newpass'] == $_POST['conpass']){
	    $password = md5($_POST['newpass']);
	    $sql5 = $mysqli->query("UPDATE users SET password = '$password'");
    }


}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">

    <title>fMRI Data Portal | user profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!--custome style sheet-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/user-style.css" rel="stylesheet">

    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
   <!--HEADER-->
   <header id="main-header">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-sm-2 col-md-5 col-lg-5">
                   <h1><b><span class="primary-text">fMRI</span> Data Portal</b></h1>
               </div>
               <div class="col-xs-12 col-sm-10 col-md-7 col-lg-7">
                   <div class="pull-right">
                       <nav id="navbar">
                           <ul>
                               <li><b><a href="index.php">Home</a></b></li>
                               <li class="dropdown"><b>
                                   <a href="#" class="dropbtn" id="drop" data-toggle="dropdown" role="button" aria-expanded="false">Research <span class="caret"></span></a></b>
                                   <ul class="dropdown-content" id="content">
                                       <li><a href="research/sensory.php">Sensory</a></li>
                                       <li><a href="research/motorcontrol.php">Motor Control</a></li>
                                       <li><a href="research/regulation.php">Regulation</a></li>
                                       <li><a href="research/language.php">Language</a></li>
                                       <li><a href="research/laterlization.php">Laterlization</a></li>
                                       <li><a href="research/emotion.php">Emotion</a></li>
                                       <li><a href="research/cognition.php">Cognition</a></li>
                                   </ul>
                               </li>
	                           <?php
                               if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){
                               echo "<li><b><a href='forum/index.php' target='_blank'>Forum</a></b></li>";
                               }
                               ?>
                               <li><b><a href="contact.php">Contact</a></b></li>

                               <li><b><a href="login/logout.php">Logout</a></b></li>

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
                           <span class='primary-text'>Welcome,</span>
                               <div class='dropdown' id = 'dropdown' hidden>";
                                   echo " <a class='dropbtn' type='button' data-toggle='dropdown'>";
                                   echo $_SESSION['username'];
                                   echo"  <span class='caret'></span></a>
                                            <div class='dropdown-content' style='position:absolute; right:300px;'>
                                                <a href='myprofile.php'>My Profile</a>
                                            </div>
                                </div>

                           </span>
                      </div>
                  </div>
               </div>
           </div>"; }?>
       </div>
   </header>

   <div class="container target">
       <div class="row">
           <div class="col-sm-6">
               <h1 class="">
                   <?php
                   if(isset($_SESSION['username']) AND !empty($_SESSION['username'])) {
                       echo $_SESSION['username'];
                   }
                   ?>
               </h1>
               <!--button trigger modal-->
               <button type="button" class="btn btn-success" data-toggle="modal" id="myBtn" data-target="#myModal">Change Password</button>

               <!--Modal-->
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                   <div class="modal-dialog" >
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title" id="myModalLabel">Change your password</h4>
                           </div>
                           <div class="modal-body">
                               <form action="myprofile.php" method="post" role="form">

                                   <div class="form-group">
                                       <label>Change your Password</label>
                                       <input type="password" class="form-control" name="newpass" placeholder="change your password">

                                   </div>
                                   <div class="form-group">
                                       <label>Confirm your Password</label>
                                       <input type="password" class="form-control" name="conpass" placeholder="confirm password">

                                   </div>

                                   <button type="submit" name = "passsubmit" class="btn btn-primary">Save changes</button>
                               </form>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                           </div>
                       </div>
                   </div>
               </div>
               <br>
           </div>
           <div class="col-sm-6" style="padding-top: 20px; padding-right: 30px;">
                   <fieldset id="profilepic_controls">

                       <?php
                       $q = $mysqli->query("SELECT * FROM profile WHERE user_id = '$user_id'");

                       $row2 = $q->fetch_assoc();
                       if($row2['profile_image'] == ""){
                           echo "<img title='profile image' class='img-circle img-responsive' src='images/149071.png' alt='image' style='padding-top: 20px;'>";
                       }
                       else {
                           echo "<img title='profile image' class='img-circle img-responsive' src ='profile_pic/".$row2['profile_image']."' alt='image' style='padding-top: 20px; width:200px; height:200px;'>";
                       }?>

                       <!--modal 2 trigger-->
                       <button style="margin-top: 20px; position: relative;left:50px;" type="button" class="btn btn-warning" data-toggle="modal" id="myProBtn" data-target="#myModal2">Upload Image</button>

                       <!--modal content-->
                       <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                           <div class="modal-dialog" >
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="myModalLabel2"></h4>
                                   </div>
                                   <div class="modal-body">
                                       <form action="profile.php" method="post" enctype="multipart/form-data">
                                           <input type="file" name="file" id="camerainput1" hidden="hidden">
                                           <button type="submit" name="submit" class="btn btn-default btn-sm">Upload</button>

                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>



                   </fieldset>

                </div>
            </div>
            <br>

            <?php
               $sql3 = $mysqli->query("SELECT * FROM profile WHERE user_id = '$user_id'");
               $row1 = $sql3->fetch_assoc();
            ?>

       <div class="row">
           <div class="col-sm-5" style="" contenteditable="false">
               <div class="panel panel-default">
                   <div class="panel-heading" style="background-color: #888888; color:black">About Me
                       <!--modal trigger-->
                       <button class="btn btn-success" data-toggle="modal" id="btn" data-target="#modal1">Edit</button>
                       <!--modal content-->
                       <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModal">
                           <div class="modal-dialog" >
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="myModal"></h4>
                                   </div>
                                   <div class="modal-body">
                                       <form action="myprofile.php" method="post" enctype="multipart/form-data">
                                           <textarea class="form-control" rows="3" name="bio" placeholder="Enter your bio" ></textarea>
                                           <button type="submit" name="biosubmit" class="btn btn-default btn-sm">Submit</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </div>

                   <div class="panel-body"><?php echo $row1['bio'];?>

                   </div>
               </div>

               <div class="panel panel-default">
                   <div class="panel-heading" style="background-color: #888888; color:black">Website <span class="glyphicon glyphicon-link"></span>
                       <!--modal trigger-->
                       <button class="btn btn-success" data-toggle="modal" id="btn1" data-target="#modal2">Edit</button>
                       <!--modal content-->
                       <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModal1">
                           <div class="modal-dialog" >
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="myModal1"></h4>
                                   </div>
                                   <div class="modal-body">
                                       <form action="myprofile.php" method="post" enctype="multipart/form-data">
                                           <textarea class="form-control" rows="3" name="web" placeholder="Enter your websites links"></textarea>
                                           <button type="submit" name="websubmit" class="btn btn-default btn-sm">Submit</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </div>
                   <div class="panel-body"><a href="<?php echo $row1['websites']?>" target="_blank" class=""><?php echo $row1['websites']?></a>
                   </div>
               </div>

               <ul class="list-group">
                   <li class="list-group-item text-muted" style="background-color: #888888; color:black">Activity <span class="glyphicon glyphicon-dashboard"></span>

                   </li>
                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Post</strong></span>
                       <?php
                       $query = "SELECT * FROM discussion WHERE user_id  = '$user_id'";
                       $result_query = $mysqli->query($query);
                       echo $result_query->num_rows;
                       ?>
                   </li>
                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Comments</strong></span>
	                   <?php
	                   $query = "SELECT * FROM comment WHERE user_id  = '$user_id'";
	                   $result_query = $mysqli->query($query);
	                   echo $result_query->num_rows;
	                   ?>
                   </li>
                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Suggesions</strong></span>
	                   <?php
	                   $query = "SELECT * FROM suggestion WHERE user_id  = '$user_id'";
	                   $result_query = $mysqli->query($query);
	                   echo $result_query->num_rows;
	                   ?>
                   </li>

               </ul>
           </div>
           <div class="col-sm-7">
               <!--right col-->
               <ul class="list-group">

                   <li class="list-group-item text-muted " contenteditable="false" style="background-color: #888888; color:black">Profile <span class="glyphicon glyphicon-user"></span>
                       <!--modal trigger-->
                       <button class="btn btn-success" data-toggle="modal" id="btn2" data-target="#modal3">Edit</button>
                       <!--modal content-->
                       <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModal2">
                           <div class="modal-dialog" >
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="myModal2"></h4>
                                   </div>
                                   <div class="modal-body">
                                       <form action="myprofile.php" method="post" enctype="multipart/form-data">
                                           <div class="form-group">
                                               <label>Name</label>
                                               <input type="text" class="form-control" name="name" placeholder="change your name" required>

                                           </div>
                                           <div class="form-group">
                                               <label>Username</label>
                                               <input type="text" class="form-control" name="uname" placeholder="change your Username" required>

                                           </div>
                                           <div class="form-group">
                                               <label>Email</label>
                                               <input type="email" class="form-control" name="email" placeholder="change your email" required>

                                           </div>
                                           <div class="form-group">
                                               <label>Role</label>
                                               <input type="text" class="form-control" name="role" placeholder="What is your role" required>

                                           </div>
                                           <button type="submit" name="profilesubmit" class="btn btn-default btn-sm">Submit</button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </li>

                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Username</strong></span>
                       <?php echo $_SESSION['username'];?>
                   </li>
                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name</strong></span>
                       <?php echo $_SESSION['fname'];?>
                   </li>
                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Email</strong></span>
                       <?php echo $_SESSION['email']?>
                      </li>
                   <li class="list-group-item text-right"><span class="pull-left"><strong class="">Role</strong></span>
                       <?php echo $row1['role']?></li>
               </ul>

               </div>

           <!--/col-3-->

              </div>
       </div>


           <div id="push"></div>




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
