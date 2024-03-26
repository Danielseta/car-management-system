<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM products WHERE productCode = ?");
$statement->execute(array($id));
header("Location: product.php");
?>

<?php require_once('footer.php'); ?>