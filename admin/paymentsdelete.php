<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM payments WHERE customerNumber = ?");
$statement->execute(array($id));
header("Location: payments.php");
?>

<?php require_once('footer.php'); ?>