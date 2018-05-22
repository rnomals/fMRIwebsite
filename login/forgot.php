<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 10/1/2017
 * Time: 7:13 PM
 */
//reset your password form
require '../database.php';
//require 'class.phpmailer.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

session_start();

if(isset($_POST['submit'])) {
    if (!empty($_POST['uname'])) {
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $result = $mysqli->query("SELECT * FROM users WHERE username ='$username' AND email = '$email'");
        if ($result->num_rows == 0) {
            $_SESSION['message'] = "User with that username doesn't exist";
            header("location:../errors/error.php");
        } else {

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'senali.raj@gmail.com';                 // SMTP username
                $mail->Password = '#@20maneesha01@#';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 25;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('senali.raj@gmail.com', 'Senali');
                $mail->addAddress($email);     // Add a recipient
               // $mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('senali.raj@gmail.com', 'Senali');
               // $mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
               // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forgot Password Recovery';
                $mail->Body = '<div>'.$username.'<br><p>Click this link to recover your password<br><a href="http://localhost/FMRI website/reset.php?name = '.$username.'"</a> <br></p>Regards,<br>Admin.</div>';
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../TemplateData/favicon.ico">
    <link rel="stylesheet" href="../TemplateData/style.css">


    <title>fMRI Data Portal | Forgot password</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/error_succsess.css" rel="stylesheet">
</head>
<body>

<form class="form" role="form" method="post" action="forgot.php">
    <h1>Forgot Password</h1>
    <div class="form-group">
        <label for="username">Username</label>
        <input align="center" style="width:400px;margin-left: 30px;" type="text" name="uname" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input align="center" style="width:400px;margin-left: 30px;" type="text" name="email" class="form-control" required>
    </div>
    <button style="width:inherit" type="submit" name="submit" class="btn btn-info">Submit</button>
</form>
</body>
</html>

