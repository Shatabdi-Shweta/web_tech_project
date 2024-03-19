<?php
    include_once '../model/donorDetailsModel.php';
    include_once '../model/campaignPerformances.php';

    $recentDonation = recent_donation();
    $ongoingCampaign = ongoing_campaign();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Charity and Donation</h1>

    <table width="70%">
        <tr>
            <td width="50%">
                <form action="">
                    <fieldset>
                        <legend>Recent Donation</legend>

                        <b>Name:</b> <?=$recentDonation[0]['donor_name']?>
                        <br><br>
                        <b>Campaign:</b> Sylhet Flood
                    </fieldset>
                </form>
            </td>

            <td>
                <form action="">
                    <fieldset>
                        <legend>Ongoing Campaign</legend>

                        <b>Campaign Name:</b> <?=$ongoingCampaign[0]['campaign_name']?>
                        <br><br>
                        <b>Progress:</b> <?=$ongoingCampaign[0]['total_response']?>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td>
                <br><br><br>
            </td>
        </tr>

        <tr>
            <td>
                <form action="">
                    <fieldset>
                        <legend>Impact</legend>

                        We did it! Together, we raised $20000 for Sylhet Flood! Thanks to your generosity, we're making a real difference. Because of your support, we can continue charity mission.
                    </fieldset>
                </form>
            </td>

            <td>
                <form action="">
                    <fieldset>
                        <legend>Upcoming Event</legend>

                        <b>Shaping Tomorrow, Today: Help Us Launch the "Lunar Oasis" Project!</b>
                        <br><br>
                        Imagine a future where lunar settlements rely on self-sustaining ecosystems. The "Lunar Oasis" project, spearheaded by [Your Charity Name], aims to make this vision a reality.

This groundbreaking initiative will develop and send the first biodomes to the Moon, fostering plant growth and paving the way for a more sustainable future in space exploration.
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td>
                <br><br>
            </td>
        </tr>

        <tr>
            <td colspan=2>
                <center>
                    <a href="login.php"><button>Login</button></a>
                    <a href="signup.php"><button>Registration</button></a>
                </center>
            </td>
        </tr>
    </table>
</body>
</html>