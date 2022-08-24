<?php
require("Connect.php");

$category_id= $_POST['categories_id'];
$category_name= $_POST['categories'];

$qry=("INSERT INTO categories(category_id,category_name) VALUES('$category_id','$category_name')");

$qryCon = mysqli_query($con, $qry);

if($qryCon){
    echo "New Record Inserted successfully";}
else{
    echo "Error:Record not added".mysqli_error($con);
}

?>