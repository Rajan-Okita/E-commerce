<?php
require("Connect.php");

$Sub_category=$_POST['sub_categories'];
$Subcategory_id=$_POST['Subcategories_id'];
$Category_id=$_POST['Category_id'];

$qry=("insert into subcategories(subcategory_id,subcategory_name,category)values('$Subcategory_id','$Sub_category','$Category_id')");

$qryCon = mysqli_query($con, $qry);

if($qryCon){
    echo "New Record Inserted successfully";}
else{
    echo "Error:Record not added".mysqli_error($con);
}

?>