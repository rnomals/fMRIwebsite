<!doctype html>
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
                    <li class="active">
                        <a href="./table.php">
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
                    <li >
                        <a href="./table.php">
                            <i class="material-icons">content_paste</i>
                            <p>3D Brain Model Data</p>
                        </a>
                    </li>
                    <li>
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
                                    <h4 class="title">Registered User Data</h4>
                                    
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>User ID</th>
                                            <th>First Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Approval</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql="SELECT * FROM users";
                                            $result=$conn->query($sql);


                                            if ($result->num_rows>0) {
                                                
                                                while ($row=$result->fetch_assoc()) {
                                                    if ($row["active"]==1){
                                                    echo "<form method='POST' action='../PHP/approve.php'>";
                                                    echo "<tr>";
                                                        ?>
                                                <input type="text" name="user_id" value='<?php echo $row["user_id"]?>' class="hidden">
                                                
                                                <td><?php echo $row["user_id"];?></td>
                                                <td><?php echo $row["fname"];?></td>
                                                <td><?php echo $row["username"];?></td>
                                                <td class="text-primary"><?php echo $row["email"];?></td>
                                                <td><input type="submit" class="btn btn-info" value="View">
                                                <input type="submit" name="remove" class="btn btn-danger" value='Remove'>
                                                
                                                </td>

                                            </tr>
                                                <?php }
                                            }}
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Requested Users</h4>
                               </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>User ID</th>
                                            <th>First Name</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Approval</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql="SELECT * FROM users";
                                            $result=$conn->query($sql);


                                            if ($result->num_rows>0) {
                                                
                                                while ($row=$result->fetch_assoc()) { 
                                                    if ($row["active"]==0){

                                                        echo "<form method='POST' action='../PHP/approve.php'>";
                                                        echo "<tr>";
                                                        ?>
                                                <input type="text" name="user_id" value='<?php echo $row["user_id"]?>' class="hidden">
                                                <td><?php echo $row["user_id"];?></td>
                                                <td><?php echo $row["fname"];?></td>
                                                <td><?php echo $row["username"];?></td>
                                                <td class="text-primary"><?php echo $row["email"];?></td>
                                                <td>
                                                <input type='submit' name='confirm' class='btn btn-success' name='confirm' value='Confirm'>
                                                <input type='submit' name='deny' class='btn btn-danger' value='Deny'>
                                                </td>
                                                </tr>
                                                </form>

                                            

                                                <?php }
                                            }}
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
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