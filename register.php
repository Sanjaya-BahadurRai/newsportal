<?php include_once("includes/header.php"); ?>
<?php include_once("config/db_connection.php"); ?>

<?php
if(isset($_POST['btn_register'])){

    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = $_POST['name'];
    }
    else{
        $error_name = "Name field is Required";
    }
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $username = $_POST['username'];
    }
    else{
        $error_username = "Username field is Required";
    }
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
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    else{
        $error_phone = "Phone field is Required";
    }
    if(isset($_POST['dob']) && !empty($_POST['dob'])){
        $dob = $_POST['dob'];
    }
    else{
        $error_dob = "Date of Birth field is Required";
    }
    if(isset($_POST['gender']) && !empty($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    else{
        $error_gender = "Gender field is Required";
    }

    $status = 1;

    if(
        isset($name) &&
        isset($username) &&
        isset($email) &&
        isset($password) &&
        isset($phone) &&
        isset($dob) &&
        isset($gender) &&
        isset($status)
    ){
        $sql_insert = "INSERT INTO tbl_user
        (name,username,email,password,phone,dob,gender,status)
        values('$name','$username','$email','$password',$phone,$dob,'$gender',$status)";

        $connection->query($sql_insert);
    }
}


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
?>

    <main>
        <div class="container">
            <div class="form">
                <h1>Register Form</h1>
                <form action="" method="Post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" >
                    </div>
                    <?php 
                        if(isset($error_name)){
                            echo $error_name;
                        }
                    ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <?php 
                        if(isset($error_username)){
                            echo $error_username;
                        }
                    ?>
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
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                    <?php 
                        if(isset($error_phone)){
                            echo $error_phone;
                        }
                    ?>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date"  id="dob" name="dob" class="form-control" required>
                    </div>
                    <?php 
                        if(isset($error_gender)){
                            echo $error_gender;
                        }
                    ?>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select type="text" id="gender" name="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <?php 
                        if(isset($error_gender)){
                            echo $error_gender;
                        }
                    ?>
                    <div class="form-group">
                        <button type="submit" name="btn_register" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include_once("includes/footer.php"); ?>
    