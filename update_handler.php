<?php

if(isset($_POST['btn_update'])) {
    #form validation
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    #grab the firstname
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    } else {
        $firstname_err = "First name is required";
    };

    #grab lastname
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    } else {
        $lastname_err = "Last  name is required";
    };

    #grab email

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = "Email name is required";
    };



    include 'config.php';
    $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email' WHERE id=$id";

    #save data into db
    mysqli_query($conn,$sql);
    header("location:index.php");
}
?>