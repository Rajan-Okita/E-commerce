<?php
require("Connect.php");

$F_name = $_POST['F_name'];
$L_name=$_POST['L_name'];
$pw = $_POST['Password'];
$email = $_POST['email_address'];
$gender = $_POST['gender'];
$role = $_POST['role'];

$qry = ("insert into users (first_name,last_name ,email,password,gender,role)
values ('$F_name','$L_name','$email','$pw', '$gender', '$role')");

$qryCon = mysqli_query($con, $qry);

if ($qryCon) {
    echo "User successfully registered";
} else {
    echo 'error' . mysqli_error($con);
}
