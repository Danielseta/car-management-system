<?php require_once('header.php'); ?>

<?php
$id = $_GET['id'];
$statement = $pdo->prepare("DELETE FROM offices WHERE officeCode = ?");
$statement->execute(array($id));
header("Location: office.php");
?>

<?php require_once('footer.php'); ?>