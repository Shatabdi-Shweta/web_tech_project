<?php
    $Id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <form action="../controller/editProductController.php" method="post">
        <fieldset>
            Id:
            <input type="number" name="id" value="<?=$Id?>"><br>
            Product Name:
            <input type="text" name="product_name" value=""><br>
            Quantity:
            <input type="number" name="quantity" value=""><br>
            Price:
            <input type="number" name="price" value=""><br>

            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>