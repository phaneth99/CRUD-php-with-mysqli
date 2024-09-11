<?php include "header.php"; ?>

<div class="container-fluid px-4 mb-4">
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Customers
                <a href="customer.create.php" class="btn btn-primary float-end">Add Customer</a>
            </h4>
        </div>
        <?php alertMessage(); ?>
        <div class="card-body">
            <?php
            // Prepare the stored procedure call
            $smt = $conn->prepare("CALL get_customer()");
            $smt->execute();
            $result = $smt->get_result();

            if (mysqli_num_rows($result)) {
            ?>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $row): ?>
                                <tr>
                                    <td><?= ($row['cust_id']) ?></td>
                                    <td><?= ($row['first_name']) ?></td>
                                    <td><?= ($row['last_name']) ?></td>
                                    <td><?= ($row['email']) ?></td>
                                    <!-- <td> -->
                                    <?php
                                    // You can add logic here if needed, e.g., user status
                                    ?>
                                    <!-- </td> -->
                                    <td>
                                        <a href="customer_edit.php?id=<?= ($row['cust_id']) ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <!-- Uncomment if you have a delete script -->

                                        <a href="javascript:void(0);"
                                            onclick="confirmDeletion(<?= $row['cust_id'] ?>);"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            <?php
            } else {
            ?>

                <div class="alert alert-warning" role="alert">
                    No records found!
                </div>

            <?php
            }
            $smt->close();
            $conn->close();
            ?>
        </div>
    </div>
</div>

<script>
    function confirmDeletion(cust_id) {
        if (confirm("Are you sure you want to delete this customer?")) {
            window.location.href = 'customer_delete.php?id= ' +cust_id;
        }
    }
</script>
<?php include "footer.php"; ?>