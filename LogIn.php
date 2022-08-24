<!doctype html>
<html>
<head>
    <title>LogIn form</title>
<link rel="stylesheet" href="Home.css">
</head>
<body>
<form action="Process_Login.php" method="post">
    <div class="Login">
        <h4>FUD</h4>
    <label for ="Email">Email address</label><br>
    <input type ="email" id="Email" name="email_address"><br>
        <label for ="Password">Password</label><br>
        <input type ="Password" id="Password" name="Password" placeholder="Enter your password"><br>
        <br>
        <button type="submit">Continue</button>
        <button type="reset">Reset</button>
    <p>Don't have an account?<a href="Registration.php">Sign up</a></p>
        </div>
</form>
</body>
</html>