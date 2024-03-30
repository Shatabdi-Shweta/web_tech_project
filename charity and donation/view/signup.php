<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
</head>
<body>
  <form method="post" action="../controller/signupCheck.php" enctype="">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <fieldset>
            <legend><h3>REGISTRATION</h3></legend>

            Name<br /><input type="text" name="username" value="" /><br />
            Email<br /><input type="email" name="email" value="" /><br />
            Password<br /><input
              type="password"
              name="password"
              value=""
            /><br />
            Confirm Password<br /><input
              type="password"
              name="confirm_password"
              value=""
            /><br />
            User Type
            <hr />
            <input type="radio" name="user-type" value="Donor" />Donor
            <input type="radio" name="user-type" value="Admin" />Admin
            <input type="radio" name="user-type" value="Volunteer"/>Volunteer
            <input type="radio" name="user-type" value="User"/>User
            <hr />
            <input type="submit" name="submit" value="Sign Up" />
            
            <p>Already have and account? <a href="login.php">Login here</a>

          </fieldset>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
