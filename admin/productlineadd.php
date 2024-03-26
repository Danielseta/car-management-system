<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Product</h1>
    </div>
    <div class="content-header-right">
        <a href="product.php" class="btn btn-primary btn-sm">View All</a>
    </div>
   
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="productadd.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="productLine">Product Line</label>
                            <input type="text" class="form-control" name="productLine" id="productLine">
                        </div>
                        <div class="form-group">
                            <label for="textDescription">Text Description</label>
                            <textarea class="form-control" name="textDescription" id="textDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="htmlDescription">Html Description</label>
                            <textarea class="form-control" name="htmlDescription" id="htmlDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>