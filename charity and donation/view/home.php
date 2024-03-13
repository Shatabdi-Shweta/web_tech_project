<?php 
    //session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome Home! </h1> 
    <a href="logout.php">logout </a>   
</body>
</html>