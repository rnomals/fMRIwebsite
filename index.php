<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>fMRI Data Portal | Home</title>

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
                                            <li><a href="research/cognition.php">Cognition</a></li>
                                        </ul>
                                    </li>
                                    <li><b><a href='forum/index.php' target='_blank'>Forum</a></b></li>

                                    <li><b><a href="contact.php">Contact</a></b></li>



                                   <!-- <li><a href="">Forum</a></li>-->

                                        <?php
                                           if(isset($_SESSION['username']) AND !empty($_SESSION['username'])){
                                               //echo $_SESSION['logout'];
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
                                    <span class='primary-text'>Welcome,</span>
                                    <div class='dropdown' id = 'dropdown' hidden>";
                                        echo " <a class='dropbtn' type='button' data-toggle='dropdown'>";
                                            echo $_SESSION['username'];
                                            echo"  <span class='caret'></span></a>
                                            <div class='dropdown-content'>
                                                <a href='myprofile.php' style='font-size: 16px; padding-left: 5px;padding-right: 5px;'>My Profile</a>
                                            </div>
                                    </div>

                                </span>
                            </div>
                        </div>
                    </div>
                </div>"; }?>
            </div>
        </header>
        
      
        <!--SHOWCASE-->
        <section id="showcase">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 showcase-content">
                        <h2>Welcome to <span class="primary-text">BrainStorm</span></h2>

                        <p>You are Welcome to join brainstorming with our community to further enhance your knowledge of our amazing complex organ, The Brain.</p>
                        <p>This is a fMRI Data Portal for fMRI Data Visualization using 3D Brain models.</p>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <!--FEATURES-->
        <section id="functions">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <h2><strong><span class="primary-text">Core Functions</span> Of The Brain</strong></h2>

                        <!--discriptions-->

                        <div class="row content">

                            <div class="pull-left" id="buttons">
                            <!-- Trigger/Open The Modal -->
                                <ul>
                                    <li><button class="btn" data-id="0" >Motor Control</button></li>
                                    <li><button class="btn" data-id="1"> Sensory</button> </li>
                                    <li><button class="btn" data-id="2" onclick="showReg()"> Regulation</button> </li>
                                    <li><button class="btn" data-id="3" onclick="showLan()"> Language</button> </li>
                                    <li><button class="btn" data-id="4" onclick="showLat()"> Laterlization</button> </li>
                                    <li><button class="btn" data-id="5" onclick="showEmo()"> Emotion</button> </li>
                                    <li><button class="btn" data-id="6" onclick="showExe()"> Cognition</button> </li>
                                </ul>
                            </div>

                            <div id="pages" class="model-content">
                                <div class="mydivshow div0"  style="display: none; padding: 50px; color:black;">
                                    <p><b><i>Motor systems are areas of the brain that are involved in initiating body movements, that is, in activating muscles. Except for the muscles that control the eye, which are driven by nuclei in the midbrain,
                                        all the voluntary muscles in the body are directly innervated by motor neurons in the spinal cord and hindbrain. Spinal motor neurons are controlled both by neural circuits intrinsic to the spinal cord,
                                        and by inputs that descend from the brain. The intrinsic spinal circuits implement many reflex responses,
                                                and contain pattern generators for rhythmic movements such as walking or swimming. The descending connections from the brain allow for more sophisticated control.</i></b>
                                    </p>
                                </div>

                                <div class="mydivshow div1"  style="display: none; padding: 50px;color:black;">
                                    <p><i> <b> The sensory nervous system is a part of the nervous system responsible for processing sensory information. A sensory system consists of sensory neurons (including the sensory receptor cells), neural pathways, and parts of the brain involved in sensory perception.
                                        Commonly recognized sensory systems are those for vision, hearing, touch, taste, smell, and balance.
                                        In short, senses are transducers from the physical world to the realm of the mind where we interpret the information, creating our perception of the world around us</b></i></p>
                                </div>

                                <div class="mydivshow div2" id="senDis" style="display: none; padding: 50px;color:black;">
                                    <p><i><b>Autonomic functions of the brain include the regulation, or rhythmic control of the heart rate and rate of breathing, and maintaining homeostasis.
                                        Blood pressure and heart rate are influenced by the vasomotor centre of the medulla, which causes arteries and veins to be somewhat constricted at rest.
                                        It does this by influencing the sympathetic and parasympathetic nervous systems via the vagus nerve. Information about blood pressure is generated by baroreceptors in aortic bodies in the aortic arch,
                                            and passed to the brain along the afferent fibres of the vagus nerve. Information about the pressure changes in the carotid sinus comes from carotid bodies located near the carotid artery and this is passed via a nerve joining with the glossopharyngeal nerve.
                                            This information travels up to the solitary nucleus in the medulla.
                                            Signals from here influence the vasomotor centre to adjust vein and artery constriction accordingly.</b></i></p>
                                </div>

                                <div class="mydivshow div3" id="senDis" style="display: none; padding: 50px;color:black;">
                                    <p><b><i> Language is a symbolic communication system that is presented through languages. Language isn’t only important for communicating with others, but also for structuring our internal thoughts.
                                        Language processing uses different brain areas that act together through different functional systems that involve the left hemisphere especially.
                                        We could talk about two cortical areas that are in charge of expression and reception of language, mainly in the left cerebral hemisphere.</i></b></p>
                                </div>

                                <div class="mydivshow div4" id="senDis" style="display: none; padding: 50px; color:black;">
                                    <p><i><b>The cerebrum has a contralateral organisation with each hemisphere of the brain interacting primarily with one half of the body: the left side of the brain interacts with the right side of the body, and vice versa. The developmental cause for this is uncertain.
                                        Motor connections from the brain to the spinal cord, and sensory connections from the spinal cord to the brain, both cross sides in the brainstem. Visual input follows a more complex rule: the optic nerves from the two eyes come together at a point called the optic chiasm, and half of the fibres from each nerve split off to join the other.
                                        The result is that connections from the left half of the retina, in both eyes, go to the left side of the brain, whereas connections from the right half of the retina go to the right side of the brain.Because each half of the retina receives light coming from the opposite half of the visual field, the functional consequence is that visual input from the left side of the world goes to the right side of the brain, and vice versa.
                                                Thus, the right side of the brain receives somatosensory input from the left side of the body, and visual input from the left side of the visual field</b></i></p>
                                </div>

                                <div class="mydivshow div5" id="senDis" style="display: none; padding: 50px;color:black;">
                                    <p><i><b>Emotions are generally defined as two-step multicomponent processes involving elicitation, followed by psychological feelings, appraisal, expression, autonomic responses, and action tendencies.Attempts to localize basic emotions to certain brain regions have been controversial, with some research finding no evidence for specific locations corresponding to emotions, and instead circuitry involved in general emotional processes.
                                        The amygdala, orbitofrontal cortex, mid and anterior insula cortex and lateral prefrontal cortex, appeared to be involved in generating the emotions, while weaker evidence was found for the ventral tegmental area, ventral pallidum and nucleus accumbens in incentive salience.
                                            Others, however, have found evidence of activation of specific regions, such as the basal ganglia in happiness, the subcallosal cingulate cortex in sadness, and amygdala in fear.</b></i></p>
                                </div>

                                <div class="mydivshow div6" id="senDis" style="display: none; padding: 50px;color:black;">
                                    <p><b><i>Executive functions are the most complex cognitive functions. While there are different definitions for cognitive functions, most of them include cognition control and thought and behavior control through various related processes.
                                        They comprise a set of complex skills, like attention focus, planning, programming, regulation, and intentional behavior verification. Executive functions include the ability to filter information and tune out irrelevant stimuli with attentional control and cognitive inhibition, the ability to process and manipulate information held in working memory,
                                            the ability to think about multiple concepts simultaneously and switch tasks with cognitive flexibility, the ability to inhibit impulses and prepotent responses with inhibitory control, and the ability to determine the relevance of information or appropriateness of an action.
                                            Executive functions are located in the frontal lobe.</i></b></p>
                                </div>

                            </div>

                        </div>
                        <section class="brain">

                            <div class="row" >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p align="center" style="margin-top: 10px;">To launch the brain to see the highlighted areas, click below!</p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <a href="brain_model.php" target="_blank"><button class="btn btn-default" style="margin-top: 10px;">Launch Brain</button></a>
                                </div>
                            </div>

                        </section>


                     </div>
                </div>
            </div>
        </section>




        <section id="research">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <h2><strong><span class="primary-text">Research Article</span> Area</strong></h2>

                        <div class="row content">

                                <p>BrainStorm is mainly focused on researchers who are interested in fMRI studies.
                                    Using the 3D visualization makes it easier to identify the exact brain area along with the surrounded brodmann areas.
                                In Research Area you can find the studies done on relevant cognitive functions and their subfunctions.
                                We will providing the capability to compare research studies using 3D visualization.</p>

                                <section class="brain">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p align="center"style="margin-top: -10px;">To browse through the research articles, click below!</p>
                                            </div>
                                        </div>
                                        <div class="row text-center" >
                                            <div class="col-lg-12 col-md-12 col-sm-12"style="margin-top: -10px;">
                                                <button class="btn btn-default" onclick="topFunction()" id="myBtn">Launch Research Area</button>
                                            </div>
                                        </div>
                                </section>
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
                           <!-- <li><span class="glyphicon glyphicon-phone-alt"></span> </li>-->
                            <li><span class="glyphicon glyphicon-envelope"></span> fmribrainstorm@gmail.com</li>
                        </ul>
                    </div>               
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <h2>Read More</h2>
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

        <!--script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("button").click(function() {
                    var id = $(this).attr("data-id"); // Using a custom attribute.
                    $("#pages div").hide(); // gather all the div tags under the element with the id pages and hide them.
                    $(".div" + id).show(); // Show the div with the class of .divX where X is the number stored in the data-id of the object that was clicked.
                });
            });
        </script>​​​​
        <script>
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>
</html>