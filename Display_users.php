<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body>
<table border ="1" cellspacing="0" cellpadding="10">
    <thead>
    <th>UserName</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Age</th>
    <th>Gender</th>
    </thead>
    <tbody>
    <tr>
        <?php
        require_once("UserDB.php");
        foreach ($test as $key => $value) {
        ?>
    <tr>
        <td><?php echo $value["user_id"]?></td>
        <td><?php echo $value["first_name"]?></td>
        <td><?php echo $value["last_name"]?></td>
        <td><?php echo $value["gender"]?></td>
        <td><?php echo $value["email"]?></td>
        <td><a href="Admin_page.php" button type="button">Edit</button></a>

    </tr>
    <?php }

    ?>

    </tbody>
</table>

</body>
</html>

