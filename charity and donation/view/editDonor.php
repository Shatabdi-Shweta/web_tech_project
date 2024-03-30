<?php
    $SL= $_GET['serial'];

?>

<html lang="en">
<head>
    <title>Edit Donor</title>
</head>
<body>
        <form action="../controller/editDonorController.php" method="post">
            <fieldset>
            Serial: <input type="number" name='serial' value="<?=$SL?>"/> <br>
            Donor_name: <input type="text" name='donor_name' value=""/> <br>
            Recent_donation: <input type="number" name='recent_donation' value=""/> <br>
            Donation_date: <input type="date" name='donation_date' value=""/> <br>
            Total_donation: <input type="number" name='total_donation' value=""/> <br>
            Contact_information: <input type="email" name='contact_information' value=""/> <br>
            
            <input type="submit" name='submit' value="update"/> <br>
            </fieldset>
        </form>
</body>
</html>