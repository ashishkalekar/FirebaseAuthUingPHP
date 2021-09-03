<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include('dbcon.php');

if(isset($_POST['registration']))
{
    $f_name=$_POST['fname'];
    $phone_number="+91".$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $UserData = [
        'email' =>$email,
        'emailVerified'=> false,
        'phoneNumber' =>$phone_number,
        'password' =>$password,
        'displayName'=>$f_name,

    ];
  //  $ref_table = "contact";
   // $postRef = $database->getReference($ref_table)->push($postData);
    $createUser=$auth->createUser($UserData);
    if($createUser){
        $_SESSION['status']= "registration successfull session expired please login again";
        header('location:logout.php');
    }
    else{
        $_SESSION['status']= "registration faild please register again";
        header('location:registration.php');   
    }

}


?>