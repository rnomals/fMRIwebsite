<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 12/4/2017
 * Time: 8:29 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../TemplateData/favicon.ico">
    <link rel="stylesheet" href="../TemplateData/style.css">


    <title>fMRI Data Portal | Reset password</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/error_succsess.css" rel="stylesheet">
</head>
<body>

<form class="form" role="form" method="post" action="forgot.php">
    <h1>Reset Password</h1>
    <div class="form-group">
        <label for="password">New Password</label>
        <input align="center" style="width:400px;margin-left: 30px;" type="password" name="pass" class="form-control"required>
    </div>
    <div class="form-group">
        <label >Confirm Password</label>
        <input align="center" style="width:400px;margin-left: 30px;" type="password" name="cpass" class="form-control" required>
    </div>
    <button style="width:inherit" type="submit" name="submit" class="btn btn-info">Submit</button>
</form>
</body>
</html>
