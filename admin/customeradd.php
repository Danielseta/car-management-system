<?php require_once('header.php'); ?>

<section class="content-header">
<div class="content-header-left">
<h1>Add Customer</h1>
</div>
<div class="content-header-right">
<a href="customers.php" class="btn btn-primary btn-sm">View All</a>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body">
<form action="customeradd.php" method="post">
<div class="form-group">
<label for="customerNumber">Customer Number</label>
<input type="text" name="customerNumber" class="form-control" id="customerNumber" placeholder="Enter customer number">
</div>
<div class="form-group">
<label for="contactlastName">Contact Last Name</label>
<input type="text" name="contactlastName" class="form-control" id="contactlastName" placeholder="Enter contact last name">
</div>
<div class="form-group">
<label for="contactfirstName">Contact First Name</label>
<input type="text" name="contactfirstName" class="form-control" id="contactfirstName" placeholder="Enter contact first name">
</div>
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
</div>
<div class="form-group">
<label for="addressLine1">Address Line 1</label>
<input type="text" name="addressLine1" class="form-control" id="addressLine1" placeholder="Enter address line 1">
</div>
<div class="form-group">
<label for="addressLine2">Address Line 2</label>
<input type="text" name="addressLine2" class="form-control" id="addressLine2" placeholder="Enter address line 2">
</div>
<div class="form-group">
<label for="city">City</label>
<input type="text" name="city" class="form-control" id="city" placeholder="Enter city">
</div>
<div class="form-group">
<label for="state">State</label>
<input type="text" name="state" class="form-control" id="state" placeholder="Enter state">
</div>
<div class="form-group">
<label for="postalCode">Postal Code</label>
<input type="text" name="postalCode" class="form-control" id="postalCode" placeholder="Enter postal code">
</div>
<div class="form-group">
<label for="country">Country</label>
<input type="text" name="country" class="form-control" id="country" placeholder="Enter country">
</div>
<div class="form-group">
<label for="salesRepEmployeeNumber">Sales Rep Employee Number</label>
<input type="text" name="salesRepEmployeeNumber" class="form-control" id="salesRepEmployeeNumber" placeholder="Enter sales rep employee number">
</div>
<div class="form-group">
<label for="creditLimit">Credit Limit</label>
<input type="text" name="creditLimit" class="form-control" id="creditLimit" placeholder="Enter credit limit">
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