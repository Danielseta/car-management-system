<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM employees WHERE employeeNumber = ?");
$statement->execute(array($id));
header("Location: employee.php");
?>

<?php require_once('footer.php'); ?>