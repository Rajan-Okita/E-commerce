<?php

require ("Connect.php");

$sql="SELECT user_id,first_name,last_name,email,gender FROM users";
$test=mysqli_query($con,$sql);

if(isset($_GET["edit"])){

    $id=$_GET["edit"];
    $sql="SELECT * FROM users WHERE user_id=$id";
}

?>
