<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Order</h1>
    </div>
    <div class="content-header-right">
        <a href="orders.php" class="btn btn-primary btn-sm">View All</a>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body">
                    <form action="orderadd.php" method="post">
                        <div class="form-group">
                            <label for="orderNumber">Order Number</label>
                            <input type="text" name="orderNumber" class="form-control" id="orderNumber" placeholder="Enter order number">
                        </div>
                        <div class="form-group">
                            <label for="orderDate">Order Date</label>
                            <input type="date" name="orderDate" class="form-control" id="orderDate" placeholder="Enter order date">
                        </div>
                        <div class="form-group">
                            <label for="requiredDate">Required Date</label>
                            <input type="date" name="requiredDate" class="form-control" id="requiredDate" placeholder="Enter required date">
                        </div>
                        <div class="form-group">
                            <label for="shippedDate">Shipped Date</label>
                            <input type="date" name="shippedDate" class="form-control" id="shippedDate" placeholder="Enter shipped date">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" id="status" placeholder="Enter status">
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <textarea class="form-control" name="comments" id="comments" placeholder="Enter comments"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="customerNumber">Customer Number</label>
                            <input type="text" name="customerNumber" class="form-control" id="customerNumber" placeholder="Enter customer number">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>