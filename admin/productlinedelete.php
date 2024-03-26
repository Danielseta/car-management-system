<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM productlines WHERE productLine = ?");
$statement->execute(array($id));
header("Location: productlines.php");
?>

<?php require_once('footer.php'); ?>