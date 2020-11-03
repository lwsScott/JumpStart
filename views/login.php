<?php

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

$err = false; //initialize variable before the if statement
$username = ""; //for first time seeing login page -

//if the form has been submitted
if(!empty($_POST)) {
    //get username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $username. " ". $password;

    //Dummy variables --- make a separate file with these variables and require it for a login
    $user = "jumpstart";
    $pass = "Jumpstart2020";

    //store username in session array
    $_SESSION['un'] = $username;

    if($username == $user && $password == $pass) {
        //redirect to index.php
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "results.html";
        header("location: $page");
    }
    else {
        //set error to true
        $err = true;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>SWOT Results</title>
    <include href="includes/header.html"></include>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>

<body>
<include href="includes/navBar.html"></include>

<div class="container">

    <div class="jumbotron">
        <h1 class="display-4">Client login</h1>
        <p class="lead">Please create profile to access all features</p>
        <hr class="my-4">
    </div>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username" id="user">Username</label>
            <input type="text" class="form-control" id="username" name="username"  value="<?php echo $username; ?>"> <!--makes the username "sticky"-->
        </div>
        <div class="form-group">
            <label for="password" id="pass">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <?php
        if($err) {
            echo '<span class="err">Incorrect login</span><br>';
        }
        ?>
        <button type="submit" class="btn btn-primary" id="loginSubmit">Login</button>
        <hr class="my-4">
    </form>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<include href="includes/footer.html"></include>
</body>
</html>
