<?php
require_once 'db_connection.php';
$id = $_GET['id'];
<<<<<<< HEAD
$stmt = $pdo->prepare("DELETE FROM books  WHERE id = :id");
$stmt->execute(['id' => $id]);
header("Location: index.php");
die();
=======
$stmt = $pdo->prepare('DELETE FROM Books.books WHERE id = :id');
$stmt->execute(['id' => $id]);
header("Location: index.php");
die();

>>>>>>> 8119d1af82cfa205c3a1907ca5c82c38d512a1bd
?>