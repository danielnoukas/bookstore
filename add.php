<?php
require_once 'db_connection.php';
//var_dump($_GET);
$title = $_GET['title'];
$year = $_GET['year'];
$stmt = $pdo->prepare('SELECT * FROM Books.authors');
$stmt->execute ();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">
    <div class="b">
    <h1>Otsing</h1>
    <div>

</head>
<body>
<body style='background-color:#e6e5ca'>


    <form action="index.php" method="post">
       
        <input type='text' name='title' placeholder='Pealkiri'>
        <br>
        <input type='text' name='year' placeholder='Aasta'>
        <br>
        <input type='submit' value='Otsi'>
        
    </form>
    <ul>

<?php
    echo '<ul>';
    while ( $row = $stmt->fetch() ) {
        echo '<li><a href="book.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
    }
    echo '</ul>';
?>

</body>
</html>