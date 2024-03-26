<?php require_once('header.php'); ?>

<section class="content-header">
<div class="content-header-left">
<h1>View Offices</h1>
</div>
<div class="content-header-right">
<a href="officeadd.php" class="btn btn-primary btn-sm">Add Office</a>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body table-responsive">
<table id="example1" class="table table-bordered table-hover table-striped">
<thead class="thead-dark">
<tr>
<th width="10">#</th>
<th width="10">Office Code</th>
<th width="60">City</th>
<th width="60">Phone</th>
<th width="60">Address Line 1</th>
<th width="60">Address Line 2</th>
<th width="60">State</th>
<th width="60">Country</th>
<th width="60">Postal Code</th>
<th width="60">Territory</th>
<th width="80">Action</th>
</tr>
</thead>
<tbody>
<?php
$i = 0;
// Assuming $pdo is a valid PDO instance
$statement = $pdo->prepare('SELECT * FROM `offices`');
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
$i++;
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['officeCode']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['addressLine1']; ?></td>
<td><?php echo $row['addressLine2']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['postalCode']; ?></td>
<td><?php echo $row['territory']; ?></td>
<td>
<a href="officeedit.php?id=<?php echo $row['officeCode']; ?>" class="btn btn-primary btn-xs">Edit</a>
<a href="#" class="btn btn-danger btn-xs" data-href="officedelete.php?id=<?php echo $row['officeCode']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
</div>
<div class="modal-body">
<p>Are you sure want to delete this item?</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<a class="btn btn-danger btn-ok" href="#">Delete</a>
</div>
</div>
</div>
</div>

<?php require_once('footer.php'); ?>