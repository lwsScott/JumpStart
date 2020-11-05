

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <include href="includes/header.html"></include>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>

<body>

<div class="container">

    <div class="jumbotron">
        <h4 class="display-4">Client login</h4>
        <p>Required for answering SWOT questions</p>
        <hr class="my-4">
    </div>

    <form action="login" method="post">
        <div class="form-group">
            <label for="username" id="user">Username</label>
            <input type="text" class="form-control" id="username" name="username"  value="<?php echo $username; ?>"> <!--makes the username "sticky"-->
        </div>
        <div class="form-group">
            <label for="password" id="pass">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <check if="{{ isset(@SESSION.err) && @SESSION.err == true}}">
            <span class="err">Incorrect login</span><br>
        </check>
        <button type="submit" class="btn btn-primary" id="loginSubmit">Login</button>
        <hr class="my-4">
    </form>

    <!-- Request User Account-->
    <form action="newUser" method="get">
        <button class="btn btn-primary text-center mb-3" type="submit">Request User account</button>
    </form>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<include href="includes/footer.html"></include>
</body>
</html>
