<?php include 'header.php'?>
<?php
include "config.php";
//session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['loggedin'])){
    header('location:signup.php');

}else{
    if(isset($_SESSION['email'])== 'admin@gmail.com'){
        $_SESSION['admin'] = true;
    }
}




?>
<div class="container">
    <div class="jumbotron">
        <h3 style="text-align: center">Welcome to CRUD App</h3>
        <span class="btn-success">
            <?php
            if(isset($_GET['success_msg'])){
                echo "Welcome back";
            }
            ?>
        </span>
    </div>
    <?php
    if(isset($firstname)){
        echo $firstname;
    }
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        #create a query/instruction to the db
        $Sql = "SELECT * FROM `users`";

        #fetch data from the database by issueing the query
        #the data will be stored in the variable '$fetched_results'
        $fetched_results = mysqli_query($conn,$Sql);

        #To get individual data use a loop (while loop)

        #convert fetched data into an associative array(key/value)
        while($row = mysqli_fetch_assoc($fetched_results)){
            # for each record in the while loop grab the data in thier
            #respective columns
            extract($row);

            echo "
                    <tr>
                       <td>$id</td>
                        <td>$firstname</td>
                        <td>$lastname</td>
                        <td>$email</td>
                        <td>
                        ";

                    if(isset($_SESSION['admin'])){


                       echo" <a href='update.php?user_id=$id&u_firstname=$firstname&u_lastname=$lastname&u_email=$email' class='btn-info' style='padding: 5px'>Update </a>;
                        <a href='delete.php?user_id=$id' class='btn-danger'>Delete </a>
                        </td>
                        </tr>
                ";
        }
        ?>
        <?php

        }
        ?>

        </tbody>
    </table>
</div>
</div>
<?php include 'footer.php'?>








