<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <form action="../controller/contact.php" method="post">
        <fieldset>
            <legend>Contact</legend>
            Your Email:
            <input type="text" name="email">
            <br><br>
            Description:
            <textarea name="description" cols="30" rows="10"></textarea>
            <br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <br>
    <a href="home.php"><button>Return Home</button></a>
</body>
</html>