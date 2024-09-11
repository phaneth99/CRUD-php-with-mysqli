<?php
if (isset($_POST["payment_method"])) {

    if (isset($_POST["credit-card"])) {
        $payment_method = $_POST["credit-card"];

        // If else statement

        // if ($payment_method == "Visa") {
        //     echo "You Paid By Visa";
        // } elseif ($payment_method == "Master Card") {

        //     echo "You Paid By Master Card";
        // } elseif ($payment_method == "ABA") {
        //     echo "You Paid By ABA KHQR";
        // }

        // Swtich Case

        switch ($payment_method) {
            case 'Visa':
                echo "Paid By {$payment_method}";
                break;
            case 'Master Card':
                echo "Piad By {$payment_method}";
                break;
            case 'ABA':
                echo "Paid By {$payment_method}";
                break;
            default:
                echo "Please Select the payment method";
        }
    } else {
        echo "Please Select The Payment Method";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>

<body>
    <form action="radio.php" method="POST">
        <input type="radio" name="credit-card" value="Visa">
        <label for="">Visa</label>
        <input type="radio" name="credit-card" value="Master Card">
        <label for="">Master Card</label>
        <input type="radio" name="credit-card" value="ABA">
        <label for="">ABA KHQR</label><br>
        <input type="submit" name="payment_method" value="Submit">
    </form>
</body>

</html>