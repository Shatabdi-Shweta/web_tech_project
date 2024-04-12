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
        Date of Birth:
        <select name = "month">
            <option>Month</option>
            <?php
                for($month = 1; $month <= 12; $month++)
                echo"<option value = '".$month."'>".$month."</option>";
            ?>
        </select>
 
        <select name = "day">
                <option>Day</option>
                <?php
                    for($day = 1; $day <= 31; $day++){
                    echo "<option value = '".$day."'>".$day."</option>";
                }
            ?>
        </select>
 
        <select name = "year">
            <option>Year</option>
            <?php
                $y = date("Y", strtotime("+8 HOURS"));
                for($year = 1950; $y >= $year; $y--){
                    echo "<option value = '".$y."'>".$y."</option>";
                }
            ?>
        </select>    
 
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