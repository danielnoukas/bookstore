
<?php
require_once 'db_connection.php';
if (isset ($_POST['action'])) {
    var_dump($_POST);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $stmt = $pdo->prepare('INSERT INTO authors (first_name, last_name) VALUES (:first_name, :last_name)');
    $stmt->execute(['first_name' => $first_name , 'last_name' => $last_name]);
}
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


    <form action="authors.php" method="post">
       
        <input type='text' name='first_name' placeholder='Eesnimi'>
        <br>
        <br>
        <input type='text' name='last_name' placeholder='Perekonnanimi'>
        <br>
        <br>
        <input type='submit' value='Lisa' name='action'>


    </form>
    <ul>

<?php
    $stmt = $pdo->prepare('SELECT * FROM Books.authors');
    $stmt->execute();
    
    echo '<ul>';
    while ( $row = $stmt->fetch() ) {
        echo '<li>' . $row['first_name'] .' '. $row['last_name'] . '</li>';
    }
    echo '</ul>';
?>

</body>
</html>