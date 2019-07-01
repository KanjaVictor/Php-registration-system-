<?php include 'header.php';
//session_start();
if (isset($_SESSION['loggedin'])){
    header('location:index.php');
}



?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="login_handler.php" method="post">
                <?php
                    if(isset($user_error)){
                        echo "User does not exist, <a href='signup.php'>Signup</a> with us";
                    }
                ?>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <span class="btn-danger">
                        <?php
                        if(isset($_GET['e_error'])){
                            echo "Email cannot be blank";
                        }
                        ?>
                    </span>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <span class="btn-danger">
                        <?php
                        if(isset($_GET['p_error'])){
                            echo "First name is required";
                        }
                        ?>
                    </span>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" name="signin" class="btn btn-default">Sign in</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php include 'footer.php'?>
