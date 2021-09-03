<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
         if(isset($_SESSION['status']))
         {
           echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
           unset($_SESSION['status']);
         }
         ?>