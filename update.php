<?php
include 'header.php';
if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];
    $firstname = $_GET['u_firstname'];
    $lastname = $_GET['u_lastname'];
    $email = $_GET['u_email'];

}


?>
<div class="jumbotron">
    <h2>Welcome to <?php echo $firstname ?> <?php echo $lastname ?> update page</h2>
</div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="update_handler.php" method="post">
            <input type="text" name="id" hidden value="<?php echo $id ;?>">
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $firstname ;?>">
            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $lastname ;?>" >
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ;?>">
            </div>

            <button type="submit" name="btn_update" class="btn btn-default">Update</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

'
;
