<?php
    $sl = $_GET['SL'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="../controller/editCheck.php">
            <fieldset>
            Serial: <input type="number" name='id' value="<?=$sl?>"/> <br>
            First name :
            <input type="text" name="first_name" value=""><br>
            Last name :
            <input type="text" name="last_name" value=""><br>
            Password :
            <input type="password" name="password" value=""><br>
            Confirm password :
            <input type="password" name="confirm_password" value=""><br>
            Gender :
            <select name="gender" >
                <option value="select">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>
            Email address :
            <input type="text" name="email" value=""><br>
            Phone number :
            <input type="text" name="phone_no" value=""><br>
            Address :
            <textarea name="address" ></textarea><br>
            <input type="submit" value="submit"><br>

             <input type="submit" name='submit' value="update"/> <br>
            </fieldset>
    </form>
</body>
</html>