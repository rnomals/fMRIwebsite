<?php
include '../database.php';
session_start();

//we are using this if statement to make sure the form is submitted.
// since the method is post. it will become true.
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//two passwords are equal to each other
    if ($_POST['passwordsignup'] == $_POST['passwordsignup_confirm']) {
        //assigning variables
            $name = $mysqli->real_escape_string($_POST['name']);
            $email = $mysqli->real_escape_string($_POST['emailsignup']);
            $username = $mysqli->real_escape_string($_POST['usernamesignup']);
            $password = md5($_POST['passwordsignup']);
            $doc_path = $mysqli->real_escape_string('files/' .$_FILES['file']['name']); //save the file to the folder 'file'
            $active = 0;

        //check whether the email already exists
            $result = $mysqli->query("SELECT * FROM users WHERE email = '$email'") or die($mysqli->error());

	    //if there exist a person with the same email
            if($result->num_rows > 0){
                $_SESSION['message'] = 'User with this email already exists!';
                header('location:login_signup.php');
            }

            else{  //proceed

                //make sure file type is zip
                if(preg_match("!application!", $_FILES['file']['type'])) {

                    if (copy($_FILES['file']['tmp_name'], $doc_path)) {
                        $_SESSION['usernamesignup'] = $username;
                        $_SESSION['file'] = $doc_path;

                        $sql = "INSERT INTO users (fname, email, cnfrm_doc, username, password,active)"
                            . "VALUES ('$name','$email','$doc_path','$username','$password','$active')";

                        //if the sql doesn't work.
                        if ($mysqli->connect_errno) {
                            printf("connect failed:%s\n", $mysqli->connect_error);
                            exit();
                        }
                        //if it works.
                        else {
                            //if the query is successful, send a mail to the email
                            if ($mysqli->query($sql) == true) {
                                $_SESSION['active'] = 0;//0 until user is accepted by the system admin
                                $_SESSION['logged_in'] = true;

                                //send registration confirmation link
                                $to     = $email;
                                $subject= 'Account Verification (fmridataportal.com)';
                                $message_body =

                                'Hello '.$name.',
                                
                                Thank you for signing up!
                                
                                You will be notified when the System administrator accepted you.';

                                $headers = "From: me@localhost"."\r\n";

                               if(mail($to, $subject, $message_body,$headers)){
                                    $_SESSION['message']="email has been sent to your $email";
                                    header('location:login_signup.php');

                                }
                                else{
                                    $_SESSION['message']="there was an error sending email to your account";
                                    $errorMessage = error_get_last()['message'];
                                    print_r($errorMessage);
                                    header('location:login_signup.php');
                                }
                            }
                            // if query is unsuccessful.
                            else {

                                $_SESSION['message'] = "user couldn't added to the database";
                                printf("Errormessage: %s\n", $mysqli->error);
                               header('location:login_signup.php');
                            }
                        }
                    }
                    else {

                        $_SESSION['message'] = "file upload failed";
                        header('location:login_signup.php');
                    }
                }
                else{

                    $_SESSION['message'] = "file extension is not correct.check again!";
                    header('location:login_signup.php');
                }
            }
        }
        else{

           $_SESSION['message'] = "two password didn't match";
            header('location:login_signup.php');
    }
}


?>
