<?php
/**
 * Created by PhpStorm.
 * User: maneesha
 * Date: 11/30/2017
 * Time: 8:00 PM
 */

//logout from the system. and exit from it.
session_start();
session_destroy();
header('location:../index.php');
exit();