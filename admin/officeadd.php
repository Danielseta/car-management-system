<?php require_once('header.php'); ?>

<section class="content-header">
<div class="content-header-left">
<h1>Add Office</h1>
</div>
<div class="content-header-right">
<a href="office.php" class="btn btn-primary btn-sm">View All</a>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body">
<form action="office-add.php" method="post">
<div class="form-group">
<label for="officeCode">Office Code</label>
<input type="text" name="officeCode" id="officeCode" class="form-control" required>
</div>
<div class="form-group">
<label for="city">City</label>
<input type="text" name="city" id="city" class="form-control" required>
</div>
<div class="form-group">
<label for="phone">Phone</label>
<input type="text" name="phone" id="phone" class="form-control" required>
</div>
<div class="form-group">
<label for="addressLine1">Address Line 1</label>
<input type="text" name="addressLine1" id="addressLine1" class="form-control" required>
</div>
<div class="form-group">
<label for="addressLine2">Address Line 2</label>
<input type="text" name="addressLine2" id="addressLine2" class="form-control">
</div>
<div class="form-group">
<label for="state">State</label>
<input type="text" name="state" id="state" class="form-control" required>
</div>
<div class="form-group">
<label for="country">Country</label>
<input type="text" name="country" id="country" class="form-control" required>
</div>
<div class="form-group">
<label for="postalCode">Postal Code</label>
<input type="text" name="postalCode" id="postalCode" class="form-control" required>
</div>
<div class="form-group">
<label for="territory">Territory</label>
<input type="text" name="territory" id="territory" class="form-control" required>
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