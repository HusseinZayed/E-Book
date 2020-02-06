<?php
session_start();
$page_name = "Update Profile Account";
$index = 7;
require_once('classes/user.php');
$object = new user();
$msg = "";
if (isset($_POST['update'])) {
    if ($_POST['email'] != $_SESSION['user_email']) {
        foreach ($_POST as $key => $value) {
            if ($key=='password' and empty($_POST[$key])){
                $_POST['password'] = $_SESSION['user_password'];
                $object->password=$_POST['password'];
                continue;
            }
            $msg .= $object->validation($key, $value);
        }
    } else {
        $object->email = $_POST['email'];
        foreach ($_POST as $key => $value) {
            if ($key=='password' and empty($_POST[$key])){
                $_POST['password'] = $_SESSION['user_password'];
                $object->password=$_POST['password'];
                continue;
            }
            if ($key == "email")
                continue;
            $msg.= $object->validation($key, $value);
        }
    }
    if ($object->CheckDataSet()) {
        if($_FILES['avatar']['size']>0)
        {$object->UploadImg('avatar');
       
        }
        else
        {$object->avatar=$_SESSION['user_avatar'];}
        $command = $object->update($_SESSION['user_id']);
            $row=mysqli_fetch_assoc($command);
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
            $msg = 1;
            header('location:profile.php');
    }
}
require_once('header.php');
require_once('navbar.php');
?>

<div class="container">
    <div class="row">
        <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="updateuserform" enctype="multipart/form-data">
            <div class="col-sm-3">
                <div class="text-center">
                    <img src="<?= isset($_SESSION['user_avatar']) ? $_SESSION['user_avatar'] : "img/default.png"; ?>" class="avatar img-circle img-avatar " alt="avatar">
                    <h6>Upload a special photo...</h6>
                    <input type="file" class="text-center center-block file-upload" name="avatar" id="update_avatar">
                </div>
                <br>
                <div id="showmsgerror text-center">
                    <?php
                    if ($msg === 1) {
                        echo "<img src='img/loading3.gif' width='100px' height='100px'> Updating...";
                        echo "<br><div class='alert alert-success'> Account Updated Successfully</div>";
                    } elseif (empty($msg)) { } else {
                        echo "<div class='alert alert-danger'>$msg</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>First name</h4>
                                </label>
                                <input type="text" class="form-control" name="first_name" value="<?= isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ""; ?>" id="update_first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Last name</h4>
                                </label>
                                <input type="text" class="form-control" name="last_name" value="<?= isset($_SESSION['user_lname']) ? $_SESSION['user_lname'] : ""; ?>" id="update_last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Phone</h4>
                                </label>
                                <input type="text" class="form-control" name="phone" value="<?= isset($_SESSION['user_phone']) ? $_SESSION['user_phone'] : ""; ?>" id="update_phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="birthdate">
                                    <h4>Birth Date</h4>
                                </label>
                                <input type="date" class="form-control" name="birthdate" value="<?= isset($_SESSION['user_birth_date']) ? $_SESSION['user_birth_date'] : ""; ?>" id="update_birthdate">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Location</h4>
                                </label>
                                <input type="text" class="form-control" value="<?= isset($_SESSION['user_location']) ? $_SESSION['user_location'] : ""; ?>" id="update_location" name="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" value="<?= isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ""; ?>" id="update_email" placeholder="you@email.com" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="password">
                                    <h4>Password</h4>
                                </label>
                                <input type="password" class="form-control" name="password" id="update_password" placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn  btn-success" type="register" name="update"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </form>
    </div>
</div>

<?php
require_once('footer.php');
?>