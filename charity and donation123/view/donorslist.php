<?php
    require_once '../controller/sessionCheck.php';
    include_once('../model/reportAndAnalysisModel.php');
    $donors = show_donor_details();
?>

<html>
<head>
<title>Donorlist</title>
</head>
<body>

<table border=1>
    <tr>
        <td>Serial</td>
        <td>Donor_Name</td>
        <td>Recent_Donation</td>
        <td>Donation_date</td>
        <td>Total_donation</td>
        <td>Contact_Information</td>   
       
    <tr>
<?php for($i=0; $i<count($donors); $i++){?>
    <tr>
        <td><?=$donors[$i]['serial']?></td>
        <td><?php echo $donors[$i]['donor_name']?></td>
        <td><?php echo $donors[$i]['recent_donation']?></td>
        <td><?php echo $donors[$i]['donation_date']?></td>
        <td><?php echo $donors[$i]['total_donation']?></td>
        <td><?php echo $donors[$i]['contact_information']?></td>
    <tr>
<?php } ?>


</table>

</body>
</html>
