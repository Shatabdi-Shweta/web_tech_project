<?php
    require_once('../controller/sessionCheck.php');
    include_once('../model/employeeModel.php');
    if(isset($_GET['id'])){
        $Id = $_GET['id'];
    }
    $employees = searchEmployee($Id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employee</title>
</head>
<body>
    <form action="searchEmployeeController.php" method="post">
        Employee Id:
        <input type="number" name="search_id" value="search here.....">
        <input type="submit" name="submit" value="search">

        <table border="1">
            <tr>
                <td>Id</td>
                <td>Employee Name</td>
                <td>Contact No</td>
                <td>User Name</td>
                <td>Password</td>
            </tr>

            <?php for($i=0; $i<count($employees); $i++){
                ?>
                <tr>
                    <td><?=$employees[$i]['id']?></td>
                    <td><?php echo $employees[$i]['employee_name']?></td>
                    <td><?php echo $employees[$i]['contact_no']?></td>
                    <td><?php echo $employees[$i]['user_name']?></td>
                    <td><?php echo $employees[$i]['password']?></td>
                </tr>
                <?php
                }
            ?>
        </table>
    </form>
</body>
</html>