<?php
session_start();
?>

<html>
<head>
    <title>
        Admin Page
    </title>
</head>

<body>
    <h3>Welcome <?php
        echo $_SESSION['sessionuser'];
        echo "\t";
        echo $_SESSION['sessionname'];
        ?></h3>
    <h4>What would you like to add?</h4>
    <ol>
    <li><a href="Categories.php" >Category</a></li>
    <li><a href="Product.php">Product</a></li>
    <li><a href="Sub_categories.php">SubCategories</a></li>
</ol>
    <h3>What would you like to edit?</h3>
    <ol>
        <li><a href="Display_users.php">List of users</a></li>
        <li><a href="Display_products.php">List of products</a></li>
</body>
</html>
