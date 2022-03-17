<?php
include('server.php');
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="styles/rejest.css">
</head>

<body>



    <h1>Formularz rejestracyjny</h1>
    <a href="index.php">
        <h1><span class="l1">C</span>iuchowianka</h1>
    </a>
    <div class="container">
        <form action="rejestr.php" method="post">
            <?php include('errors.php'); 
             if(isset($_SESSION['sukces'])){
                 echo $_SESSION['sukces'];
             
             }
             ?>
            <p> <label for="name">Imie</label> <input type="text" name="username" id="username" value="<?php echo $username ?>"> </p>

            <p> <label for="surname">Nazwisko</label> <input type="text" name="surname" id="surname"> </p>

            <p><label for="email">E-mail</label> <input type="email" name="email" id="email" value="<?php echo $email; ?>"> </p>

            <p> <label for="password">Hasło</label> <input type="password" name="password" id="password"> </p>

            <p> <label for="password2"> Powtórz Hasło</label> <input type="password" name="password2" id="password2"> </p>

            <input type="submit" value="Wyślij" name="reg_user"><br>

        </form>
    </div>












</body>

</html>