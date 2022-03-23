<?php
include ('server.php');

if(isset($_SESSION['log'])&&($_SESSION['log']==true)){
    header('location:kamil.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strona logowania</title>
        
        <link rel="stylesheet" href="styles/rejest.css">
    </head>
    
    <body>
        
        <h1>Formularz logowania</h1>
        <a href="index.php">
            <h1><span class="l1">C</span>iuchowianka</h1>
        </a>
        
        
        <div class="container">
            <form action="zaloguj.php" method="POST">
            <?php
             include('errors.php'); 
             ?>

            <p> <label for="email">Login</label> <input type="email" id="email" name="email" autofocus></p>
            <p><label for="haslo">Hasło</label><input type="password" id="password" name="password"></p>
            <input type="submit" value="Zaloguj" name="login_user">
            <p class="left-text">Nie masz konta?</p>
            <p>Zapraszamy do <a href="rejestr.php">Rejestracji </a></p>
            <p><a href="reset_hasla.html">Nie pamietam hasła</a></p>

        </form>

    </div>

</body>

</html>