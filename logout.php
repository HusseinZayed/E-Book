<?php
session_start();
session_destroy();
// setcookie('email',"",time()-99,'/');
// setcookie('password',"",time()-99,'/');
header('location:login.php');
?>