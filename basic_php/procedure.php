<?php include "conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Procedure</title>
</head>

<body>
    <?php
    $smt = $conn->prepare("CALL get_customer()");
    $smt->execute();

    $result = $smt->get_result();
    $cust_data = [];

    while ($row = $result->fetch_assoc()) {
        $cust_data[] = $row;
    }

    foreach ($cust_data as $cust_item) {
        echo "ID:{$cust_item['cust_id']} First Name : {$cust_item['first_name']} Last Name : {$cust_item['last_name']} Email: {$cust_item['email']} <br>";
    }

    // while ($row = $result->fetch_assoc()) {
    //     echo "ID:{$row['cust_id']} First Name : {$row['first_name']} Last Name : {$row['last_name']} Email: {$row['email']} <br>";
    // }
    ?>
</body>

</html>