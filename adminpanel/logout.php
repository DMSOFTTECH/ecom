<?php 
session_start();
unset($_session['ADMIN_LOGIN']);
unset($_session['ADMIN_NAME']);
header('location:../login.php');
die();


?>