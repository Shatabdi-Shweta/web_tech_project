<?php
    include_once '../model/db.php';

    $SL = $_POST['serial'];
    $Donor_name = $_POST['donor_name'];
    $recent_donation= $_POST['recent_donation'];
    $donation_date = $_POST['donation_date'];
    $total_donation = $_POST['total_donation'];
    $contact_info = $_POST['contact_information'];
    
    $conn = dbConnection();
    $query = "UPDATE donor_details set  donor_name='{$Donor_name}', recent_donation='{$recent_donation}', 
            donation_date='{$donation_date}', total_donation='{$total_donation}', contact_information='{$contact_info}' where serial='{$SL}'";
    $data = mysqli_query($conn, $query);

    echo $data;

?>