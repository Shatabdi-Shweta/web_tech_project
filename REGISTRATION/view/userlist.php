<?php
    // require_once '../controller/sessionCheck.php';
    include_once('../model/userModel.php');
    $users = getAllUser();
?>


<html>
<head>
<title>Userlist</title>
</head>
<body>

<table border=1>
    <tr>
        <td>Serial</td>
        <td>First_name</td>
        <td>Last_name</td>
        <td>Password</td>
        <td>Confirm_password</td>
        <td>Gender</td>   
        <td>Email</td>  
        <td>Phone number</td>   
        <td>Address</td>  
    <tr>
<?php for($i=0; $i<count($users); $i++){?>
    <tr>
        <td><?=$users[$i]['SL']?></td>
        <td><?php echo $users[$i]['first_name']?></td>
        <td><?php echo $users[$i]['last_name']?></td>
        <td><?php echo $users[$i]['password']?></td>
        <td><?php echo $userss[$i]['total_donation']?></td>
        <td><?php echo $users[$i]['contact_information']?></td>
    <tr>
<?php } ?>
<a href="home.php"><button>Return Home</button></a>

</table>

</body>
</html>