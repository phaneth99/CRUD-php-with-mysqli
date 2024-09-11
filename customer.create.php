<?php include "header.php"; ?>

<div class="container-fluid px-4 mb-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4>Add New Customer
                <a href="customers.php" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <?php alertMessage(); ?>
        <div class="card-body">
            <form action="code.php" method="POST">
            <div class="row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="lname">
                    </div>

                    <div class="col-6">
                        <label for="name" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="row mt-4">
                        <div class="col-6"><input type="submit" class="btn btn-primary" value="Add" name="addcustomer">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>