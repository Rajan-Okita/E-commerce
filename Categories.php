<!doctype html>
<html>
<head>
    <title>Categories form</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
<form action="Process_category.php" method="post">

        <div class="Login">
            <br><br><br>
            <h4>FUD</h4>
           <label for="category">Category</label><br>
            <input type="text" id="category"  name="categories"><br>
            <label for="category_id">Category ID</label><br>
            <input type="text" id="category_id"  name="categories_id"><br><br>

            <button type="submit">Add item</button>
            <button type="reset">Delete item</button>
            <button type ="button"><a href="Sub_categories.php">Add Sub category</a></button>
        </div>
</form>
</body>
</html>