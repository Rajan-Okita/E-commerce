<?php
$servername="localhost";
$username='root';
$password="";
$database="ecomm";

//create connection
$con = mysqli_connect($servername,$username,$password,$database);

//check connection
if ($con) {
//    echo "Successful connection" . '<br>';
} else
    die('connection failed' . mysqli_connect_errno());
?>