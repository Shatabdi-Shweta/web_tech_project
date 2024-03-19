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
    <a href="resource.php">Educational resources</a>  <br> 
    <a href="reportingAndAnalytics.php">Reporting and Analytics</a>  <br> 
    <a href="logout.php">logout </a> 
    
   
</body>
</html>