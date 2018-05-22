<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>fMRI Data Portal | Contact</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/user-style.css" rel="stylesheet">
      
    </head>
    
    <body>
        <!--HEADER-->
        <header id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-6 col-lg-6">
                        <h1><b><span class="primary-text">fMRI</span> Data Portal</b></h1>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-6 col-lg-6">
                        <div class="pull-right">
                             <nav id="navbar">
                                <ul>
                                    <li ><b><a href="index.php">Home</a></b></li>
                                    <li class="dropdown"><b>
                                        <a href="#" class="dropbtn" id="drop" data-toggle="dropdown" role="button" aria-expanded="false">Research <span class="caret"></span></a></b>
                                        <ul class="dropdown-content"style="position: absolute" id="content">
                                            <li><a href="research/sensory.php">Sensory</a></li>
                                            <li><a href="research/motorcontrol.php">Motor Control</a></li>
                                            <li><a href="research/regulation.php">Regulation</a></li>
                                            <li><a href="research/language.php">Language</a></li>
                                            <li><a href="research/laterlization.php">Laterlization</a></li>
                                            <li><a href="research/emotion.php">Emotion</a></li>
                                            <li><a href="research/cognition.php">Cognition</a></li>
                                        </ul>
                                    </li>

	                                <li><b><a href='forum/index.php' target='_blank'>Forum</a></b></li>
                                    <li class="current"><b><a href="contact.php">Contact</a></b></li>
                                    <?php
                                           if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){
                                               echo '<li><b><a href="login/logout.php">Logout</a></b></li>';
                                           }
                                           else {
                                                echo '<li><b><a href="login/login_signup.php">Login</a></b></li>';
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
                                            <div class='dropdown-content'id='profile'>
                                                <a href='myprofile.php' style=''>My Profile</a>
                                            </div>
                                    </div>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>"; }?>
            </div>
        </header>
        
         <!--SUBHEADER-->
        <section id="subheader">
             <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2  style="color: black;">Contact Us</h2>
                    </div>
                 </div>
            </div>
        </section>
        
        <!--MAIN PAGE-->
        <section id="page" class="contact">
             <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2><span class="primary-text">Get</span> In Touch</h2>
                        <p style="color: black;"> We are here to answer any question you have regarding this website or studies.</p>
                        <?php if(isset($_SESSION['message'])){?>
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: relative; bottom: 20px">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <p><?php echo $_SESSION['message'];?></p>

                                </div>
                        <?php }?>
                        <form action="contactform.php" autocomplete="off" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label>Name</label><br>
                                  <input type="text" class="form-control-center" name="name" placeholder="Add Your Name" required>
                              </div>
                              <div class="form-group">
                                  <label>Email</label><br>
                                  <input type="email" class="form-control-center"  name="email" placeholder="Add Your Email" required>
                              </div>
                              <div class="form-group">
                                  <label>Message</label><br>
                                  <textarea class="form-control-center" name = "message" placeholder="Add Your Message" required></textarea>
                              </div>
                             <input type="submit" class="btn btn-info" value="Submit">
                        </form>
                        
                    </div>
                 </div>
            </div>
        </section>
        
          <!--COMPANY-->
        <section id="company">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h2 style="color: white">Contact Us</h2>
                        <ul>
                            <li style="color: white"><span class="glyphicon glyphicon-envelope"></span> fmribrainstorm@gmail.com</li>
                        </ul>
                    </div>               
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h2 style="color: white">Read More</h2>
                        <a href="../brainstorm" target="_blank">fMRIdataportal.blog</a>
                    </div>

                </div>
            </div>
        </section>
        
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $('.alert').hide();
        $(document).ready(function (){
            $('.close').click(function () {
                $('.alert').hide();
            });
        });
    </script>

    </body>
</html>