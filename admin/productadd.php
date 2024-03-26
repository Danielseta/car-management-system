<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Product</h1>
    </div>
    <div class="content-header-right">
        <a href="payments.php" class="btn btn-primary btn-sm">View Products</a>
    </div>
   
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="product-add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="productCode">Product Code</label>
                            <input type="text" name="productCode" class="form-control" id="productCode" placeholder="Enter product code">
                        </div>
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" name="productName" class="form-control" id="productName" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                            <label for="productLine">Product Line</label>
                            <input type="text" name="productLine" class="form-control" id="productLine" placeholder="Enter product line">
                        </div>
                        <div class="form-group">
                            <label for="productVendor">Product Vendor</label>
                            <input type="text" name="productVendor" class="form-control" id="productVendor" placeholder="Enter product vendor">
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea name="productDescription" class="form-control" id="productDescription" placeholder="Enter product description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quantityInStock">Quantity In Stock</label>
                            <input type="text" name="quantityInStock" class="form-control" id="quantityInStock" placeholder="Enter quantity in stock">
                        </div>
                        <div class="form-group">
                            <label for="buyPrice">Buy Price</label>
                            <input type="text" name="buyPrice" class="form-control" id="buyPrice" placeholder="Enter buy price">
                        </div>
                        <div class="form-group">
                            <label for="MSRP">MSRP</label>
                            <input type="text" name="MSRP" class="form-control" id="MSRP" placeholder="Enter MSRP">
                        </div>
                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


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

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp, "uploads/" . $image);

    $statement = $pdo->prepare("INSERT INTO `products` (`productCode`, `productName`, `productLine`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `image`) VALUES (:productCode, :productName, :productLine, :productVendor, :productDescription, :quantityInStock, :buyPrice, :MSRP, :image)");

    $statement->execute([
        ':productCode' => $productCode,
        ':productName' => $productName,
        ':productLine' => $productLine,
        ':productVendor' => $productVendor,
        ':productDescription' => $productDescription,
        ':quantityInStock' => $quantityInStock,
        ':buyPrice' => $buyPrice,
        ':MSRP' => $MSRP,
        ':image' => $image
    ]);

    header('Location: products.php');
}
?>

<?php require_once('footer.php'); ?>