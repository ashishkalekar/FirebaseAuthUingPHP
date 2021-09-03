<?php
session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

$_SESSION['status']="Session Expired please login again";
    header('location:login.php');
    exit();

?>