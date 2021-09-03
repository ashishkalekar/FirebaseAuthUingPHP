<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
// include('includes/header.php');
include('dbcon.php');
use Firebase\Auth\Token\Exception\InvalidToken;


if(isset($_POST['signin']))
{
    $email=$_POST['email'];
    $clearTextPassword=$_POST['pass'];

    // echo $email;
    // echo $pass;

    try {
        $user = $auth->getUserByEmail($email);

        $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
       // $userInfo = $auth->getUserInfo($signInResult->getUid());
        $idTokenString = $signInResult->idToken();

        try 
        {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');

            $_SESSION['verified_user_id']=$uid;
            $_SESSION['idTokenString']=$idTokenString;

            $_SESSION['status']="login successfull";
            $_SESSION['email']= $email;
            header('location:home.php');
            exit();

        } 
        catch (InvalidToken $e)
        {
            echo 'The token is invalid: '.$e->getMessage();
        }
        catch (\InvalidArgumentException $e) 
        {
            echo 'The token could not be parsed: '.$e->getMessage();
        }


 
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        //echo $e->getMessage();
         $_SESSION['status']="no email found";
        header("location:login.php");
        exit();
    }


}

?>