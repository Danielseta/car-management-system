<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Products</h1>
	</div>
	<div class="content-header-right">
<a href="productadd.php" class="btn btn-primary btn-sm">Add Products</a>
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
								<th width="10">productCode</th>
								<th width="60">productName</th>
								<th width="60">productLine</th>
								<th width="60">productVendor</th>
								<th width="60">productDescription</th>
								<th width="60">quantityInStock</th>
								<th width="60">buyPrice</th>
								<th width="60">MSRP</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare('SELECT * FROM `products`');
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
								
									<td><?php echo $row['productCode']; ?></td>
									<td>$<?php echo $row['productName']; ?></td>
									<td>$<?php echo $row['productLine']; ?></td>
									<td>$<?php echo $row['productVendor']; ?></td>
									<td>$<?php echo $row['productDescription']; ?></td>
									<td>$<?php echo $row['quantityInStock']; ?></td>
									<td>$<?php echo $row['buyPrice']; ?></td>
									<td>$<?php echo $row['MSRP']; ?></td>
									
									<td>										
										<a href="product-edit.php?id=<?php echo $row['productCode']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=<?php echo $row['p_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>