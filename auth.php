<?php
session_start();
include('dbcon.php');

use Firebase\Auth\Token\Exception\InvalidToken;
if(isset($_SESSION['verified_user_id'])){

    $uid=$_SESSION['verified_user_id'];
    $idTokenString=$_SESSION['idTokenString'];


    try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        //echo "working";
    } catch (InvalidToken $e) {
        echo 'The token is invalid: '.$e->getMessage();
         $_SESSION['status']="token expire/invaid";
         header('location:logout.php');
         exit();
        
    } catch (\InvalidArgumentException $e) {
        echo 'The token could not be parsed: '.$e->getMessage();
    }




 }
 else{
    $_SESSION['status']="Session Expired please login again";
    header('location:login.php');
    exit();
 }  

?>