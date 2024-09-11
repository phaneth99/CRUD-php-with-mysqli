<?php include "config/conn.php";
include "config/function.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    if (number_format($id)) {
        $smt = $conn->prepare("Call DeleteCustID(?)");
        $smt->bind_param("i", $id);

        if ($smt->execute()) {
            redirect("customers.php", "Customer Delete Successfully!");
        }else{

            redirect("customers.php", "Something Went Wrong!");
        }
    }else{
        redirect("customers.php", "No Param");
    }
    }
