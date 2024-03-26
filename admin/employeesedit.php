<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("SELECT * FROM employees WHERE employeeNumber = ?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
$employeeNumber = $row['employeeNumber'];
$lastName = $row['lastName'];
$firstName = $row['firstName'];
$extension = $row['extension'];
$email = $row['email'];
$officeCode = $row['officeCode'];
$reportsTo = $row['reportsTo'];
$jobTitle = $row['jobTitle'];
}
?>

<section class="content-header">
<h1>Edit Employee</h1>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body">
<form action="employee-edit.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
<label for="employeeNumber">Employee Number</label>
<input type="text" name="employeeNumber" id="employeeNumber" class="form-control" value="<?php echo $employeeNumber; ?>">
</div>
<div class="form-group">
<label for="lastName">Last Name</label>
<input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName; ?>">
</div>
<div class="form-group">
<label for="firstName">First Name</label>
<input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName; ?>">
</div>
<div class="form-group">
<label for="extension">Extension</label>
<input type="text" name="extension" id="extension" class="form-control" value="<?php echo $extension; ?>">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
</div>
<div class="form-group">
<label for="officeCode">Office Code</label>
<input type="text" name="officeCode" id="officeCode" class="form-control" value="<?php echo $officeCode; ?>">
</div>
<div class="form-group">
<label for="reportsTo">Reports To</label>
<input type="text" name="reportsTo" id="reportsTo" class="form-control" value="<?php echo $reportsTo; ?>">
</div>
<div class="form-group">
<label for="jobTitle">Job Title</label>
<input type="text" name="jobTitle" id="jobTitle" class="form-control" value="<?php echo $jobTitle; ?>">
</div>
<div class="form-group">
<input type="submit" name="submit" value="Update" class="btn btn-primary">
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<?php require_once('footer.php'); ?>
