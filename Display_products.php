<?php
require_once("ProductDB.php");
$query = "SELECT product_id, product_name,product_description, product_image, unit_price,available_quantity FROM products";

$result = mysqli_query($con, $query);
?>
<html>
<title>
    View Products
</title>
<body>
</style>
<table border ="1" cellspacing="0" cellpadding="10">
    <tr>
        <th></th>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Product Image</th>
        <th>Unit Price</th>
        <th>Available quantity</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        $sn=1;
        while($value = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $sn; ?> </td>

                <td> <?php echo $value ["product_id"] ?></td>
                <td> <?php echo $value ["product_name"] ?></td>
                <td> <?php echo $value ["product_description"] ?></td>
                <td> <img height="100" width="100" src="<?php echo $value ["product_image"] ?>" alt="data image"> </td>
                <td> <?php echo $value ["unit_price"] ?></td>
                <td> <?php echo $value ["available_quantity"] ?></td>
                <td><a href="Product.php" button type="button">Edit</button></a>
            <tr>
            <?php
            $sn++;}} else { ?>
        <tr>
            <td colspan="8">No data found</td>
        </tr>

    <?php } ?>
</table>
</body>
</html>