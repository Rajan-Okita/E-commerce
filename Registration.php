<!doctype html>
<html>
<head>
    <title>Registration form</title>
<link rel="stylesheet" href="Home.css">
</head>
<body>

<form action="process_register.php" method="post">
    <div class="Registration">
    <h4>Welcome to FUD</h4>
        <label for ="F_name">First name</label><br>
        <input type="text" id ="F_name" name="F_name"><br>
        <label for ="L_name">Last name</label><br>
        <input type ="text" id="L_name" name="L_name"><br>
        <label for ="Email">Email address</label><br>
        <input type ="email" id="Email" name="email_address"><br>
        <label for ="Password">Password</label><br>
        <input type ="Password" id="Password" name="Password" placeholder="At least 6 characters"><br><br>
        <label for="role">Role</label>
        <select name="role">
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select>
        <br>
        <br>
        <label for ="g_male">Male</label>
        <input type="radio" id="g_male" name="gender" value="Male">
        <label for ="g_female">Female</label>
        <input type="radio" id="g_female" name="gender" value="Female"><br><br>
        <button type="submit">Register</button>
        <button type="reset">Reset</button>
        <p>Already have an account?<a href="LogIn.php">Log in</a></p>
        </div>
</form>

</body>
</html>