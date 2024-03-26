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
            <div class="box box-info">
                <div class="box-body">
                    <form action="product-edit.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="<?php echo $result['name']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" value="<?php echo $result['price']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3"><?php echo $result['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" class="form-control">
                                <option value="">Select Category</option>
                                <?php
                                $statement = $pdo->prepare("SELECT * FROM productlines");
                                $statement->execute();
                                $result1 = $statement->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($result1 as $row) {
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $result['category_id']) { echo 'selected'; } ?>><?php echo $row['name']; ?></option>
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
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" <?php if($result['status'] == 1) { echo 'selected'; } ?>>Active</option>
                                <option value="0" <?php if($result['status'] == 0) { echo 'selected'; } ?>>Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
```

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
                    <form action="product-delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                        <p>Are you sure want to delete this item?</p>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>