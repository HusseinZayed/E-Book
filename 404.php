<?php
session_start();
$page_name = "Page Not Found";
$index = 8;
require_once('header.php');
require_once('navbar.php');
?>
    <div class="container">
        <div class="row">
            <img src="img/notfound.jpg" width="100%" height="600px">
        </div>
    </div>
    <?php
    require_once('footer.php');
    ?>