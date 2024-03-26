<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>View Employee's</h1>
    </div>
    <div class="content-header-right">
<a href="employeeadd.php" class="btn btn-primary btn-sm">Add Employee</a>
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
                                <th width="10">employeeNumber</th>
                                <th width="60">lastName</th>
                                <th width="60">firstName</th>
                                <th width="60">extension</th>
                                <th width="60">email</th>
                                <th width="60">officeCode</th>
                                <th width="60">reportsTo</th>
                                <th width="60">jobTitle</th>
                                <th width="80">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
                            $statement = $pdo->prepare('SELECT * FROM `employees`');
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['employeeNumber']; ?></td>
                                    <td><?php echo $row['lastName']; ?></td>
                                    <td><?php echo $row['firstName']; ?></td>
                                    <td><?php echo $row['extension']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['officeCode']; ?></td>
                                    <td><?php echo $row['reportsTo']; ?></td>
                                    <td><?php echo $row['jobTitle']; ?></td>
                                    <td>                                        
                                        <a href="employeesedit.php?id=<?php echo $row['employeeNumber']; ?>" class="btn btn-primary btn-xs">Edit</a>
                                        <a href="#" class="btn btn-danger btn-xs" data-href="employeedelete.php?id=<?php echo $row['employeeNumber']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
                <p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
```