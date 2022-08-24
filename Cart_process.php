<?php
session_start();
include('Connect.php');
$status="";

if (isset($_POST['product_image']) && $_POST['product_image']!=""){
    $product_image = $_POST['product_image'];
    $result = mysqli_query(
        $con,
        "SELECT * FROM `products` WHERE `product_image` like '$product_image%'"
    );
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $price = $row['unit_price'];
    $image = $row['product_image'];
    $description=$row['product_description'];

    $cartArray = array(
        $product_image=>array(
            'product_name'=>$name,
            'product_description'=>$description,
            'unit_price'=>$price,
            'quantity'=>1,
            'image'=>$image,
            'product_image'=>$product_image)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($product_image,$array_keys)) {
            $status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $status = "<div class='box'>Product is added to your cart!</div>";
        }

    }
}
?>

<html>
<head>
    <title>Shopping Cart</title>
    <link rel='stylesheet' href='Cartt.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50px auto;">

    <h2>Shopping cart</h2>


    <?php
if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    ?>
    <div class="cart_div">
        <a href="Cart.php"><img src="cart-icon.png" />Cart<span><?php echo $cart_count; ?></span></a>
    </div>
    <?php
}
?>

<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
     <input type='hidden' name='product_image' value=".$row['product_image']." />
    <div class='image'><img height='". 50 ."' width='" . 50 . "'  src='".$row['product_image']."' /></div>
    <div class='name'>".$row['product_name']."</div>
    <div class='description'>".$row['product_description']."</div>
    <div class='price'>$".$row['unit_price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
}
mysqli_close($con);
?>

    <div style="clear:both;"></div>

    <div class="message_box" style="margin:10px 0px;">
        <?php echo $status; ?>
    </div>

   </div>
</body>
</html>