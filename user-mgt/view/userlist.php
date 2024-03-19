<?php

    $users = [
        ['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>'12'],
        ['id'=>2, 'name'=>'xyz', 'email'=>'alamin@aiub.edu', 'password'=>'12'],
        ['id'=>3, 'name'=>'abc', 'email'=>'alamin@aiub.edu', 'password'=>'12'],
        ['id'=>4, 'name'=>'pqr', 'email'=>'alamin@aiub.edu', 'password'=>'12']
    ];

?>

<html>
<head>
    <title>Userlist</title>
</head>
<body>
    <a href="home.php">Back </a>  |
    <a href="logout.php">logout </a>
    
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        <tr>
<?php for($i=0; $i<count($users); $i++){?>
        <tr>
            <td><?=$users[$i]['id']?></td>
            <td><?php echo $users[$i]['name']?></td>
            <td><?php echo $users[$i]['email']?></td>
            <td>
            <a href="edit.php?id=<?=$users[$i]['id']?>">Edit </a> |
            <a href="delete.php">Delete </a> |
            <a href="details.php">Details </a> 
            </td>
        <tr>
<?php } ?>

    </table>
</body>
</html>