!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Brainstorm</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<?php 
include("../config/db_connect.php");
?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Brainstorm
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a href="./user.php">
                            <i class="material-icons">person</i>
                            <p>Registered User Data</p>
                        </a>
                    </li>
                    <li>
                        <a href="./log.php">
                            <i class="material-icons">content_paste</i>
                            <p>Registered User Login </p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.php">
                            <i class="material-icons">content_paste</i>
                            <p>3D Brain Model Data</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./function.php">
                            <i class="material-icons">content_paste</i>
                            <p>Brain Functions</p>
                        </a>
                    </li>
                    <li>
                        <a href="./brodmann areas.php">
                            <i class="material-icons">content_paste</i>
                            <p>Brodmann Areas</p>
                        </a>
                    </li>
                    <li>
                        <a href="./article.php">
                            <i class="material-icons">content_paste</i>
                            <p>Research Article Data</p>
                        </a>
                    </li>
                     <li>
                        <a href="./suggestions.php">
                            <i class="material-icons">content_paste</i>
                            <p>Suggestions</p>
                        </a>
                    </li>
                    
                   <li>
                        <a href="./posts.php">
                            <i class="material-icons">content_paste</i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li>
                        <a href="./comments.php">
                            <i class="material-icons">content_paste</i>
                            <p>Comments</p>
                        </a>
                    </li>

                    <li>
                        <a href="./form.php">
                            <i class="material-icons">content_paste</i>
                            <p>Add Data</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="view_user.php">
                                    <i class="material-icons">person</i>
                                </a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Brain Model Data</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Function ID</th>
                                            <th>Function</th>
                                    
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <td>1A</td>
                                                <td>Sensory,Auditory</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1B</td>
                                                <td>Sensory,Vision</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1C</td>
                                                <td>Sensory,Taste</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1D</td>
                                                <td>Sensory,Smell</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1E</td>
                                                <td>Motor Control, Sensory,Touch</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2A</td>
                                                <td>Motor Control, Hand/Arm Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2B</td>
                                                <td>Motor Control, Leg/Limb Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2C</td>
                                                <td>Motor Control, Neck Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2D</td>
                                                <td>Motor Control, Basic Trunk Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2E</td>
                                                <td>Motor Control, Wrist/Fingers/Thumb Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2F</td>
                                                <td>Motor Control, Shoulder Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2G</td>
                                                <td>Motor Control, Eyelids Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2H</td>
                                                <td>Motor Control, Lip Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2I</td>
                                                <td>Motor Control, Jaw Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2J</td>
                                                <td>Motor Control, Buttock Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2K</td>
                                                <td>Motor Control, Behavior Related Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2L</td>
                                                <td>Motor Control, Planning Movements</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2M</td>
                                                <td>Motor Control, Spatial guidance of movement</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2N</td>
                                                <td>Motor Control, Sensory guidance of movement</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2O</td>
                                                <td>Motor Control, Understanding others actions</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2P</td>
                                                <td>Motor Control, Movements based on rules</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2Q</td>
                                                <td>Motor Control, Action Selection</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3A</td>
                                                <td>Regulation, Blood Pressure Control</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3B</td>
                                                <td>Regulation, Heart rate Control</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3C</td>
                                                <td>Regulation, Respiratory Control</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4A</td>
                                                <td>Language, Accessing word meaning</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4B</td>
                                                <td>Language, Language Comprehension</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4C</td>
                                                <td>Language, Language Perception</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4D</td>
                                                <td>Language, Language Processing</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4E</td>
                                                <td>Language, Semantic Tasks</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5A</td>
                                                <td>Emotion related, Emotion formation</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5B</td>
                                                <td>Emotion related, Emotion functions</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5C</td>
                                                <td>Emotion related, Emotion processing</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5D</td>
                                                <td>Emotion related, Emotion regulation</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5E</td>
                                                <td>Emotion related, Risk</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5F</td>
                                                <td>Emotion related, Fear</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>5G</td>
                                                <td>Emotion related, Morality</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6A</td>
                                                <td>Cognitive functions, Decision making</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6B</td>
                                                <td>Cognitive functions, Face perception</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6C</td>
                                                <td>Cognitive functions, Number Perception</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6D</td>
                                                <td>Cognitive functions, Making Awareness</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6E</td>
                                                <td>Cognitive functions, Management of cognitive</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6F</td>
                                                <td>Cognitive functions, Memory formation</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6G</td>
                                                <td>Cognitive functions, Memory consolidation</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6H</td>
                                                <td>Cognitive functions, Memory optimization</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6I</td>
                                                <td>Cognitive functions, Memory recall</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6J</td>
                                                <td>Cognitive functions, Reward anticipation</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6K</td>
                                                <td>Cognitive functions, Social cognition</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6L</td>
                                                <td>Cognitive functions, Visual field perception</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6M</td>
                                                <td>Cognitive functions, Visual field awareness</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6N</td>
                                                <td>Cognitive functions, Working memory</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>6O</td>
                                                <td>Cognitive functions, Cognitive flexibility</td>
                                                
                                            </tr>
                                            

                                                
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>