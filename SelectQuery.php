<?php
require('Connect.php');
$sql="select user_id,first_name,last_name from users";
$result=mysqli_query($con,$sql);
print_r($result);

