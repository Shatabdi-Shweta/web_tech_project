<?php
    require_once('db.php');

    function recent_donation() {
        $conn = dbConnection();
        $sql = "select * from donor_details limit 1";
        $result = mysqli_query($conn,$sql);
        $recentDonation = [];
        while($recent = mysqli_fetch_assoc($result)){
            array_push($recentDonation,$recent);
        }
        return $recentDonation;
    }
?>