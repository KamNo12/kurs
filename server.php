<?php
session_start();

 //$username='';
 //$email='';
 $errors=array();
 

 require_once 'connect.php';

 $db= new mysqli($host,$db_user,$db_password,$db_name);

 if(isset($_POST['reg_user'])){
     $username=mysqli_real_escape_string($db,$_POST['username']);
     $email=mysqli_real_escape_string($db,$_POST['email']);
     $surname=mysqli_real_escape_string($db,$_POST['surname']);
     $password=mysqli_real_escape_string($db,$_POST['password']);
     $password2=mysqli_real_escape_string($db,$_POST['password2']);

    
    if(empty($username )){array_push($errors,"Pole imie jest wymagane ");}
    if(empty($email )){array_push($errors,"Adres email jest wymagany ");}
    if(empty($surname )){array_push($errors,"Nazwisko jest wymagane ");}
    if(empty($password )){array_push($errors,"Haslo jest wymagane ");}
    if(strlen($password)<8){array_push($errors,"Haslo musi zawierac conajmniej 8 znakow");}
    if($password !=$password2){
        array_push($errors,"hasla musz byc identyczne");
    }
    $user_check_query="SELECT * FROM users WHERE email='$email'LIMIT 1";
    $result = mysqli_query($db,$user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['email']===$email){
            array_push($errors,"adres email jest juz w bazie danych");
        }
    }
    if(count($errors)==0){
        $password=md5($password);
        $query ="INSERT INTO users(email,name,surname,password) VALUES ('$email','$username','$surname','$password')";
        mysqli_query($db,$query);
        
        
        if (time_nanosleep(2, 500000)) {
       
            header('location:zaloguj.php');
        }
    }
 }
 if(isset($_POST['login_user'])){
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
   
    if(empty($email)){
        array_push($errors,"adres email jest wymagany");
        
    }
    
    if(empty($password)){
        array_push($errors,"Haslo jest wymagane");
        
    }
    
    if(count($errors)==0){
        
        $password=md5($password);
        $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
        
        $results =mysqli_query($db,$query);
        $user = mysqli_fetch_assoc($results);
        $_SESSION['username']=$user['name'];
        $_SESSION['surname']=$user['surname'];
        $_SESSION['email']=$user['email'];

        if(mysqli_num_rows($results)==1)
        { 
            $_SESSION['log']=true;
            header('location:kamil.php');
        }
        else
        {
            array_push($errors,"zle dane logowania");
        }
    }
    
 }
 


 
?>