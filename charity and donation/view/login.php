<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
</head>
<body>
    <form method="get" action="../controller/logInCheck.php" enctype="">

        Username:<input type="text" name="username" value=""><br>
        Password:<input type="password" name="password" value=""><br>
                <input type="submit" name="submit" value="submit">
        
        <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
    </form>
</body>
</html>