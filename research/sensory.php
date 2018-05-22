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
   
    <title>fMRI Data Portal | sensory</title>

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
                                            <li><a href="regulation.php">Regulation</a></li>
                                            <li><a href="language.php">Language</a></li>
                                            <li><a href="laterlization.php">Laterlization</a></li>
                                            <li><a href="emotion.php">Emotion</a></li>
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
                    <div>
                        <h2>Sensory</h2>
                    </div>
                 </div>
            </div>
        </section>
        
        <!--MAIN PAGE-->
        <section id="page" class="contact">
             <div class="container">
                <p style="color: black;text-decoration: none;">
                  Core functions can be divided into several sub functions.We have provided you the research papers for the relative sub functions.<br>
                    Provide your suggestions using our forum.
                </p>
                 <hr>

                 <div id="comparison">
                     <button type="button" class="btn btn-default pull-right" data-toggle="modal" id="myBtn" data-target="#myModal" style="margin-top: 20px;">View Brain Model</button>
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop = "false">
                         <div class="modal-dialog" align="center">
                             <div class="modal-content" align="center">
                                 <div class="modal-header text-center">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;"><span aria-hidden="true">&times;</span></button>

                                     <p>You can compare the research studies here. Only two research studies are allowed to compare.</p>
                                     <p>Please select two different papers to comparison..</p>
                                     
                                 </div>
                                 <div class="modal-body" align="center">
                                     <div class="container">
                                         <form action="brain_models/compare.php" method='POST' target='_blank'; style="background-color: transparent;">
                                            <div class="col-md-8 col-lg-8">

                                                <select class="form-control" name="research1">
                                                    <option value="#">Selection 1</option>
                                                    <option value="1">1. Analysis of Brain Activity for Given Auditory Stimulus Using Functional MRI</option>
                                                    <option value="2">2. Tonotopic mapping of human auditory cortex</option>
                                                    <option value="3">3. Temporal Envelope Processing in the Human Left and Right Auditory Cortices</option>
                                                    <option value="4">4. Processing of auditory spatial cues in human cortex: An fMRI study</option>
                                                </select>

                                                <br>
                                            </div>
                                            <div class="col-md-8 col-lg-8">                                                    

                                                <select class="form-control" name="research2">
                                                    <option value="#">Selection 2</option>
                                                    <option value="1">1. Analysis of Brain Activity for Given Auditory Stimulus Using Functional MRI</option>
                                                    <option value="2">2. Tonotopic mapping of human auditory cortex</option>
                                                    <option value="3">3. Temporal Envelope Processing in the Human Left and Right Auditory Cortices</option>
                                                    <option value="4">4. Processing of auditory spatial cues in human cortex: An fMRI study</option>
                                                </select>

                                                <hr>

                                                <button name="compare" type="submit" class="btn btn-success" style="color: white; text-align:center;">Compare</button>

                                            </div>
                                         </form>

                                    </div>                                   

                                    <br>
                                                                                            

                                </div>
                            </div>
                         </div>
                     </div>
                 </div>

                <h3>Sub Functions</h3>

                 <div class="btn-group-lg" id="buttons">

                     <button class="btn sen" data-id="0" >Hearing</button>
                     <button class="btn sen" data-id="1"> Vision</button>
                     <button class="btn sen" data-id="2" > Taste</button>
                     <button class="btn sen" data-id="3" > Touch</button>
                     <button class="btn sen" data-id="4" > Smell</button>


                 </div>

                 <div class="row content">
                     <div id="pages" class="model-content">

                        <!--research papers on hearing section-->

                        <!--creating links and show pdf of research papers-->

                         <div class="mydivshow div0"> 
                             <table>

                             <?php
                                 $result = $mysqli->query("SELECT * FROM research");
                                 if($result->num_rows >0){
                                     while($row = $result->fetch_assoc()){
                                         if(file_exists("sensory/hear/".$row['link']."")){
	                                         echo '<tr>';

	                                         echo '<td><a href="sensory/hear/'.$row["link"].'" target="_blank">';
	                                         echo $row["link"];
	                                         echo '</a>';
	                                         echo '<p><strong>';
	                                         echo $row['title'];
	                                         echo '</strong></p>';
                                             echo  '<p>';
	                                         echo $row['reference'];
                                             echo '</p></td>';
	                                         echo '</tr>';

	                                         echo '<tr>';
	                                         echo '<td><object height="300px" data="sensory/hear/'.$row["link"].'" type="application/pdf" width="1000px"></object> ';
	                                         echo '</tr>';
                                         }

                                     }
                                 }
                             ?>
                             </table>
                         </div>

                         <!--research papers on visual section-->

                         <div class="mydivshow div1"> 
                             <table>
	                             <?php
	                             $result = $mysqli->query("SELECT * FROM research");
	                             if($result->num_rows >0){
		                             while($row = $result->fetch_assoc()){
			                             if(file_exists("sensory/visual/".$row['link']."")){
				                             // echo"true";
				                             echo '<tr>';

				                             echo '<td><a href="sensory/visual/'.$row["link"].'" target="_blank">';
				                             echo $row["link"];
				                             echo '</a></td>';
				                             echo '</tr>';

				                             echo '<tr>';
				                             echo '<td><object height="300px" data="sensory/visual/'.$row["link"].'" type="application/pdf" width="1000px"></object> ';
				                             echo '</tr>';
			                             }

		                             }
	                             }
	                             ?>
                             </table>
                         </div>

                         <!--research papers on taste section-->

                         <div class="mydivshow div2"> <!---->
                             <table>
			                     <?php
			                     $result = $mysqli->query("SELECT * FROM research");
			                     if($result->num_rows >0){
				                     while($row = $result->fetch_assoc()){
					                     if(file_exists("sensory/taste/".$row['link']."")){
						                     // echo"true";
						                     echo '<tr>';

						                     echo '<td><a href="sensory/taste/'.$row["link"].'" target="_blank">';
						                     echo $row["link"];
						                     echo '</a></td>';
						                     echo '</tr>';

						                     echo '<tr>';
						                     echo '<td><object height="300px" data="sensory/taste/'.$row["link"].'" type="application/pdf" width="1000px"></object> ';
						                     echo '</tr>';
					                     }

				                     }
			                     }
			                     ?>
                             </table>
                         </div>

                         <!--research papers on touch section-->

                         <div class="mydivshow div3">
                             <table>
			                     <?php
			                     $result = $mysqli->query("SELECT * FROM research");
			                     if($result->num_rows >0){
				                     while($row = $result->fetch_assoc()){
					                     if(file_exists("sensory/touch/".$row['link']."")){
						                     // echo"true";
						                     echo '<tr>';

						                     echo '<td><a href="sensory/touch/'.$row["link"].'" target="_blank">';
						                     echo $row["link"];
						                     echo '</a></td>';
						                     echo '</tr>';

						                     echo '<tr>';
						                     echo '<td><object height="300px" data="sensory/touch/'.$row["link"].'" type="application/pdf" width="1000px"></object> ';
						                     echo '</tr>';
					                     }

				                     }
			                     }
			                     ?>
                             </table>
                         </div>

                          <!--research papers on smell section-->

                         <div class="mydivshow div4"> 
                             <table>
			                     <?php
			                     $result = $mysqli->query("SELECT * FROM research");
			                     if($result->num_rows >0){
				                     while($row = $result->fetch_assoc()){
					                     if(file_exists("sensory/smell/".$row['link']."")){
						                     // echo"true";
						                     echo '<tr>';

						                     echo '<td><a href="sensory/smell/'.$row["link"].'" target="_blank">';
						                     echo $row["link"];
						                     echo '</a></td>';
						                     echo '</tr>';

						                     echo '<tr>';
						                     echo '<td><object height="300px" data="sensory/smell/'.$row["link"].'" type="application/pdf" width="1000px"></object> ';
						                     echo '</tr>';
					                     }

				                     }
			                     }
			                     ?>
                             </table>
                         </div>
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

      <!--  <script type="text/javascript">
            $(document).ready(function() {
                $('.content #pages.mydivshow').hide();
                $('.content #pages #div0').show();
                $('#sub').change(function () {
                    $('.content #pages .mydivshow').hide();
                    $('#'+$(this).val()).show();

                })
            });
        </script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            $('.mydivshow').hide();
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