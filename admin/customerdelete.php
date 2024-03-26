<?php require_once('header.php'); ?>

<section class="content-header">
<div class="content-header-left">
<h1>Delete Customer</h1>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body">
<form action="customer-delete.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['customerNumber']; ?>">
<p>Are you sure want to delete this item?</p>
<p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
</div>
</div>
</div>
</section>

<?php require_once('footer.php'); ?>