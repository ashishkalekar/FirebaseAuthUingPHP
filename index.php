<!doctype html>
<html lang="en">
  <?php
    error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting', E_ALL);
  session_start();
  include('includes/header.php');
  
  ?>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <?php
         if(isset($_SESSION['status']))
         {
           echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
           unset($_SESSION['status']);
         }
         ?>
         <div class="card">
         <div class="card-header">
           <h4>
              php firebase
           </h4>
         </div>
         <div class="card-body">
         Here is Firebase Authentication Project 

         
          <a class="nav-link active" href="registration.php">Please SingUp our system to check Authentication</a>
       
          <a class="nav-link active" href="login.php">Please SingIn our system to check Authentication</a>
        

         </div>
       </div>
     </div>
   </div>
   </div>
   <?php
  include('includes/footer.php');

   ?> 