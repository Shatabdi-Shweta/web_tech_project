<?php 
    require_once '../controller/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <form action="../controller/currencyConverter.php" method="post">
        <fieldset>
            <legend>Currency Converter</legend>
            From:
            <select name="fromCur">
                <option value="usd">USD</option>
                <option value="inr">INR</option>
            </select>
            &nbsp; &nbsp;
            To:
            <select name="toCur">
                <option value="bdt">BDT</option>
            </select>
            <br><br>
            Amount:
            <input type="text" name="amount">
            <br><br>
            <input type="submit" value="Convert">
        </fieldset>
    </form>
    <br>
    <h3>Have Any Issue?</h3>
    <a href="contact.php"><input type="button" value="Contact Support"></a>
    <a href="home.php"><button>Return Home</button></a>
</body>
</html>