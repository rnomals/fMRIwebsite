
<?php
include '../database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>fMRI Data Portal | Emotion</title>

    <!-- Bootstrap -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/font-awesome.css" rel="stylesheet">

      <!--custom stylesheets-->
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/user-style.css" rel="stylesheet">
     <link href="../css/research.css" rel="stylesheet">
      <!--javascript-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>

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
                                    <li ><b><a href="../index.php">Home</a></b></li>
                                    <li class="dropdown"><b>
                                            <a  href="#" class="dropbtn" id="drop" data-toggle="dropdown" role="button" aria-expanded="false">Research <span class="caret"></span></a></b>
                                        <ul class="dropdown-content" style="position: absolute" id="content">
                                            <li><a class="current" href="sensory.php">Sensory</a></li>
                                            <li><a href="motorcontrol.php">Motor Control</a></li>
                                            <li><a class="current" href="regulation.php">Regulation</a></li>
                                            <li><a href="language.php">Language</a></li>
                                            <li><a href="laterlization.php">Laterlization</a></li>
                                            <li><a class="current" href="emotion.php">Emotion</a></li>
                                            <li><a href="cognition.php">Cognition</a></li>
                                        </ul>
                                    </li>
                                    <li><b><a href='../forum/index.php' target='_blank'>Forum</a></b></li>
                                    <li ><b><a href="../contact.php">Contact</a></b></li>
			                        <?php
			                        if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){
				                        echo '<li><b><a href="../login/logout.php">Logout</a></b></li>';
			                        }
			                        else if(!isset($_SESSION['username']) AND empty($_SESSION['username'])){
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
        
         <!--SUBHEADER-->
        <section id="subheader">
             <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Emotion</h2>
                    </div>
                 </div>
            </div>
        </section>
        
        <!--MAIN PAGE-->
        <section id="page" class="contact">
             <div class="container">
                 <p style="color: black;text-decoration: none;">
                     Emotion function can be divided into several sub functions.To view research studies click sub functions.
                 </p>
                 <hr>

                 <div id="comparison">
                     <button type="button" class="btn btn-default pull-right" data-toggle="modal" id="myBtn" data-target="#myModal" style="margin-top: 20px;">View Brain Model</button>
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop = "false">
                         <div class="modal-dialog" >
                             <div class="modal-content">
                                 <div class="modal-header text-center">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;"><span aria-hidden="true">&times;</span></button>

                                     <p>You can compare the research studies here. Only two research studies are allowed to compare.</p>
                                     

                                 </div>
                                 <div class="modal-body">
                                     <div class="container">
                                         <div class="col-md-6 col-lg-6">
                                             <select class="form-control" name="research1">
                                                 <option value="#">Selection 1</option>
                                                 <option value="1">Research-1</option>
                                                 <option value="2">Research-2</option>
                                                 <option value="3">Research-3</option>
                                                 <option value="4">Research-4</option>
                                             </select>

                                         </div>

                                         <hr>
                                        
                                         <div class="col-md-6 col-lg-6">
                                             <select class="form-control" name="research2">
                                                 <option value="#">Selection 2</option>
                                                 <option value="1">Research-1</option>
                                                 <option value="2">Research-2</option>
                                                 <option value="3">Research-3</option>
                                                 <option value="4">Research-4</option>
                                             </select>

                                             <hr>                                        

                                             <button name="compare" type="submit" class="btn btn-success" style="color: white; text-align:center;">Compare</button>     
                                         </div>               

                                                                     
                                     </div>
                                     
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <h3>Sub Functions</h3>
                 <div class="btn-group-lg" id="buttons">
                    <table>
                        <tr>
                            <td><button class="btn sen" data-id="0" >Emotion Formation</button></td>
                            <td> <button class="btn sen" data-id="1"> Emotion Functions</button></td>
                            <td><button class="btn sen" data-id="2" > Emotion Processing</button></td>
                            <td><button class="btn sen" data-id="3" > Emotion Regulation</button></td>
                        </tr>
                        <tr>
                            <td> <button class="btn sen" data-id="4" > Risk</button></td>
                            <td> <button class="btn sen" data-id="4" > Fear</button></td>
                        </tr>
                    </table>







                 </div>

                 <div class="row content">
                     <div id="pages" class="model-content">
                     </div>
                 </div>
            </div>
        </section>
        
          <!--COMPANY-->
        <section id="company">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h2>Contact Us</h2>
                        <ul>

                            <li><span class="glyphicon glyphicon-envelope"></span> maneesharajaratne@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h2>Read More</h2>
                        <p><a href="../../brainstorm" target="_blank">fMRIdataportal.blog</a></p>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $(".sen").click(function() {
                    var id = $(this).attr("data-id"); // Using a custom attribute.
                    $(".content #pages .mydivshow").hide(); // gather all the div tags under the element with the id pages and hide them.
                    $(".div" + id).show(); // Show the div with the class of .divX where X is the number stored in the data-id of the object that was clicked.
                });
            });
        </script>​​​​

    </body>
</html>