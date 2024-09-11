<?php include "header.php"; ?>
<?php
    if(isset( $_GET['id'])){
        $id = $_GET['id'];

    if (is_numeric($id)) {
        $smt = $conn->prepare("CALL GetCustID(?)");
        $smt->bind_param('i', $id);
        $smt->execute();
        $result = $smt->get_result();

        if(mysqli_num_rows($result) > 0){
            $custData = $result->fetch_assoc();
        }else{
            redirect("customers.php", "No Customer Found");
        }
        $smt->close();

    }else{
        redirect("customers.php", "Id is not number!");
    }
    }else{
    redirect("customers.php", "No Param Id!");
    }

?>
<div class="container-fluid px-4 mb-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4>Edit Customer
                <a href="customers.php" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <?php alertMessage(); ?>
        <div class="card-body">
            <form action="code.php" method="POST">
                <div class="row">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $custData['cust_id'] ?>">
                    <div class="col-md-6">
                        <label for="name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $custData['first_name'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $custData['last_name'] ?>" >
                    </div>

                    <div class="col-6">
                        <label for="name" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $custData['email']?>">
                    </div>
                    <div class=" row mt-4">
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary" value="Update" name="updateCust">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>