<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Employee</h1>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="employeesadd.php" method="POST">
                        <div class="form-group">
                            <label for="employeeNumber">Employee Number</label>
                            <input type="text" name="employeeNumber" class="form-control" id="employeeNumber" placeholder="Enter employee number">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="extension">Extension</label>
                            <input type="text" name="extension" class="form-control" id="extension" placeholder="Enter extension">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="officeCode">Office Code</label>
                            <input type="text" name="officeCode" class="form-control" id="officeCode" placeholder="Enter office code">
                        </div>
                        <div class="form-group">
                            <label for="reportsTo">Reports To</label>
                            <input type="text" name="reportsTo" class="form-control" id="reportsTo" placeholder="Enter reports to">
                        </div>
                        <div class="form-group">
                            <label for="jobTitle">Job Title</label>
                            <input type="text" name="jobTitle" class="form-control" id="jobTitle" placeholder="Enter job title">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>