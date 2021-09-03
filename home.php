<!doctype html>
<html lang="en">
  <?php

include('auth.php');
include('dbcon.php');

  include('includes/header.php');

  
  ?>
   <div class="container">
     <div class="row justify-content-center">
     <div class="col-md-4">
         <?php
        if(isset($_SESSION['status']))
        {
           $user = $auth->getUserByEmail($_SESSION['email']);
           //echo $user;
          echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
          
         ?>
     <div class="card"> 
         <div class="card-header">
           <h4> 
              User Profile
           </h4>
         </div>
         <div class="card-body">
         <?php
     echo "<h5 class='alert alert-success'> Welcome Back<br><b>".$user->displayName."</b></h5>";
       //    $user = $auth->listUsers();
       

           unset($_SESSION['status']);
         }
         ?>

         </div>
       </div>
     </div>
   </div>

   <?php
  include('includes/footer.php');

   ?> 