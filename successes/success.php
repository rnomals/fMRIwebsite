
<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../TemplateData/favicon.ico">
    <link rel="stylesheet" href="../TemplateData/style.css">
    <script src="../TemplateData/UnityProgress.js"></script>
    <script src="../Build/UnityLoader.js"></script>
    <script>
        var gameInstance = UnityLoader.instantiate("gameContainer", "Build/brain.json", {onProgress: UnityProgress});
    </script>

    <title>fMRI Data Portal | Success</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/error_succsess.css" rel="stylesheet">
</head>
<body>
<div class="form">
    <h1>Success</h1>
    <p>
        <?php
        if(isset($_SESSION['message']) AND !empty($_SESSION['message'])){
            echo $_SESSION['message'];
        }
        else{
            header("location:login_signup.php");
        }
        ?>

    </p>
    <a href="../index.php"><button class="btn btn-block">Home</button></a>
</div>
</body>
</html>

