<?php
require("connect.php");
session_start();
if(isset($_POST['Password']) && isset($_POST['email_address'])) {
    $password = $_POST['Password'];
    $email = mysqli_real_escape_string($con, $_POST['email_address']);

    if (!empty($email) && !empty($password)) {
        $query = "select * from users where email='$email' and password='$password'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['sessionuser'] = $row['first_name'];
            $_SESSION['sessionname'] = $row['last_name'];
            if ($row['role'] == '1') {
                header("location:Admin_page.php");
            } else {
                $_SESSION['sessionid'] = $row['user_id'];
                header("location:HomePage.php");
            }
            exit();
        } else {
            exit();
        }
    } else {
        echo "Invalid credentials";
    }
}
