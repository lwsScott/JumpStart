

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <include href="includes/header.html"></include>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>

<body>

<include href="includes/navBar.html"></include>

<div class="container card rounded" id = "loginUser">
    <h1>Login</h1>



    <form action="login" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                   value="<check if='{{ isset(@SESSION.username) }}'>{{ @SESSION.username }}</check>">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <check if="{{ isset(@SESSION.err) && @SESSION.err == 'true' }}">
            <span class="err">Incorrect login</span><br>
        </check>

        <button id = "loginSubmit" type="submit" class="btn btn-primary mb-3">Login</button>

    </form>

    <!-- Request User Account-->
    <form action="newUser" method="get">
        <button id = "request" class="btn btn-primary text-center mb-3" type="submit">Request User account</button>
    </form>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<include href="includes/footer.html"></include>
</body>
</html>
