<?php
session_start();
if(!isset($_SESSION['log'])||($_SESSION['log']==false)){
    header('Location: zaloguj.php');
    exit();
}

   




?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>zalogowano</title>
    </head>
    <body>
        <h1>zalogowano</h1>
        <?php

echo "<p> Witaj ".$_SESSION['username']." ".$_SESSION['surname'].'</br>';
echo "Twój adres email to: ".$_SESSION['email'];

echo '<h1> HELLO '.$_SESSION['username'].'</h1>'.'</br>'.'<a href="logout.php">WYLOGUJ</a>';

?>
</body>
</html>