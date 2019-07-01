<?php
session_start();
#Declare/initialize empty variables to store the recieved data
$email=$password='';

include "config.php";
if(isset($_POST['signin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];


    if(empty($email)){
        header('location:login.php?e_error');
        exit();
    }else{
        $email = $email;
    }
    if(empty($password)){
        header('location:login.php?p_error');
        exit();
    }else{
        $password= $password;
    }

    $sql = "SELECT * FROM `users` WHERE email='$email' OR password='$password' LIMIT 1";
    $results = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($results);

    if(!$user){
        header('location:signup.php?user_error');
        exit();
    }else{
        $_SESSION['loggedin'] = true;
        if(isset($email)){
            if($email == 'admin@gmail.com'){
                $_SESSION['admin'] = true;
            };
        }
        header('location:index.php?success_msg');
        exit();
    }



}


?>