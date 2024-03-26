<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View orders</h1>
	</div>
	<div class="content-header-right">
<a href="orderadd.php" class="btn btn-primary btn-sm">Add Orders</a>
</div>
</section>
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
								<th width="10">orderNumbepr</th>
								<th width="60">orderDate</th>
								<th width="60">requiredDate</th>
								<th width="60">shippedDate</th>
								<th width="60">status</th>
								<th width="60">comments</th>
								<th width="60">customerNumber</th>
							
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare('SELECT * FROM `orders`');
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
								
									<td><?php echo $row['orderNumber']; ?></td>
									<td>$<?php echo $row['orderDate']; ?></td>
									<td>$<?php echo $row['requiredDate']; ?></td>
									<td>$<?php echo $row['shippedDate']; ?></td>
									<td>$<?php echo $row['status']; ?></td>
									<td>$<?php echo $row['comments']; ?></td>
									<td>$<?php echo $row['customerNumber']; ?></td>
									
									<td>										
										<a href="ordersedit.php?id=<?php echo $row['orderNumber']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="ordersdelete.php?id=<?php echo $row['orderNumber']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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