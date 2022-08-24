<?php
require("Connect.php");

$Product_ID=$_POST['products_id'];
$Product_Name=$_POST['products'];
$Product_Description=$_POST['products_description'];
$Product_Unitprice=$_POST['products_price'];
$Product_Quantity=$_POST['products_quantity'];
$Product_Subcat=$_POST['products_subcat'];
$Product_Created=$_POST['products_creation'];
$Product_Updated=$_POST['products_update'];
$Product_Added=$_POST['products_add'];
$Product_Category=$_POST['products_category'];

$target_dir = "uploads/";
$target_file = $target_dir . time() . basename($_FILES["product_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$qry=("insert into products(product_id,product_name,product_description,product_image,unit_price,available_quantity,subcategory_id,created_at,updated_at,added_by,Category) values('$Product_ID','$Product_Name','$Product_Description','$target_file','$Product_Unitprice','$Product_Quantity','$Product_Subcat','$Product_Created','$Product_Updated','$Product_Added','$Product_Category')");

$qryCon = mysqli_query($con, $qry);

if($qryCon){
    echo "New Record Inserted successfully";}
else{
    echo "Error:Record not added".mysqli_error($con);
}

?>