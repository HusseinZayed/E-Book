<?php
if(!isset($_SESSION['user_id'])){
    if($index==3){
        header('location:index.php');
    }
}else{
    if($index==0 or $index==1){
        header('location:index.php');
    }else{
        if($index==3){
            if($_SESSION['user_role']=='user'){
                header('location:index.php');
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <link rel="stylesheet" type="text/css" href="css/wow.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title><?= $page_name; ?></title>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>

<body>