<?php
session_destroy();
$_SESSION = array();

//redirect user to login page
header('location: home');