<?php
session_start();
$page_name = "Login";
$index = 1;
require_once('classes/user.php');
$object = new user();
$msg = "";
if (isset($_POST['login'])) {
    $msg = $object->login($_POST['email'], $_POST['password']);
    if (is_array($msg)) {

        $row = mysqli_fetch_assoc($msg[0]);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_lname'] = $row['user_lname'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_phone'] = $row['user_phone'];
        $_SESSION['user_location'] = $row['user_location'];
        $_SESSION['user_avatar'] = $row['user_avatar'];
        $_SESSION['user_birth_date'] = $row['user_birth_date'];
        $_SESSION['user_role'] = $row['user_role'];
        $_SESSION['user_status'] = $row['user_status'];
        $_SESSION['user_book_uploaded'] = $row['user_book_uploaded'];
        $_SESSION['user_book_downloaded'] = $row['user_book_downloaded'];
        $_SESSION['user_password'] = $row['user_password'];
       // setcookie('email',$_SESSION['user_email'],time()+(3600*30),'/'); 
        //setcookie('password',$_SESSION['user_password'],time()+(3600*30),'/');

        if (!empty($_POST['activecookies'])) {
            setcookie("email", $_POST['email'], time() + (3600 * 30), "/");
            setcookie("password", $_POST['password'], time() + (3600 * 30), "/");
        }
    }
}
?>
<?php

require_once('header.php');
require_once('navbar.php');

?>

<div class="container">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <?php
            if (empty($msg)) { } elseif (is_array($msg)) {
                echo "<div class='alert alert-success'><i class='fa fa-check-circle' style='color:green;'></i> Success</div>";
            } else {
                echo "<div class='alert alert-danger'><i class='fa fa-times-circle' style='color:red;'></i> $msg</div>";
            }
            ?>

            <form class="form" method="post" autocomplete="on" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="registrationForm">
                <div class="form-group ">
                    <!-- has-error has-feedback -->
                    <label for="email">
                        <h4>Email</h4>
                    </label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= isset($_COOKIE['email'])? $_COOKIE['email']:""; ?>" placeholder="you@email.com" title="enter your email.">
                    <!-- <span class="fa fa-times-circle form-control-feedback"></span> -->
                </div>
                <div class="form-group ">
                    <!-- has-success has-feedback -->
                    <label for="password">
                        <h4>Password</h4>
                    </label>
                    <input type="password" class="form-control" name="password" id="password" value="<?= isset($_COOKIE['password'])?$_COOKIE['password']:""; ?>" placeholder="password" title="enter your password.">
                    <!-- <span class="fa fa-check-circle form-control-feedback"></span> -->
                </div>
                <div class="form-group">
                    <label for="cookies">
                        <h4><a>Forget My Password</a></h4>
                    </label><br>
                    <input type="checkbox" name="activecookies">
                    <label for="cookies">
                        <h4>Remember Me</h4>
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn  btn-success" name="login" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php
require_once('footer.php');
?>