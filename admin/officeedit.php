<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Edit office</h1>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="office-edit.php?id=<?php echo $row['officeCode']; ?>" method="POST">
                        <div class="form-group">
                            <label for="officeCode">officeCode</label>
                            <input type="text" name="officeCode" class="form-control" value="<?php echo $row['officeCode']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="city">city</label>
                            <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="addressLine1">addressLine1</label>
                            <input type="text" name="addressLine1" class="form-control" value="<?php echo $row['addressLine1']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="addressLine2">addressLine2</label>
                            <input type="text" name="addressLine2" class="form-control" value="<?php echo $row['addressLine2']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="state">state</label>
                            <input type="text" name="state" class="form-control" value="<?php echo $row['state']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="country">country</label>
                            <input type="text" name="country" class="form-control" value="<?php echo $row['country']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="postCode">postCode</label>
                            <input type="text" name="postCode" class="form-control" value="<?php echo $row['postCode']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="territory">territory</label>
                            <input type="text" name="territory" class="form-control" value="<?php echo $row['territory']; ?>" required>
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