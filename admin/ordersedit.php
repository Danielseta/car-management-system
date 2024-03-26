<?php require_once('header.php'); ?>

<section class="content-header">
<div class="content-header-left">
<h1>Edit order</h1>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-body">
<?php
$statement = $pdo->prepare("SELECT * FROM orders WHERE orderNumber = ?");
$statement->execute([$_GET['id']]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
?>
<form action="order-update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['orderNumber']; ?>">
<div class="form-group">
<label for="orderNumber">Order Number</label>
<input type="text" class="form-control" name="orderNumber" value="<?php echo $row['orderNumber']; ?>">
</div>
<div class="form-group">
<label for="orderDate">Order Date</label>
<input type="date" class="form-control" name="orderDate" value="<?php echo $row['orderDate']; ?>">
</div>
<div class="form-group">
<label for="requiredDate">Required Date</label>
<input type="date" class="form-control" name="requiredDate" value="<?php echo $row['requiredDate']; ?>">
</div>
<div class="form-group">
<label for="shippedDate">Shipped Date</label>
<input type="date" class="form-control" name="shippedDate" value="<?php echo $row['shippedDate']; ?>">
</div>
<div class="form-group">
<label for="status">Status</label>
<input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>">
</div>
<div class="form-group">
<label for="comments">Comments</label>
<textarea class="form-control" name="comments"><?php echo $row['comments']; ?></textarea>
</div>
<div class="form-group">
<label for="customerNumber">Customer Number</label>
<input type="text" class="form-control" name="customerNumber" value="<?php echo $row['customerNumber']; ?>">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
<?php
}
?>
</div>
</div>
</div>
</div>
</section>

<?php require_once('footer.php'); ?>
```

**order-update.php**

```php
<?php
require_once('header.php');

if (isset($_POST['id'])) {
$id = $_POST['id'];
$orderNumber = $_POST['orderNumber'];
$orderDate = $_POST['orderDate'];
$requiredDate = $_POST['requiredDate'];
$shippedDate = $_POST['shippedDate'];
$status = $_POST['status'];
$comments = $_POST['comments'];
$customerNumber = $_POST['customerNumber'];

$statement = $pdo->prepare("UPDATE orders SET orderNumber = ?, orderDate = ?, requiredDate = ?, shippedDate = ?, status = ?, comments = ?, customerNumber = ? WHERE orderNumber = ?");
$statement->execute([$orderNumber, $orderDate, $requiredDate, $shippedDate, $status, $comments, $customerNumber, $id]);

header('Location: order-view.php');
}
?>
```

**order-delete.php**

```php
<?php
require_once('header.php');

if (isset($_GET['id'])) {
$id = $_GET['id'];

$statement = $pdo->prepare("DELETE FROM orders WHERE orderNumber = ?");
$statement->execute([$id]);

header('Location: order.php');
}
?>
```