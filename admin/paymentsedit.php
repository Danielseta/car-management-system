<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Edit Product</h1>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="paymentsedit.php?id=<?php echo $row['customerNumber']; ?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
                          <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                          </div>
                          <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control">
                          </div>
                          <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="3"><?php echo $row['description']; ?></textarea>
                          </div>
                          <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" class="form-control">
                                    <option value="">Select Category</option>
                                    <?php
                                    $statement = $pdo->prepare('SELECT * FROM `categories`');
                                    $statement->execute();
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $row) {
                                         < option value="<?php echo $row['customerNumber']; ?>" <?php if($row['customerNumber'] == $product['category_id']) { echo 'selected'; } ?>><?php echo $row['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                          </div>
                          <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image">
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

**Delete Page**

```php
<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Delete Product</h1>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="product-delete.php?id=<?php echo $row['p_id']; ?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
                          <p>Are you sure want to delete this item?</p>
                          <button type="submit" class="btn btn-danger">Delete</button>
                          <a href="products.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
```