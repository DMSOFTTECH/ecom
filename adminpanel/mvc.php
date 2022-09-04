<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <?php
    require_once(__DIR__ . "/modal/Card_Registration.php");
    $url=explode("/",$_SERVER['REQUEST_URI']);
    $user_url=urldecode($url[sizeof($url)-1]);
    $data=Card_Registration::getUserCards($user_url);

    //    $list=$data["list"];
        print_r($data);
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Details  | Digital Advertiser Visiting Card</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once(__DIR__ . '/view/common_css.php') ?>

</head>

<body>



<?php require_once(__DIR__ . '/view/common_js.php'); ?>
</body>
</html>
