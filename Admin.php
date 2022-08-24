<?php
require("connect.php");
session_start();
$userID = $_SESSION['user_id'];
$sql = "select * from users where user_id='$userID'";

$qry = "select product_image from products where product_id=1";

$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $qry);
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
$email = $row['email'];
$fname = $row['first_name'];

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    header('location: project.LogIn.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <title>Document</title>
</head>
<body>
<div class="full-page">
    <div class="navbar">
        <nav>
           <img src="menu.png" alt="Menu" class="hamburger">
            <p>STYL-ISH</p><br>
            <p>~You need it, we've got it!~</p>
            <link rel="stylesheet" href="admin.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
            <img src="home.png" alt="Home">
            <img src="info.png" alt="Info">
            <img src="contacts.png" alt="Contacts">
            <img src="cart-icon.png" alt="Cart">
            <img src="profile.png" alt="Profile">
            <input type="text" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome" />
        </nav>
    </div>
</div>
<div class="Administrator-form">
    <body>
    <h3>Welcome, dear administrator!!</h3>
    <p>Admin-Name: <?php echo $fname; ?>,<br><br> Admin-Email : <?php echo $email; ?></p><br><br><br></p>
    <h2>kindly select from the choices down below:!!</h2><br><br><br>
    <center>
        <a href="Categories.php">
            <input type="button" value="Add categories"></a><br><br><br>
        <a href="Product.php">
            <input type="button" value="Add products"></a><br><br><br>
        <a href="Display_users.php">
            <input type="button" value="view users"></a><br><br><br>
        <a href="admin.php?logout='1'">
            <input type="button" value=" Logout"></a>
    </center>
    </body>
</div>
</body>
</html>
