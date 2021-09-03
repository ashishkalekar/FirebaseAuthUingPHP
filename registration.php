<!doctype html>
<html lang="en">
  <?php
  error_reporting(E_ALL);
  error_reporting(-1);
  ini_set('error_reporting', E_ALL);
  include('includes/header.php');
  
  ?>
   <div class="container">
     <div class="row justify-content-center">
      
     <div class="col-md-6">
     <div class="card"> 
         <div class="card-header">
           <h4>
            SingUp Page
           </h4>
         </div>
         <div class="card-body">
            <form action="code.php" method="POST">
                <div class="form-group mb-3">
                    <label for="">Full Name</label>
                    <input type="text" name="fname" class="form-control">

                </div>
                <div class="form-group mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="number" class="form-control">

                </div>
                <div class="form-group mb-3">
                    <label for="">Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div> 
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="pass" class="form-control">

                </div>                      
                <div class="form-group mb-3">
                    <button type="submit" name="registration" class="btn btn-primary"> SingUP Now</button>
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