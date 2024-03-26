<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM orders WHERE orderNumber = ?");
$statement->execute(array($id));
header("Location: order.php");
?>

<?php require_once('footer.php'); ?>