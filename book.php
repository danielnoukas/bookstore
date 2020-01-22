<?php
require_once 'db_connection.php';
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM Books.books b LEFT JOIN book_authors ba ON ba.book_id = b.id
LEFT JOIN authors a ON ba.author_id = a.id WHERE b.id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

?>



<!DOCTYPE html>
<html lang="en">
<style>
body {
  background-color: #ccbf9b;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $book['title']; ?></title>
<<<<<<< HEAD

    
    
</head>
<body>
<a href="delete.php?id=<?php echo $id;  ?>">DELETE</a>
<a href="edit.php?id=<?php echo $id;  ?>">EDIT</a>
<br>
<?php  echo $book['title']; ?>  
<br>
<?php echo $book['release_date']; ?>  
<br>
<?php echo $book['language']; ?>  
<br>
<?php echo $book['summary']; ?>  
<br>
<?php echo $book['price']; ?>
<br> 
<?php echo $book['pages']; ?> 
<br> 
<?php echo $book['first_name'] ." ". $book['last_name']; ?> 
=======
</head>
<body>
<br> 
<h3>Raamatu pealkiri</h3>
<?php echo $book['title']; ?>  
<br>
<h3>Raamatu autor</h3>
<?php echo $book['first_name']; ?> <?php echo $book['last_name']; ?>
<h3>Raamatu ilmumisaasta</h3>
<?php echo $book['release_date']; ?>  
<br>
<h3>Raamatu keel</h3>
<?php echo $book['language']; ?>  
<br>
<h3>Raamatu kirjeldus</h3>
<?php echo $book['summary']; ?>  
<br>
<h3>Raamatu hind</h3>
<?php echo $book['price']; ?>
<br> 
<h3>Raamatu lehekülgede arv</h3> 
<?php echo $book['pages']; ?> 
<br>
<img src="<?php echo $book['cover_path']; ?>" alt="Smiley face" height="150" width="150">
<br>
<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
<br>
<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
>>>>>>> 8119d1af82cfa205c3a1907ca5c82c38d512a1bd
</body>
</html>