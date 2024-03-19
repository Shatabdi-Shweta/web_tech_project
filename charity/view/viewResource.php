<?php
    include_once '../model/educationalResource.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $resource = viewResourceForId($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resource</title>
</head>
<body>
    <h1><?=$resource[0]['resource_title']?></h1>
    <h4>Category: <?=$resource[0]['category']?></h4>
    <br>
    <?=$resource[0]['description']?>
</body>
</html>