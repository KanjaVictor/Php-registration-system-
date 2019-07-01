<?php include 'header.php'?>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="signup_handler.php" method="post">
                    <span class="btn-danger">
                        <?php
                        if(isset($_GET['f_error'])){
                            echo "First name is required";
                        }
                        ?>
                    </span>
                    <div class="form-group">
                        <label for="firstname">First name</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last name:</label>
                        <span class="btn-danger">
                        <?php
                        if(isset($_GET['l_error'])){
                            echo "First name is required";
                        }
                        ?>
                    </span>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <span class="btn-danger">
                        <?php
                        if(isset($_GET['e_error'])){
                            echo "Email name is required";
                        }
                        ?>
                    </span>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <span class="btn-danger">
                        <?php
                        if(isset($_GET['p1_error'])){
                            echo "First name is required";
                        }
                        ?>
                    </span>
                        <input type="password" class="form-control" id="pwd" name="password_1">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <span class="btn-danger">
                            <?php
                            if(isset($_GET['p2_error'])){
                                echo "Confirm password is required";
                            }
                            ?>
                        </span>
                        <span class="btn-danger">
                            <?php
                            if(isset($_GET['pm_error'])){
                                echo "Password did not match!!!";
                            }
                            ?>
                        </span>
                        <input type="password" class="form-control" id="pwd" name="password_2">
                    </div>
                    <div class="form-group">
                        <label><input type="date" name="date"> Date Registered</label>
                    </div>
                    <button type="submit" name="signup" class="btn btn-default">Signup</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<?php include 'footer.php'?>
