<!doctype html>
<html>
<head>
    <title> Products form</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>

<form action="Process_product.php" method="post" enctype="multipart/form-data">
        <div class="Login">
            <h4>FUD</h4>
            <label for="Product_name">Product Name</label><br>
            <input type="text" id="Product_name" name="products"><br>

            <label for="Product_id">Product ID</label><br>
            <input type="text" id="Product_id" name="products_id"><br>

            <label for="Product_description">Product Description</label><br>
            <input type="text" id="Product_description" name="products_description"><br>

            <label for="Product_image">Product image</label><br>
            <input type="file" id="product_image" name="product_image"><br>

            <label for="Product_unitprice">Product Unit Price</label><br>
            <input type="number" id="Product_unitprice" name="products_price"><br>

            <label for="Product_quantity">Product Quantity</label><br>
            <input type="number" id="Product_quantity" name="products_quantity"><br>

            <label for="Product_Subcat">Subcategory ID</label><br>
            <input type="text" id="Product_Subcat" name="products_subcat"><br>

            <label for="Product_category">Category</label><br>
            <input type="text" id="Product_category" name="products_category"><br>

            <label for="Product_creation">Created at</label><br>
            <input type="datetime-local" id="Product_creation" name="products_creation"><br>

            <label for="Product_update">Updated at</label><br>
            <input type="datetime-local" id="Product_update" name="products_update"><br>

            <label for="Product_add">Added by</label><br>
            <input type="text" id="Product_add" name="products_add"><br><br>

            <button type="submit">Add item</button>
            <button type="reset">Delete item</button>
        </div>
</form>
</body>
</html>