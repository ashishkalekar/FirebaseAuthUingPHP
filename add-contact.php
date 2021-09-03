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
         <div class="card-header">
           <h4>
            Registration Page
             <a href="index.php" class="btn btn-danger float-end">Back</a>
           </h4>
         </div>
         <div class="card-body">
            <form action="code.php" method="POST">
            <div class="form-group mb-3">
                <label for="">F name</label>
                <input type="text" name="fname" class="form-control">

            </div>
            <div class="form-group mb-3">
                <label for="">l name</label>
                <input type="text" name="lname" class="form-control">

            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">

            </div> 
            <div class="form-group mb-3">
                <label for="">Phone number</label>
                <input type="text" name="number" class="form-control">

            </div>                      
            <div class="form-group mb-3">
                <button type="submit" name="saveContact" class="btn btn-primary"> Save contact</button>
            </div>   
        </form>
         
         </div>
       </div>
     </div>
   </div>

   <?php
  include('includes/footer.php');

   ?> 