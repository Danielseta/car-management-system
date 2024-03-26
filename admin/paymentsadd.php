```php
<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Payments</h1>
    </div>
    <div class="content-header-right">
        <a href="payments.php" class="btn btn-primary btn-sm">View Payments</a>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="paymentsadd.php" method="post">
                        <div class="form-group">
                            <label for="customerNumber">Customer Number:</label>
                            <input type="text" name="customerNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="checkNumber">Check Number:</label>
                            <input type="text" name="checkNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="paymentDate">Payment Date:</label>
                            <input type="date" name="paymentDate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="text" name="amount" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Add Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>