<!doctype html>
<html>
<head>
    <title>Sub_Categories form</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
<form action="Process_subcategory.php" method="post">

        <div class="Login">
            <br><br><br>
            <h4>FUD</h4>
            <label for="sub_category">Sub Category</label><br>
            <input type="text" id="sub_category" name="sub_categories"><br>
            <label for="Subcategory_id">Sub Category ID</label><br>
            <input type="text" id="Subcategory_id"name="Subcategories_id"><br>
            <label for="Category">Category ID</label><br>
            <input type="text" id="Category" name="Category_id"><br><br>

            <button type="submit">Add item</button>
            <button type="reset">Delete item</button>
            <button type ="button"><a href="Product.php">Add Products</a></button>
        </div>
</form>
</body>
</html>