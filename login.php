  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  session_start();
  if(isset($_SESSION['verified_user_id'])){
  $_SESSION['status']="alredy loged in";
  header('location:home.php');
  exit();
  }
  include('includes/header.php');
  
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
            SignIn Form
           </h4>
         </div>
         <div class="card-body">
            <form action="loginauth.php" method="POST">
                <div class="form-group mb-3">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div> 
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="pass" class="form-control">

                </div>                      
                <div class="form-group mb-3">
                    <button type="submit" name="signin" class="btn btn-primary"> SingIn Now</button>
                    <a href="forgetpass.php" class="btn btn-outline-dark">Forget Password</a>
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