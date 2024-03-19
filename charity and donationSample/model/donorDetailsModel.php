<?php
    require_once('db.php');

    function allDonor() {
        $con = dbConnection();
        $sql = "select * from donor_details";
        $result = mysqli_query($con, $sql);
        $donors = [];
        
        while($donor = mysqli_fetch_assoc($result)){
            array_push($donors, $donor);
        }
        
        return $donors;
    }
?>