<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('includes/header.php');
session_start();

include('dbcon.php');

    if(isset($_POST['forget']))
    {
        $email=$_POST['email'];

        try {
            $user = $auth->getUserByEmail($email);
          //  echo $email;
            $link = $auth->getPasswordResetLink($email);
            //echo $link;
            require("mail_function.php");
            $mail_status = sendOTP($_POST["email"], $link);
        }
        catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            //echo $e->getMessage();
             $_SESSION['status']="No email found in our system";
            header("location:forgetpass.php");
            exit();
        }
}

?>

<!doctype html>
<html lang="en">
<div class="container">
     <div class="row justify-content-center">
     <div class="col-md-4">
     <?php if(isset($_SESSION['status']))
         {
           echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
           unset($_SESSION['status']);
         }
?>
    <div class="card"> 
        
         <div class="card-header">
           <h4>
            Sign-In Form
           </h4>
         </div>
         <div class="card-body">
            <form action="#" method="POST">
                <div class="form-group mb-3">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div>                     
                <div class="form-group mb-3">
                    <button type="submit" name="forget" class="btn btn-primary"> reset Now</button>
                </div>  
            </form>
         </div>
        </div>
       </div>
     </div>
   </div>

   <?php
  include('includes/footer.php');

   ?> 




