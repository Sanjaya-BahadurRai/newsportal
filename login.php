<?php include_once("includes/header.php"); ?>
<?php include_once("config/db_connection.php"); ?>

<?php
if(isset($_POST['btn_login'])){

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    }
    else{
        $error_email = "Email field is Required";
    }
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = md5($_POST['password']);
    }
    else{
        $error_password = "Password field is Required";
    }

    if(
        isset($email) &&
        isset($password) 
    ){
        $sql = "INSERT INTO tbl_user
        (email,password)
        values('$email','$password')";

        $connection->query($sql);
    }
}


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
?>

    <main>
        <div class="container">
            <div class="form">
                <h1>Login</h1>
                <form action="" method="Post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                    <?php 
                        if(isset($error_email)){
                            echo $error_email;
                        }
                    ?>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <?php 
                        if(isset($error_password)){
                            echo $error_password;
                        }
                    ?>
                    <div class="form-group">
                        <button type="submit" name="btn_login" class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include_once("includes/footer.php"); ?>
    