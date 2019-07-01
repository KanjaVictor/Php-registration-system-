<?php
session_start();
#Declare/initialize empty variables to store the recieved data
$firstname=$lastname=$email=$password_1='';

include "config.php";
if(isset($_POST['signup'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if(empty($firstname)){
        header('location:signup.php?f_error');
        exit();
    }else{
        $firstname = $firstname;
    }

    if(empty($lastname)){
        header('location:signup.php?l_error');
        exit();
    }else{
        $lastname = $lastname;
    }
    if(empty($email)){
        header('location:signup.php?e_error');
        exit();
    }else{
        $email = $email;
    }
    if(empty($password_1)){
        header('location:signup.php?p1_error');
        exit();
    }else{
        $password_1 = $password_1;
    }
    if(empty($password_2)){
        header('location:signup.php?p2_error');
        exit();
    }else{
        $password_2 = $password_2;
    }

    if($password_1 != $password_2){
        header('location:signup.php?pm_error');
        exit();
    }else{
        $password_1 = md5($password_1);#hashing the password
    }

    $sql = "SELECT * FROM `users` WHERE firstname='$firstname' OR email='$email' LIMIT 1";
    $results = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($results);

    if($user){
        header('location:signup.php?user_error');
        exit();
    }


    $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password_1')";
    #save user into the database
    mysqli_query($conn,$sql);
    #go to home page
    $_SESSION['email'] = $email;
    $_SESSION['admin'] = false;
    header('location:index.php');


}


?>