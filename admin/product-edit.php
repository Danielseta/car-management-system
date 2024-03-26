```php
<?php require_once('header.php'); ?>


<section class="content-header">
<div class="content-header-left">
<h1>Edit Product</h1>
</div>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<?php
if (isset($_POST['submit'])) {
$productCode = $_POST['productCode'];
$productName = $_POST['productName'];
$productLine = $_POST['productLine'];
$productVendor = $_POST['productVendor'];
$productDescription = $_POST['productDescription'];
$quantityInStock = $_POST['quantityInStock'];
$buyPrice = $_POST['buyPrice'];
$MSRP = $_POST['MSRP'];

$stmt = $pdo->prepare("UPDATE products SET productName = ?, productLine = ?, productVendor = ?, productDescription = ?, quantityInStock = ?, buyPrice = ?, MSRP = ? WHERE productCode = ?");
$stmt->execute([$productName, $productLine, $productVendor, $productDescription, $quantityInStock, $buyPrice, $MSRP, $productCode]);

echo '<div class="alert alert-success">Product updated successfully</div>';
}

$stmt = $pdo->prepare("SELECT * FROM products WHERE productCode = ?");
$stmt->execute([$_GET['id']]);
$product = $stmt->fetch();
?>

<form class="form-horizontal" action="" method="post">
<div class="box box-info">
<div class="box-body">
<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Code</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="productCode" value="<?php echo $product['productCode']; ?>" readonly>
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Name</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="productName" value="<?php echo $product['productName']; ?>">
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Line</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="productLine" value="<?php echo $product['productLine']; ?>">
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Vendor</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="productVendor" value="<?php echo $product['productVendor']; ?>">
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Product Description</label>
<div class="col-sm-6">
<textarea class="form-control" name="productDescription" rows="3"><?php echo $product['productDescription']; ?></textarea>
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Quantity In Stock</label>
<div class="col-sm-6">
<input type="number" class="form-control" name="quantityInStock" value="<?php echo $product['quantityInStock']; ?>">
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Buy Price</label>
<div class="col-sm-6">
<input type="number" class="form-control" name="buyPrice" value="<?php echo $product['buyPrice']; ?>">
</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">MSRP</label>
<div class="col-sm-6">
<input type="number" class="form-control" name="MSRP" value="<?php echo $product['MSRP']; ?>">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-6">
<button type="submit" class="btn btn-success pull-left" name="submit">Update</button>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</section>

<?php require_once('footer.php'); ?>