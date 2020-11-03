<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
//session_start();

session_start();
//check user login

if(!isset($_SESSION['un']))
{
    $_SESSION['page'] = $_SESSION['SCRIPT_URI'];

    //Redirect user to login page
    header("location: login.php");
}