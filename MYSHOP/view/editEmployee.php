<?php 
    $Id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <form action="../controller/editEmployeeController.php" method="post" >
        <fieldset>
            Id: 
            <input type="number" name='id' value="<?=$Id?>" ><br>
            Employee Name:
            <input type="text" name='employee_name' value=""><br>
            Contact No:
            <input type="text" name='contact_no' value=""><br>
            User Name:
            <input type="text" name='user_name' value=""><br>
            Password:
            <input type="password" name='password' value=""><br>

            <input type="submit" name='submit' value="submit">
        </fieldset>
    </form>
</body>
</html>