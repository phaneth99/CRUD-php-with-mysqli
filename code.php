<?php include "config/conn.php";
include "config/function.php";

if (isset($_POST['addcustomer'])) {

    $fname = validate($_POST['fname']);
    $lname = validate($_POST['fname']);
    $email = validate($_POST['email']);

    if (empty($fname) || empty($lname) || empty($email)) {
        redirect("customer.create.php", "Please fill required Fields");

    } elseif ( SpecialChars($fname) || SpecialChars($lname)) {
        redirect("customer.create.php", "Invalid Character");
    } else {

        $smt = $conn->prepare("CALL get_all_customers_email()");
        $smt->execute();
        $result = $smt->get_result();
        $smt->close();
        $existEmail = false;

        while($row = $result->fetch_assoc()){
            if($row['email'] == $email){
                $existEmail = true;
            }
        }
        if ($existEmail) {
            redirect("customer.create.php", "Email used by other users!");

        } else {
            $smt = $conn->prepare("CALL add_customer(?, ?, ?)");
            $smt->bind_param("sss", $fname, $lname, $email);
            if ($smt->execute()) {
                redirect("customers.php", "Customer Create Successfully!");
            } else {
                echo "Error!" . $smt->error;
            }
            $stmt->close();
        }
    }
}

// Update customer

if (isset($_POST['updateCust'])) {
    $id = $_POST['id'];
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['fname']);
    $email = validate($_POST['email']);

    if (SpecialChars($fname) || SpecialChars($lname)) {
        redirect("customer_edit.php?id={$id}", "Invalid Character");
    } elseif (empty($fname) || empty($lname) || $email = empty($_POST['email'])) {
        redirect("customer_edit.php?id={$id}", "Please fill required fields!");
    } else {
        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $email = validate($_POST['email']);

        $smt = $conn->prepare("CALL UpdateCust(?,?,?,?)");
        $smt->bind_param('sssi', $fname, $lname, $email, $id);
        $updateCust = $smt->execute();
        if ($updateCust) {
            redirect("customers.php", "Customer ID: {$id} Updated Successfully!");
        } else {
            redirect("customer_edit.php?id={$id}", "");
        }
    }
    $smt->close();
}
