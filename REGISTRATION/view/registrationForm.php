<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="../controller/registrationCheck.php" method="post" enctype="">
        <fieldset>
        <legend>Registration Form</legend>
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

        <p>Already have and account? <a href="login.php">Login here</a>

        </fieldset>
    </form>
</body>
</html>