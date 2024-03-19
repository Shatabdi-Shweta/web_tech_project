<?php
    include_once '../controller/educationalResources.php';

    $resource = all_resources();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resources</title>
</head>
<body>
    <a href="addResource.php">Add Educational Resource</a>
    <br><br><br>
    <?php for($i=0; $i<count($resource); $i++){?>
        <a href= "viewResource.php?id=<?=$resource[$i]['resource_id']?>"><?=$resource[$i]['resource_title']?></a>
        <br><br>
        
    <?php } ?>
</body>
</html>