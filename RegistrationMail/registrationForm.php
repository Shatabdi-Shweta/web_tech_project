<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // name validation
    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
       
        
        $firstname_words = explode(' ', $firstname);
        $lastname_words = explode(' ', $lastname);
       
        if (count($firstname_words) >= 2 && count($lastname_words) >= 2) {
            
            if (ctype_alpha(str_replace([' ', '.', '-'], '', $firstname)) && ctype_alpha(str_replace([' ', '.', '-'], '', $lastname))) {
                
                if (ctype_alpha(substr($firstname, 0, 1)) && ctype_alpha(substr($lastname, 0, 1))) {
                    
                    echo "First name and last name are valid.";
                } else {
                    
                    echo "First name and last name must start with a letter.";
                }
            } else {
                
                echo "Invalid characters in first name or last name. Names can only contain alphabetic characters, dots, or dashes.";
            }
        } else {
           
            echo "First name and last name must contain at least two words.";
        }
    } else {
        
        echo "First name and last name fields are required.";
    }
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // email validation
    if (!empty($_POST['email'])) {
       
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            
            echo "Email is valid.";
        } else {
            
            echo "Invalid email format.";
        }
    } else {
        
        echo "Email field is required.";
    }
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // DOB validation
    if ($_POST['month'] != "Month" && $_POST['day'] != "Day" && $_POST['year'] != "Year") {
        $month = (int)$_POST['month'];
        $day = (int)$_POST['day'];
        $year = (int)$_POST['year'];
       
        
        if ($day >= 1 && $day <= 31 && $month >= 1 && $month <= 12 && $year >= 1950 && $year <= date("Y")) {
            
            echo "DOB is valid.";
        } else {
            
            echo "Invalid date range.";
        }
    } else {
        
        echo "Please select a valid date.";
    }
}
 
// gender validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['Gender']) && $_POST['Gender'] != "") {
       
    } else {
        
        echo "Please select at least one option.";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            First Name<br /><input type="text" name="firstname" value="" /><br />
            Last Name<br /><input type="text" name="firstname" value="" /><br />
        <fieldset>
            <legend>Date of Birth</legend>
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
 
         <hr>
        </fieldset>
 
        <fieldset >
       
            <legend>Gender</legend>
            <input type="radio" name="Gender"> Male
            <input type="radio" name="Gender"> Female
            <input type="radio" name="Gender"> Other
        </fieldset>
 
            Phone <br><input type="text" name="phone" value="" /><br />
           
            Email<br /><input type="email" name="email" value="" /><br />
            Password<br /><input type="password" name="password"value=""/><br />
            Confirm Password<br /><input type="password" name="password"value=""/><br />
           
            <input type="submit" name="submit" value="Sign Up" />
           
          </fieldset>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>