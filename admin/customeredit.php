<?php require_once('header.php'); ?>

<section class="content-header">
<div class="content-header-left">
<h1>Edit Customer</h1>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body">
<form action="customer-edit.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['customerNumber']; ?>">
<div class="form-group">
<label for="customerNumber">Customer Number</label>
<input type="text" name="customerNumber" value="<?php echo $row['customerNumber']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="contactlastName">Contact Last Name</label>
<input type="text" name="contactlastName" value="<?php echo $row['contactLastName']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="contactfirstName">Contact First Name</label>
<input type="text" name="contactfirstName" value="<?php echo $row['contactFirstName']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="addressLine1">Address Line 1</label>
<input type="text" name="addressLine1" value="<?php echo $row['addressLine1']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="addressLine2">Address Line 2</label>
<input type="text" name="addressLine2" value="<?php echo $row['addressLine2']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="city">City</label>
<input type="text" name="city" value="<?php echo $row['city']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="state">State</label>
<input type="text" name="state" value="<?php echo $row['state']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="postalcode">Postal Code</label>
<input type="text" name="postalcode" value="<?php echo $row['postalCode']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="country">Country</label>
<input type="text" name="country" value="<?php echo $row['country']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="saleRepEmployeeNumber">Sales Rep Employee Number</label>
<input type="text" name="saleRepEmployeeNumber" value="<?php echo $row['salesRepEmployeeNumber']; ?>" class="form-control">
</div>
<div class="form-group">
<label for="CreditLimit">Credit Limit</label>
<input type="text" name="CreditLimit" value="<?php echo $row['creditLimit']; ?>" class="form-control">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<?php require_once('footer.php'); ?>
```



```