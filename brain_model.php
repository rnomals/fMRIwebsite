<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Competition</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/final.json", {onProgress: UnityProgress});
    </script>	
	
	 <!-- Style sheets-->
      <link rel="shortcut icon" href="TemplateData/favicon.ico">
      <link rel="stylesheet" href="TemplateData/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.css" rel="stylesheet">

      <!--custom style sheets-->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/user-style.css" rel="stylesheet">

  </head>
  <body>
  
  <!--HEADER-->
        <header id="main-header" style="margin-bottom: 20px;">
            <div class="container">
                <div class="row ">
                    <div class="col-xs-2 col-sm-2 col-md-5 col-lg-5">
                        <h1><b><span class="primary-text">fMRI</span> Data Portal</b></h1>
                    </div>
                   <div class="col-xs-10 col-sm-10 col-md-7 col-lg-7">
                        <div class="pull-right">
                            <nav id="navbar">
                                <ul>
                                    <li class="current"><b><a href="index.php">Home</a></b></li>

                                    <li class="dropdown"><b>
                                        <a href="#" class="dropbtn" id="drop" data-toggle="dropdown" role="button" aria-expanded="false">Research Area <span class="caret"></span></a></b>
                                        <ul class="dropdown-content" style="position: absolute" id="content">
                                            <li><a href="research/sensory.php">Sensory</a></li>
                                            <li><a href="research/motorcontrol.php">Motor Control</a></li>
                                            <li><a href="research/regulation.php">Regulation</a></li>
                                            <li><a href="research/language.php">Language</a></li>
                                            <li><a href="research/laterlization.php">Laterlization</a></li>
                                            <li><a href="research/emotion.php">Emotion</a></li>
                                            <li><a href="research/cognition.php">Executive function</a></li>
                                        </ul>
                                    </li>

	                                <li class="current"><b><a href="index.php" target="_blank">Forum</a></b></li>
                                    <li><b><a href="contact.php">Contact</a></b></li>



                                   <!-- <li><a href="">Forum</a></li>-->

                                        <?php
                                           if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){

                                               echo '<li><b><a href="login/logout.php">Logout</a></b></li>';

                                           }
                                           else {
                                               //echo $_SESSION['login'];
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
                                            <div class='dropdown-content'>
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

  <section id="suggestion">
      <div class="container">
        <a href="suggestion.php" target="_blank"><button class="btn btn-default pull-right" style="margin-top:30px;">Add Your Suggestions Here</button></a>
      </div>
  </section>

  <div style="margin-top:500px;">
    <div class="webgl-content" style="margin-top:300px;">
      <div id="gameContainer" style="width: 1100px; height: 700px"></div>
      <div class="footer">
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Full Screen</div>
      </div>
    </div>
	</div>

   <!--FOOTER-->
  <footer id="main-footer" style="margin-top:850px">
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